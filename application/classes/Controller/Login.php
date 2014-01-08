<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_GameTemplate {

	public function before()
	{
		
		$this->captcha = false;
		parent::before();
	}
	
	public function action_index()
	{
		 $this->template->checkLogin = false;
		 $this->template->title = "Login Page";

		 $this->template->content = View::factory('Register/register');
		
	}
	
	public function action_login()
	{
		$this->auto_render = false;
		
		if(!isset($_POST['username']) || !isset($_POST['password']))
		{
			echo json_encode(array('errors'=>'Error: something went wrong while registering'));
			return;
		}
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$loginModel = new Model_Login();
		

		 $loginModel->login($username, $password);

		echo json_encode(array('sucess'=>'logged in', 'location'=>Kohana::$base_url."Game/captcha"));
		return;
	}
	
	public function action_logout()
	{
		$this->auto_render = false;
		
		unset($_SESSION);
		session_destroy();
	}
	


} // End Welcome