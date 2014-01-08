<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Online extends Controller_GameTemplate {

	public function action_index()
	{
		 $this->template->title = "Who's online";

		
		
		 $onlineModel = new Model_Online();
		 $online = $onlineModel->getAllOnline();
		 
		  $this->template->content = View::factory('Game/online')
		  								->set('online', $online);
	}
}