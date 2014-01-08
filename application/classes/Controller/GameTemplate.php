<?php defined('SYSPATH') or die('No direct script access.');
  define('ATTACK_TURNS', 15);
  define('MAX_MEMBERS', 8);
  define('COMPANY_NAME', 'Avialae');
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
		}
		
		
		
  		$this->template->checkLogin = true;
  		
  		$this->template->logout = "";
  	    if ($this->auto_render)
  	    {
  	    	// Initialize empty values
  	    	$this->template->title   = COMPANY_NAME;
  	    	$this->template->content = '';
  	    	$this->template->header = COMPANY_NAME;
	  		$this->template->styles = array();
	  		$this->template->scripts = array();
	  		$this->template->navLinks = array();
	  		

	  		
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
			
			
			$profMod = new Model_Profile();
			$username = $profMod->getUserBySalt($_SESSION['user']);

			
			
			$messageModel = new Model_Message();
			$count = $messageModel->messageCount($username[0]['userName']);
			
			$this->template->controlPanel = View::factory('Game/controlPanel')
												->set('user', $username[0])
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
				'Profile'=>Kohana::$base_url.'Profile/user?name='.$profileName,
				'Who\'s Online'=>Kohana::$base_url.'online',
				'Captcha'=>Kohana::$base_url.'Game/captcha',
				'Forums'=>Kohana::$base_url.'Forums',
				'Avialae Soundsation'=>Kohana::$base_url.'Avialae',
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