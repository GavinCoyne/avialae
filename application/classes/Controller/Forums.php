<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Forums extends Controller_GameTemplate {

	public function action_index()
	{
		$this->template->title = ('Forums');
		
		$forumsModel = new Model_Forums();
		$forums = $forumsModel->getForums();
		
		$this->template->content = View::factory('Forums/Forums')
					->set('forums', $forums);
	}
	
	public function action_forum()
	{
		if(!isset($_GET['forum']) || $_GET['forum'] == '')
		{
			$this->template->content =  'Error Invalid Forum Selected.';
			return;
		}
		
		$forumID = $_GET['forum'];
		
		$forumsModel = new Model_Forums();
		$threads = $forumsModel->getThreads($forumID);
		$this->template->content = View::factory('Forums/Forum')
			->set('threads', $threads)
			->set('forumID', $forumID);
		
	}
	
	public function action_thread()
	{
		if(!isset($_GET['thread']) || $_GET['thread'] == '')
		{
			$this->template->content =  'Error Invalid thread Selected.';
			return;
		}
		
		$forumsModel = new Model_Forums();
		$posts = $forumsModel->getThreadPosts($_GET['thread']);
		
		$this->template->content = View::factory('Forums/Thread')
			->set('posts', $posts)
			->set('threadID', $_GET['thread']);
	
	}
	
	public function action_createThread()
	{
		if(!isset($_GET['forum']) || $_GET['forum'] == '')
		{
			$this->template->content =  'Error Invalid Forum Selected.';
			return;
		}
		
		$forumID = $_GET['forum'];
		
		$this->template->content = View::factory('Forums/createThread')
			->set('forumID', $forumID);
	}
	
	public function action_createThreadPOST()
	{
		if(!isset($_GET['forum']) || $_GET['forum'] == '')
		{
			$this->template->content =  'Error Invalid Forum Selected.';
			return;
		}
		
		$forumID = $_GET['forum'];
		
		$profileModel = new Model_Profile();
		$user = $profileModel->getUserBySalt($_SESSION['user']);
		$userID = $user[0]['userID'];
		
		
		$forumsModel = new Model_Forums();
		$thread = $forumsModel->createThread($forumID, $_POST['threadTitle'], $userID);
		
		$post = $forumsModel->post($thread[0], $_POST['post'], $userID);
		header('Location: /Forums/thread?thread='.$thread[0]);

	}
	public function action_addPost()
	{
		if(!isset($_GET['thread']) || $_GET['thread'] == '')
		{
			$this->template->content =  'Error Invalid thread Selected.';
			return;
		}
		
		$forumsModel = new Model_Forums();
		$profileModel = new Model_Profile();
		$user = $profileModel->getUserBySalt($_SESSION['user']);
		$userID = $user[0]['userID'];
		$post = $forumsModel->post($_GET['thread'], $_POST['post'], $userID);
		
		header('Location: /Forums/thread?thread='.$_GET['thread']);
	}
	


}