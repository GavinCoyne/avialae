<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_GameTemplate {

	/**
	 * 
	 * (non-PHPdoc)
	 * @see Controller_GameTemplate::before()
	 */
	public function before()
	{
      parent::before();
      
      if(isset($_SESSION['user']))
      {
      	$profileModel = new Model_Profile();
		$user = $profileModel->getUserBySalt($_SESSION['user']);
		$this->userID = $user[0]['userID'];
		$this->groupID = $user[0]['groupID'];
      	
      }
      
	}
	
	public function action_index()
	{
		if($this->groupID != 0)
		{
			$this->template->content = 'Permission Denied';
		}
		else {
			
			$this->template->content = ('Welcome to the admin control panel');
		}
	}
}
	