<?php
class Model_Message extends Model
{
	public function messageCount($username)
	{
		$queryMessages = DB::query(Database::SELECT, '
				SELECT * FROM messages
				WHERE receiver=:to
				AND `read`=0
				AND `deleted`=0
				
			');
		$queryMessages->parameters(array(
			':to'=>$username,
			':status'=>0,
		));
		
		return COUNT($queryMessages->execute());
	}
	
	public function send($sender, $to, $message)
	{
		$querySend = DB::query(Database::INSERT, '
					INSERT INTO messages (`sender`, `receiver`, `Message`)  VALUES (:sender, :to, :message)
				');
			$querySend->parameters(array(
			    ':sender' => $sender,
				':to' => $to,
				':message' => base64_encode(strip_tags($message, '<a><img><strong><em><span>')),
			));
			return $querySend->execute();
	}
	
	public function read($username, $mid)
	{
		$queryMessages = DB::query(Database::UPDATE, '
				UPDATE messages 
				SET `read`=1 
				WHERE receiver=:to 
				AND messageID=:mid
			');
		$queryMessages->parameters(array(
			':to'=>$username,
			':mid'=>$mid,
		));
		
		return $queryMessages->execute();
	}
	
	public function delete($username, $mid)
	{
		$queryMessages = DB::query(Database::UPDATE, '
				UPDATE messages 
				SET `deleted`=1 
				WHERE receiver=:to 
				AND messageID=:mid
			');
		$queryMessages->parameters(array(
			':to'=>$username,
			':mid'=>$mid,
		));
		
		return $queryMessages->execute();
	}
	
	public function getMessagesByUserName($username)
	{
		$queryMessages = DB::query(Database::SELECT, '
				SELECT * FROM messages
				WHERE receiver=:to
				AND `deleted`=0
				ORDER BY sendTime DESC
			');
		$queryMessages->parameters(array(
			':to'=>$username,
		));
		
		return $queryMessages->execute();
	}
	
	public function checkMessage($username, $messageID)
	{
		$queryMessages = DB::query(Database::SELECT, '
				SELECT * FROM messages
				WHERE receiver=:to
				AND messageID=:mid
				ORDER BY sendTime DESC
			');
		$queryMessages->parameters(array(
			':to'=>$username,
			':mid'=>$messageID,
		));
		$result = $queryMessages->execute();
		$result = isset($result[0]) ? TRUE : FALSE;
		return $result;
	}
}