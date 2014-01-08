<?php 
class Model_Guilds extends Model
{
	function checkGuildName($guildName)
	{
		$query = DB::query(Database::SELECT, '
			SELECT * FROM guilds WHERE guildName=:guildName
		');
		$query->parameters(array(':guildName'=>base64_encode($guildName)));		$result = $query->execute();		if(count($result) > 0)
		{
			return true;
		}
		return false;
	}
	
	function createGuild($guildName)
	{
		$query = DB::query(Database::INSERT, '
			INSERT INTO guilds (guildName, LeaderID)
			VALUES (:guildName, :leaderID)
		');
		$profileModel = new Model_Profile();
		$user = $profileModel->getUserBySalt($_SESSION['user']);
		$userID = $user[0]['userID'];
		$query->parameters(array(':guildName'=>base64_encode($guildName),':leaderID'=>$userID ));
		$guildID = $query->execute();
		$query = DB::query(Database::UPDATE, '			UPDATE user SET guildID=:guildID WHERE userID=:userID
		');
		$query->parameters(array(':guildID'=>$guildID[0],':userID'=>$userID));		$query->execute();
		$query = DB::query(Database::INSERT, '
			INSERT INTO guildstousers (guildID, userID, rank)
			VALUES (:guildID, :userID, :rank)
		');
		$query->parameters(array(':guildID'=>$guildID[0],':userID'=>$userID,':rank'=>0 ));
		$guildID = $query->execute();
	}
	public function sendInvite($userName)
	{
		$profileModel = new Model_Profile();		$user = $profileModel->getUserBySalt($_SESSION['user']);
		$sender = $user[0]['userName'];
		$guild = self::getGuildByID($user[0]['guildID']);
		
		$hash = hash('sha1', $userName.$guild[0]['guildName'].Cookie::$salt);
		
		$message = '<div>'.$sender.' has invited you to join '.base64_decode($guild[0]['guildName'])
					.'</div><div><a href="'.Kohana::$base_url.'Guilds/joinGuild?to='.$userName.'&guild='.base64_decode($guild[0]['guildName']).'&hash='.$hash
					.'" class="btn btn-success" >Join Guild</a></div>';
		
		self::addInvite(base64_decode($guild[0]['guildName']), $userName);
					
		$query = DB::query(Database::INSERT, '
			INSERT INTO messages (`sender`, `receiver`, `Message`)
			VALUES (:sender, :receiver, :Message)
		');
		
		 $query->parameters(array(
					':sender'=>$sender, 
					':receiver'=>$userName,
					':Message'=>base64_encode($message)));
		 return $query->execute();
	}
	
	public function addInvite($guildName, $invitee)
	{
		$query = DB::query(Database::INSERT, '
			INSERT INTO guildinvites (`guildName`, `invitee`)
			VALUES (:guildName, :invitee)
		');
		
		 $query->parameters(array(
					':guildName'=>$guildName, 
					':invitee'=>$invitee));
		 return $query->execute();
	}
	
	public function getGuildByID($guildID)
	{
		$query = DB::query(Database::SELECT,'
			SELECT * FROM guilds WHERE guildID=:guildID
		');
		$query->parameters(array(':guildID'=>$guildID));
		return $query->execute();
	}
	
	public function getGuildMembersByID($guildID)
	{
		$query = DB::query(Database::SELECT,'
			SELECT u.userName, gu.userID, rt.gold, rt.level, rt.rank,
				(SELECT sum(utu.amount) FROM unitstousers utu WHERE gu.userID=utu.userID) as size
			FROM guildstousers gu
			INNER JOIN user u ON u.userID=gu.userID 
			INNER JOIN roundtable rt ON rt.userID=gu.userID
			WHERE gu.guildID=:guildID
		');
		$query->parameters(array(':guildID'=>$guildID));
		return $query->execute();
	}
	
	public function checkUserGuildState($userName)
	{
		$query = DB::query(Database::SELECT, '
			SELECT guildID FROM user WHERE userName=:userName
		');
		$query->parameters(array(':userName'=> $userName));
		$guildStatus = $query->execute();
		
		return ($guildStatus[0]['guildID'] == -1) ? TRUE : FALSE;
	}
	
	function getGuildByName($guildName)
	{
		$query = DB::query(Database::SELECT, '
			SELECT * FROM guilds WHERE guildName=:guildName
		');
		$query->parameters(array(':guildName'=>base64_encode($guildName)));
		return $query->execute();
	}
	
	public function addUserToGuild($guildName, $userName)
	{		$profileModel = new Model_Profile();		$userID = $profileModel->getProfileByNameNotActivate($userName);		$userID = $userID[0]['userID'];
		$guild = self::getGuildByName($guildName);		$guildID = $guild[0]['guildID'];				$query = DB::query(Database::UPDATE, '			UPDATE user SET guildID=:guildID WHERE userID=:userID		');		$query->parameters(array(':guildID'=>$guildID,':userID'=>$userID));		$query->execute();				$query = DB::query(Database::INSERT, '
			INSERT INTO guildstousers (`userID`, `guildID`)
			VALUES (:userID, :guildID)
		');
		
		 $query->parameters(array(
					':userID'=>$userID,
					':guildID'=>$guildID));
		 return $query->execute();
	}		public function getMemberCount($guildID)	{		$query = DB::query(Database::SELECT, '			SELECT count(userID) AS memberCount FROM guildstousers WHERE guildID=:guildID		');				$query->parameters(array(':guildID'=>$guildID));		$result = $query->execute();		return $result[0]['memberCount'];	}		public function acceptInvite($guildName, $invitee)	{		$query = DB::query(Database::UPDATE, '			UPDATE guildinvites SET accept=1 WHERE invitee=:invitee AND guildName=:guildName		');		$query->parameters(array(			':invitee'=>$invitee,			':guildName'=>$guildName		));		$query->execute();					}		public function getLastRankUpdate()	{		$query = DB::query(Database::SELECT, '			SELECT max(n.time) as time			FROM `guildRankingsUpdates` n		');			return $query->execute();	}		public function updateRanks($numberOfUpdates, $updateTime)	{		$query = DB::query(Database::SELECT, '			SELECT guildID			FROM guilds 		');			$guildIDs = $query->execute();				$query = DB::query(Database::SELECT, '			SELECT userID			FROM roundtable round			ORDER BY userID		');			$results = $query->execute();		foreach($guildIDs As $guildID)		{			$stats = 0;			foreach($results AS $result)			{				$updateUser = DB::query(Database::SELECT, '					SELECT 	r.totalStats FROM roundtable r					INNER JOIN guildstousers g ON g.userID = r.userID					WHERE r.userID=:userID AND g.guildID=:guildID				');								$updateUser->parameters(array(					':userID'=>$result['userID'],					':guildID'=>$guildID['guildID'],				));								$test = $updateUser->execute();				$stats += $test[0]['totalStats'];			}			$updateUser = DB::query(Database::UPDATE, '				UPDATE guildrankings				SET guildStats=:statsa				WHERE guildID=:guildID			');		}						$query = DB::query(Database::SELECT, '			SELECT 			FROM guildrankings round			WHERE guildStats > 0			ORDER BY guildStats DESC		');			$results = $query->execute();				$i = 1;		foreach($results AS $result)		{			$updateUser = DB::query(Database::UPDATE, '				UPDATE guildrankings				SET rank=:rank, points=:points				WHERE userID=:userID			');					$updateUser->parameters(array(				':points'=>((1024/$i)*$numberOfUpdates) + $result['points'] ,				':rank'=>$i++,				':userID'=>$result['userID'],			));			$test = $updateUser->execute();					}						$newUpdateTime = DB::query(Database::INSERT, '			INSERT INTO guildRankingsUpdates			VALUES (NULL, :time)					');				$newUpdateTime->parameters(array(			':time'=> $updateTime,		));		$newUpdateTime->execute();		return;	}		public function getAllGuilds()	{		$query = DB::query(Database::SELECT, '			SELECT * FROM guilds		');		return $query->execute();	}
}