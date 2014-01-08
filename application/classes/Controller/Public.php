<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public extends Controller_GameTemplate {

	public function action_index()
	{
		$this->template->title = "Fall of Something"; 
		
		$this->template->content = View::factory('home');
		
	}
	


} // End Welcome