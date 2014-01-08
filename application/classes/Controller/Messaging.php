<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Messaging extends Controller_GameTemplate {

	public function action_index()
	{
		$this->Title = ('Messagin Controller go here.');
		
		$profileModel = new Model_Profile();
		$username = $profileModel->getUserBySalt($_SESSION['user']);
		$username = $username[0]['userName'];
		
		$messageModel = new Model_Message();
		$messages = $messageModel->getMessagesByUserName($username);
		
		$this->template->content = View::factory('Messaging/inbox')
									->set('messages', $messages);
	}
	
	public function action_send()
	{
		$this->Title = ('Send Message');
		
		$this->template->content = View::factory('Messaging/send')
									->set('to', $_GET['to']);
	}
	
	public function action_sendAjax()
	{
		$this->auto_render = false;
		
		$profileModel = new Model_Profile();
		$username = $profileModel->getUserBySalt($_SESSION['user']);
		$username = $username[0]['userName'];
		
		if(!isset($_POST['to']) || !isset($_POST['body']))
		{
			echo json_encode(array('errors' => 'Something went wrong!'));
			return;
		}
		
		$messageModel = new Model_Message();
		$messageModel->send($username, $_POST['to'], $_POST['body']);
		
		echo json_encode(array('success'=>'Message has been sent'));
		return;
	}
	
	public function action_readAjax()
	{
		$this->auto_render = false;
		
		if(!isset($_POST['messageID']))
		{
			echo json_encode(array('errors' => 'Something went wrong!'));
			return;
		}
		
		$mid = $_POST['messageID'];
		
		$profileModel = new Model_Profile();
		$username = $profileModel->getUserBySalt($_SESSION['user']);
		$username = $username[0]['userName'];
		
		$messageModel = new Model_Message();
		if($messageModel->checkMessage($username, $mid))
		{
			$messageModel->read($username, $mid);
			echo json_encode(array('success'=>'Marked As Read.'));
			return;
		}
		else
		{
			echo json_encode(array('errors'=>'Something has gone wrong, please try again or contact an Admin'));
			return;
		}
		
	}

	public function action_deleteAjax()
	{
		$this->auto_render = false;
		
		if(!isset($_POST['messageID']))
		{
			echo json_encode(array('errors' => 'Something went wrong!'));
			return;
		}
		
		$mid = $_POST['messageID'];
		
		$profileModel = new Model_Profile();
		$username = $profileModel->getUserBySalt($_SESSION['user']);
		$username = $username[0]['userName'];
		
		$messageModel = new Model_Message();
		if($messageModel->checkMessage($username, $mid))
		{
			$messageModel->delete($username, $mid);
			echo json_encode(array('success'=>'Message Deleted.'));
			return;
		}
		else
		{
			echo json_encode(array('errors'=>'Something has gone wrong, please try again or contact an Admin'));
			return;
		}
		
	}
	
} // End Messageing