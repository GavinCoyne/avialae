<?php defined('SYSPATH') or die('No direct script access.');



class Controller_Email extends Controller_GameTemplate {


	
	
	public function action_index()
	{
		$email = Email::instance()
			    ->to('speed.sk8@gmail.com')
			    ->from('noreply@fallofkingdoms.com')
			    ->subject('Hi there!')
			  ->message('Hi, guys! This is my awesome email.')
			  ->send();
		$this->template->content = "Email Class";
	}	
	
}