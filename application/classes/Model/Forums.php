<?php 
class Model_Forums extends Model
{
	public function getForums()
	{
		$queryForums = DB::query(Database::SELECT, '
			SELECT * FROM forums WHERE guildID=-1
		');
		
		return $queryForums->execute();
	}
	
	public function getThreads($forumID)
	{
		$queryThreads = DB::query(Database::SELECT, '
			SELECT * FROM forumThreads WHERE forumID=:forumID
		');
		$queryThreads->parameters(array(':forumID'=>$forumID));
		
		return $queryThreads->execute();
	}
	
	public function createThread($forumID, $title, $creator)
	{
		$query = DB::query(Database::INSERT, '
				INSERT INTO forumThreads (creatorID, forumID, threadTitle)
				VALUES (:cid, :fid, :title)
			');
		$query->parameters(array(
			':cid'=>$creator,
			':fid'=>$forumID,
			':title'=>base64_encode($title),
		));
		
		return $query->execute();
		
	}
	
	public function post($threadID, $post, $creator)
	{
		$query = DB::query(Database::INSERT, '
				INSERT INTO forumPosts (userID, threadID, post)
				VALUES (:cid, :tid, :post)
			');
		$query->parameters(array(
			':cid'=>$creator,
			':tid'=>$threadID,
			':post'=>base64_encode($post),
		));
		
		return $query->execute();
	}
	
	public function getThreadPosts($threadID)
	{
		$queryThreads = DB::query(Database::SELECT, '
			SELECT post, postTime,
			(SELECT userName FROM user u WHERE u.userID=p.userID) username
			  FROM forumPosts p WHERE threadID=:threadID
		');
		$queryThreads->parameters(array(':threadID'=>$threadID));
		
		return $queryThreads->execute();
	}
}