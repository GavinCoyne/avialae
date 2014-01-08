<?php 
class Model_Profile extends Model
{
	public function getProfileByNameNotActivate($userName)
	{
		//LIMIT 1
		$query = DB::query(Database::SELECT, '
							SELECT *
							FROM user
							WHERE userName=:userName
							 
							');
		$query->parameters(array(
		    		':userName' => $userName,
				));						
		
		return $query->execute();
	}
	
	
	public function getProfileByName($userName)
	{
		//LIMIT 1
		$query = DB::query(Database::SELECT, '
							SELECT karma, rank, gold, race, points, salt, r.userID, r.guildID,
							(SELECT sum(amount) FROM unitstousers utu WHERE user.userID = utu.userID ) army,
							(SELECT raceName FROM race WHERE race.raceID=race) raceName
							FROM user
							INNER JOIN  roundtable r
							ON r.userID = user.userID
							WHERE userName=:userName
							 
							');
		$query->parameters(array(
		    		':userName' => $userName,
				));						
		
		return $query->execute();
	}
	
	public function getUserBySalt($salt)
	{
		$query = DB::query(Database::SELECT, '
							SELECT * FROM user 
							WHERE salt=:salt
							 
							');
		$query->parameters(array(
		    		':salt' => $salt,
				));						
		
		return $query->execute();
	}
	
	
	
}