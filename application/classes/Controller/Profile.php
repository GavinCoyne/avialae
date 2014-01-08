<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_GameTemplate {

	public function action_user()
	{
		$username = isset($_GET['name']) ? $_GET['name'] : false;
		if($username)
		{
			$profileModel = new Model_Profile();

				$profileModel = new Model_Profile();
				$info = $profileModel->getProfileByNameNotActivate($username);
				if($info)
				{
					$this->template->title = $username." - Profile";		
					$this->template->content = View::factory('profile/profile')
														->set('username', $username)
														->set('info', $info[0]);
				}
				else 
				{
					$this->template->content = "Error loading user";
				}
					
			
		}
	}
	public function action_settings()
	{
		$profileModel = new Model_Profile();
		
		$info = $profileModel->getUserBySalt(isset($_SESSION['user']) ? $_SESSION['user'] : die);
	
		$this->template->content = View::factory('profile/Settings')
														->set('info', $info[0]);
	}
	
	public function action_edit()
	{
		
		
	}
	

	


} // End Welcome