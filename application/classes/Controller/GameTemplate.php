<?php defined('SYSPATH') or die('No direct script access.');
  define('ATTACK_TURNS', 15);
  define('MAX_MEMBERS', 8);
  class Controller_GameTemplate extends Controller_Template 
  {
  
     	public $template = 'template/template';
  		public $captcha = true;
      /**
       * The before() method is called before your controller action.
       * In our template controller we override this method so that we can
       * set up default values. These variables are then available to our
       * controllers if they need to be modified.
       */
      public function before()
      {

		parent::before();
		

		if(isset($_SESSION['user']))
		{
	      	$gameModel = new Model_Game();		
			$profMod = new Model_Profile();
			$username = $profMod->getUserBySalt($_SESSION['user']);
			$active = $gameModel->isActive();
				

		}
		
		
		
  		$this->template->checkLogin = true;
  		
  		$this->template->logout = "";
  	    if ($this->auto_render)
  	    {
  	    	// Initialize empty values
  	    	$this->template->title   = 'Fall of Kingdoms';
  	    	$this->template->content = '';
  	    	$this->template->header = 'Fall of Kingdoms';
	  		$this->template->styles = array();
	  		$this->template->scripts = array();
	  		$this->template->navLinks = array();
	  		

	  		/**
	  		 * 
	  		 * Game engine stuff ehre
	  		 */
	  		$gameModel = new Model_Game();
	  		
	  		$lastRanking = $gameModel->getLastRankUpdate();
	  		$lastRanking = strtotime($lastRanking[0]['time']);
	  		
	  		$current = time();
	  		$current = $current - $current  % 1800;
	  		$difference = $current - $lastRanking;
	  		$updatesToDo = $difference / 1800;
	  		
	  		if($updatesToDo > 0)
	  		{
	  			$gameModel->updateRanks($updatesToDo, date('Y-m-d H:i:s',  $current));
	  		}

	  		/**
	  		 * Update Guild ranks after userRanks strength done.
	  		 */
	  		/*$guildModel = new Model_Guilds();
	  		
	  		$lastGuildRanking = $guildModel->getLastRankUpdate();
	  		
	  		$lastGuildRanking = strtotime($lastGuildRanking[0]['time']);
	  		
	  		$current = time();
	  		$current = $current - $current  % 1800;
	  		$difference = $current - $lastRanking;
	  		$updatesToDo = $difference / 1800;
	  		
  	    	if(true)//$updatesToDo > 0)
	  		{
	  			$guildModel->updateRanks($updatesToDo, date('Y-m-d H:i:s',  $current));
	  		}
	  		/** End guild rankings */

			
	  		$lastGoldDrap = $gameModel->getLastGoldDrop();
	  		$lastGoldDrap = strtotime($lastGoldDrap[0]['time']);
	  		
	  		$currentGold = time();
	  		$currentGold = $currentGold - (($currentGold  + 300) % 900);
	  		
	  		$difference = $currentGold - $lastGoldDrap;
	  		$goldsToDo = $difference / 900;
	  		
	  		if($goldsToDo > 0)
	  		{
	  			$gameModel->dropGolds($goldsToDo, date('Y-m-d H:i:s',  $currentGold));
	  		}	
	  		
	
	  		$lastTurnDrop = $gameModel->getLastTurnDrop();
	  		$lastTurnDrop = strtotime($lastTurnDrop[0]['time']);
	  		
	  		$currentTurn = time();
	  		$currentTurn = $currentTurn - (($currentTurn) % 120);
	  		
	  		$difference = $currentTurn - $lastTurnDrop;
	  		$turnsToDo = $difference / 120;
	  		
	  		if($turnsToDo > 0)
	  		{
	  			$gameModel->dropTurns($turnsToDo, date('Y-m-d H:i:s',  $currentTurn));
	  		}	
	  		
	  		
	  		
	  		
	  		/**
			*	Game engine stuff done
	  		 */
	  		
			$usersession = (isset($_SESSION['user']) ? $_SESSION['user'] : FALSE);
			
			if(isset($_SESSION['user']) && $this->captcha)
			{
				$loginModel = new Model_Login();
				$loginModel->logUser();
				/**
				 * 
				 * Do Captch stuff
				 * 
				 */
				$lastCaptcha = $gameModel->getLastCaptcha();
				$lastCaptcha = strtotime($lastCaptcha[0]['time']);
				$current = time();
		  		//$current = $current - (($current) % 15);
		  		
		  		$difference = $current - $lastCaptcha;
		  		
		  		if($difference > (60 * 45) && $_SERVER["REQUEST_URI"] != "/Game/captcha")
		  		{

		  			header('Location: '.Kohana::$base_url."Game/captcha");
		  			die;
		  		}
		  		
		  		//$turnsToDo = $difference / 15;
				
				
			}
          	$this->template->logout = View::factory('Register/login')
          											->set('loginSession', $usersession);	
					
          }
      }
  	
      /**
       * The after() method is called after your controller action.
       * In our template controller we override this method so that we can
       * make any last minute modifications to the template before anything
       * is rendered.
       */
      public function after()
      {
      	$username;
      	if($this->template->checkLogin)
      	{
	      	if (!isset($_SESSION['user']))
			{
			    header("Location: ".Kohana::$base_url."Login");
			    die();
			}
			$gameModel = new Model_Game();
			$user = $gameModel->getStats();
			
			$profMod = new Model_Profile();
			$username = $profMod->getUserBySalt($_SESSION['user']);

			$isActive = $gameModel->isActive();
			
			if(is_null($isActive[0]) && $_SERVER["REQUEST_URI"] != "/Game/activate")
			{
				header('Location: '.Kohana::$base_url."Game/activate");
	  			die;
			}
			
			$messageModel = new Model_Message();
			$count = $messageModel->messageCount($username[0]['userName']);
			
			$this->template->controlPanel = View::factory('Game/controlPanel')
												->set('user', $user[0])
												->set('username', $username[0]['userName'])
												->set('count', $count);
      	}
      	
		if ($this->auto_render)
		{
		$styles = array(
			Kohana::$base_url.'media/css/bootstrap.css' => 'screen',
			Kohana::$base_url.'media/css/style.css' => 'screen',
		);
  
		$scripts = array(
			Kohana::$base_url.'media/js/jquery.js',
			Kohana::$base_url.'media/js/bootstrap.js',
			Kohana::$base_url.'media/js/system.js',
		);
		
		$profileName = isset($username[0]['userName']) ? $username[0]['userName'] : null;
		$links = array(
				'Home'=>Kohana::$base_url,
				'Rankings'=>Kohana::$base_url.'Game/ranking',
				'Profile'=>Kohana::$base_url.'Profile/user?name='.$profileName,
				'Recruit'=>Kohana::$base_url.'Game/recruit',
				'Buildings'=>Kohana::$base_url.'Game/buildings',
				'Guilds'=>Kohana::$base_url.'Guilds/rankings',
				'Upgrades'=>Kohana::$base_url.'Game/upgrades',
				'Store'=>Kohana::$base_url.'Store',
				'Who\'s Online'=>Kohana::$base_url.'online',
				'Captcha'=>Kohana::$base_url.'Game/captcha',
				'Guild'=>Kohana::$base_url.'Guilds/guild?guildID=',
				'Forums'=>Kohana::$base_url.'Forums',
		'Email'=>Kohana::$base_url.'Email',
		
		
		);
		
		$this->template->styles = array_merge( $this->template->styles, $styles );
		$this->template->scripts = array_merge( $this->template->scripts, $scripts );
		$this->template->navLinks = array_merge($this->template->navLinks, $links);
		$this->template->navBar = View::factory('template/navbars')
									->set('links', $this->template->navLinks);
	}
	parent::after();
	
      	
      }
  }