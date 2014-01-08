<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Guilds extends Controller_GameTemplate {

	/**
	 * 
	 * (non-PHPdoc)
	 * @see Controller_GameTemplate::before()
	 */
	public function before()
	{
      parent::before();
      
      
      
	}
	
	public function action_index()
	{
		$this->template->content = ('hello, world!');
	}
	
	public function action_Guild()
	{		if(isset($_GET['guildName']))		{			$guildModel = new Model_Guilds();			$guildInfo = $guildModel->getGuildByName($_GET['guildName']);			$users = $guildModel->getGuildMembersByID($guildInfo[0]['guildID']);				$this->template->content = View::factory('Guilds/guild')					->set('guildInfo',$guildInfo[0])					->set('users',$users);			return;		}		
		if(isset($_SESSION['user']))
		{
	      	$profileModel = new Model_Profile();
			$user = $profileModel->getUserBySalt($_SESSION['user']);
			$userID = $user[0]['userID'];	
			$guildID = $user[0]['guildID'];	
			if($guildID == -1)
			{
				$this->template->content = View::factory('Guilds/buyGuild');
			}
			else 
			{
				$guildModel = new Model_Guilds();
				$guildInfo = $guildModel->getGuildByID($guildID);
				$users = $guildModel->getGuildMembersByID($guildID);	
				$this->template->content = View::factory('Guilds/guild')
					->set('guildInfo',$guildInfo[0])
					->set('users',$users);	
			}
	      }	}
	
	public function action_buyGuild()
	{
		if(isset($_SESSION['user']))
	    {
	      	$profileModel = new Model_Profile();
			$user = $profileModel->getUserBySalt($_SESSION['user']);
			$userID = $user[0]['userID'];
			
			$guildID = $user[0]['guildID'];     	
			$errors= '';
			if(!isset($_POST['guildName']) || $_POST['guildName'] == "")
			{
				$errors .= "Please pick a valid guild name.";
			}else{
			
			
				$guildModel = new Model_Guilds();
				if(!$guildModel->checkGuildName($_POST['guildName']))
				{
					$gold = $profileModel->getProfileByName($user[0]['userName']);
					$gold = $gold[0]['gold'];
					if($gold >= 500)
					{
						$guildModel->createGuild($_POST['guildName']);
					}
				}
			}
			
			if($guildID == -1)
			{
				$this->template->content = View::factory('Guilds/buyGuild')
					->set('errors', $errors);
			}

	   	}		
	}
	
	public function action_invite()
	{
		if(!isset($_GET['to']))
			return;
		$to = $_GET['to'];
		
		$guildModel = new Model_Guilds();
		$guildModel->sendInvite($to);
		
		
		$this->template->content = View::factory('Guilds/invite')
			->set('to', $to);
		
		
	}
	
	public function action_joinGuild()
	{
		if(!isset($_GET['to']) || !isset($_GET['guild']) || !isset($_GET['hash']))
		{
			echo 'something was not set correctly. Please try again.';
			return;
		}		$hash = hash('sha1', $_GET['to'].base64_encode($_GET['guild']).Cookie::$salt);
		if($hash != $_GET['hash'])
		{
			echo 'You tried something illegal.';
			return;
		}
		$username = $_GET['to'];		$guildName = $_GET['guild'];
		$guildModel = new Model_Guilds();
		//if user is not in a guild.		
		if($guildModel->checkUserGuildState($username))
		{			$guildID = $guildModel->getGuildByName($guildName);			$guildID = $guildID[0]['guildID'];						//If less than 8 members			if($guildModel->getMemberCount($guildID) < MAX_MEMBERS)			{				$guildModel->acceptInvite($guildName, $username);				$guildModel->addUserToGuild($guildName, $username);				$this->template->content = "$username successfully joined $guildName";			}
		}
		else
		{
			$this->template->content = "Error you are in a guild.";
		}	}
	//TODO: Add in sendding of guild invitation and accept Link. Make an invitation table.
	public function action_rankings()
	{				$guildModel = new Model_Guilds();		$guilds = $guildModel->getAllGuilds();		$this->template->content = View::factory('Guilds/Rankings')			->set('guilds', $guilds);
		
	
	}
	
}