<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends Controller_GameTemplate {

	public function action_index()
	{
		 $this->template->checkLogin = false;
		 $this->template->title = "Register Page";
		 
		 $this->template->content = View::factory('register/login');
		 $this->template->content .= View::factory('register/register');
	}
	
	public function action_register()
	{
		$this->auto_render = false;
		$this->template->checkLogin =false;
		if(!isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['email']))
		{
			echo json_encode(array('errors'=>'Error: something went wrong while registering'));
			return;
		}
		
		$post = Validation::factory($_POST)
					->rule('username', 'min_length', array(':value', 2))
					->rule('username', 'max_length', array(':value', 64))
					->rule('password', 'min_length', array(':value', 6))
					->rule('email', 'not_empty', array(':value'))
					->rule('email', 'email');
		
		$errors = array();
					
		if($post->check())
		{
		
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			
			$registerModel = new Model_Register();
			
			//If username does not exist do the other stuff
			if($registerModel->checkUserName($username, $email))
			{
				$result = $registerModel->registerUser($username, $password, $email);
				
				$loginModel = new Model_Login();
			 	$loginModel->login($username, $password);
				echo json_encode(array('success'=>'Suceess: Registered user. Reloading in 3 seconds ' . $username));
				return;
			}else{
				$errors[] = 'Error: Username or email address already in use';
				echo json_encode(array('errors'=>$errors));
				return;
			}
		}
		
		foreach($post->errors() AS $key=>$error)
		{
			$errors[] = 'Error: Invalid '.$key;
		}
		echo json_encode(array('errors'=>$errors));
		return;
	}
	


} // End Welcome