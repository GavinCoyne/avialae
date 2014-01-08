<?php 
class Model_Game extends Model
{
	
	/**
	 * 
	 * 
	 * gets and returns the current races.
	 */
	public function getRaces()
	{
		$query = DB::query(Database::SELECT, '
				SELECT * FROM race;
				');
		
		return $query->execute();
	}
	
	public function isActive()
	{
		$profileModel = new Model_Profile();
		$user = $profileModel->getUserBySalt($_SESSION['user']);
		$userID = $user[0]['userID'];

		$query = DB::query(Database::SELECT, '
				SELECT * FROM roundtable
				WHERE userID=:userID;
				');
		$query->parameters(array(
		    		':userID' => $userID,
				));			
		return $query->execute();
	}
	
	public function activateUser($race)
	{
		$profileModel = new Model_Profile();
		$user = $profileModel->getUserBySalt($_SESSION['user']);
		$userID = $user[0]['userID'];
		
		$query = DB::query(Database::INSERT, '
		INSERT INTO roundtable 
		(userID, race) 
		VALUES (:userID, :race)');
    	$query->parameters(array(
		    ':userID' => $userID,
    		':race' => $race,
		));
		$results = $query->execute();
		
		$query = DB::query(Database::INSERT, '
		INSERT INTO buildingstousers 
		(buildingID, userID, amount) 
		VALUES (:buildingID, :userID, :amount)');
    	$query->parameters(array(
		    ':buildingID' => 1,
    		':userID' => $userID,
    		':amount' => 1,
		));
		
		$results = $query->execute();
		
	}
	
	public function getRankedUsers()
	{

		$query = DB::query(Database::SELECT, '
				SELECT rank, gold, race, points, level,
				(SELECT userName FROM user u WHERE u.userID = r.userID) username,
				(SELECT race.raceName FROM race WHERE race.raceID = r.race) raceName,
				(SELECT sum(units.amount) FROM unitstousers units WHERE units.userID = r.userID) army
				FROM roundtable r
				WHERE r.rank > 0
				ORDER BY r.rank ASC
				');
		
		return $query->execute();
	}
	public function getStats()
	{
		$profileModel = new Model_Profile();
		$userID = $profileModel->getUserBySalt($_SESSION['user']);
		
		$query = DB::query(Database::SELECT, '
				SELECT rank, gold, race, points, level,karma,housing,turns,exp,
				(SELECT userName FROM user u WHERE u.userID = r.userID) username,
				(SELECT race.raceName FROM race WHERE race.raceID = r.race) raceName,
				(SELECT sum(units.amount) FROM unitstousers units WHERE units.userID = r.userID) army
				FROM roundtable r
				WHERE r.userID = :userID
				');
		$query->parameters(array(
		    ':userID' => $userID[0]['userID'],
		));
		
		return $query->execute();
	}
	
	public function getUnits()
	{
		$profileModel = new Model_Profile();
		$userID = $profileModel->getUserBySalt($_SESSION['user']);
		
		$query = DB::query(Database::SELECT, '
					SELECT *, 
					(SELECT amount FROM unitstousers u WHERE u.unitID = t.unitID AND u.userID = :userID) amount
					FROM unittypes t
					');
		$query->parameters(array(
		    ':userID' => $userID[0]['userID'],
		));
		
		return $query->execute();
	}
	
	public function getUnitCost($unitID)
	{
		$query = DB::query(Database::SELECT, '
					SELECT unitCost
					FROM unittypes t
					WHERE unitID=:unitID
					');
		$query->parameters(array(
		    ':unitID' => $unitID,
		));
		$cost = $query->execute();
		$cost = $cost[0]['unitCost'];
		return $cost;
	}
	
	public function addUnits($amount, $type)
	{
		$profileModel = new Model_Profile();
		$userID = $profileModel->getUserBySalt($_SESSION['user']);
		$userID = $userID[0]['userID'];
		
		
		$queryTotal = DB::query(Database::SELECT, '
					SELECT amount FROM unitstousers WHERE unitID = :unitID AND userID = :userID
					');
		$queryTotal->parameters(array(
		    ':userID' => $userID,
			':unitID' => $type,
		));
		$toatlUnits = $queryTotal->execute();
		self::updateUserArmyStats($amount, $type);
		if($toatlUnits[0] == NULL)
		{
			
			$queryAdd = DB::query(Database::INSERT, '
					INSERT INTO unitstousers VALUES (:userID, :unitID, :amount)
				');
			$queryAdd->parameters(array(
			    ':userID' => $userID,
				':unitID' => $type,
				':amount' => $amount,
			));
			return $queryAdd->execute();
		}else{
			$queryUpdate = DB::query(Database::UPDATE, '
				UPDATE unitstousers 
				SET amount=:amount
				WHERE unitID = :unitID AND userID = :userID
			');
			$queryUpdate->parameters(array(
			    ':userID' => $userID,
				':unitID' => $type,
				':amount' => ($toatlUnits[0]['amount'] + $amount),
			));
			return $queryUpdate->execute();
		}
		return false;
	}
	
	public function updateUserArmyStats($amount, $type)
	{
		$profileModel = new Model_Profile();
		$userID = $profileModel->getUserBySalt($_SESSION['user']);
		
		$userID = $userID[0]['userID'];
		
		
		$query = DB::query(Database::SELECT, '
				SELECT * FROM unitstousers where userID=:userID
		');
		$query->parameters(array(
				':userID' => $userID,
			));
		$unitStats = $query->execute();
		
		//Declare the variables
		$i= 0;
		$aa=0;
		$ad=0;
		$ga=0;
		$gd=0;
		$int=0;
		$gg=0;
		foreach($unitStats as $unitType)
		{	
			$query = DB::query(Database::SELECT, '
				SELECT * FROM unittypes where unitID=:unitID
			');
			$query->parameters(array(
					':unitID' => $unitType['unitID'],
				));
			$unitTypeStats = $query->execute();
			
				$aa += $unitTypeStats[$i]['airAttack'] * ((Double)$unitType['amount'] + (Double)(($type == $unitType['unitID']) ? (Double)$amount : (Double)0));
				$ad +=  $unitTypeStats[$i]['airDefense'] * ((Double)$unitType['amount'] + (Double)(($type == $unitType['unitID']) ? (Double)$amount : (Double)0));
				$ga +=  $unitTypeStats[$i]['groundAttack'] * ((Double)$unitType['amount'] + (Double)(($type == $unitType['unitID']) ? (Double)$amount : (Double)0));
				$gd +=  $unitTypeStats[$i]['groundDefense']* ((Double)$unitType['amount'] + (Double)(($type == $unitType['unitID']) ? (Double)$amount : (Double)0));
				$int +=  $unitTypeStats[$i]['Inteligence'] * ((Double)$unitType['amount'] + (Double)(($type == $unitType['unitID']) ? (Double)$amount : (Double)0));
				$gg +=  $unitTypeStats[$i]['goldGather']* ((Double)$unitType['amount'] + (Double)(($type == $unitType['unitID']) ? (Double)$amount : (Double)0));

		}

		$queryUser = DB::query(Database::SELECT, '
			SELECT * FROM roundtable WHERE userID=:userID
		');
		
		$queryUser->parameters(array(':userID'=>$userID));
		$race = $queryUser->execute();
		$race = $race[0]['race'];
		
		$updateUser = DB::query(Database::UPDATE, '
			UPDATE roundtable
			SET airAttack=:aa, airDefense=:ad, groundAttack=:ga, groundDefense=:gd,
				inteligence=:int, goldGather=:gg
			WHERE userID=:userID
		');
		
		$updateUser->parameters(array(
				':aa' => ($aa * ($race == 2 ? 1.25 : 1.0)),
				':ad' => $ad * ($race == 3 ? 1.25 : 1.0),
				':ga' => $ga * ($race == 2 ? 1.25 : 1.0),
				':gd' => $gd * ($race == 3 ? 1.25 : 1.0),
				':int' => $int * ($race == 1 ? 1.25 : 1.0),
				':gg' => $gg,
				':userID' => $userID,
		
			));
		$updateUser->execute();
	}
	
	public function updateUserGold($goldLeft)
	{
		
		$profileModel = new Model_Profile();
		$userID = $profileModel->getUserBySalt($_SESSION['user']);
		$userID = $userID[0]['userID'];
		
		$queryUpdate = DB::query(Database::UPDATE, '
			UPDATE roundtable 
			SET gold = :gold
			WHERE userID = :userID
		');
		$queryUpdate->parameters(array(
		    ':gold' => $goldLeft,
		    ':userID' => $userID,
		));
		return $queryUpdate->execute();
	}
	
	
public function dropTurns($numberOfDrops, $dropTime)
	{
		$query = DB::query(Database::SELECT, '
			SELECT *
			FROM roundtable round
		');
	
		$results = $query->execute();
		$i = 0;
		foreach($results AS $result)
		{
			$query = DB::query(Database::SELECT, '
				SELECT * FROM roundtable where userID=:userID
			');
			
			$query->parameters(array(
					':userID'=>$result['userID'],
			
			));
			$userStats = $query->execute();
			if(!($userStats[0]['airAttack'] == 0 && $userStats[0]['airDefense'] == 0 && $userStats[0]['groundAttack'] == 0 && $userStats[0]['groundDefense'] == 0 && $userStats[0]['Inteligence'] == 0))
			{
				$turns = $userStats[0]['turns'];
				
				$updateUser = DB::query(Database::UPDATE, '
					UPDATE roundtable
					SET turns=:turns
					WHERE userID=:userID
				');
				$updateUser->parameters(array(
					':turns'=>$turns + $numberOfDrops,
					':userID'=>$result['userID'],
				));
				$test = $updateUser->execute();
			}
		}
		
		$newUpdateTime = DB::query(Database::INSERT, '
			INSERT INTO roundturndrop
			VALUES (NULL, :time)
			
		');
		
		$newUpdateTime->parameters(array(
			':time'=> $dropTime,
		));
		$newUpdateTime->execute();
	}
	
	public function dropGolds($numberOfDrops, $dropTime)
	{
		$query = DB::query(Database::SELECT, '
			SELECT *
			FROM roundtable round
		');
	
		$results = $query->execute();
		$i = 0;
		foreach($results AS $result)
		{
			$query = DB::query(Database::SELECT, '
				SELECT * FROM roundtable where userID=:userID
			');
			
			$query->parameters(array(
					':userID'=>$result['userID'],
			
			));
			$userStats = $query->execute();
			if(!($userStats[0]['airAttack'] == 0 && $userStats[0]['airDefense'] == 0 && $userStats[0]['groundAttack'] == 0 && $userStats[0]['groundDefense'] == 0 && $userStats[0]['Inteligence'] == 0))
			{
				$gold = $userStats[0]['gold'];
	
				$updateUser = DB::query(Database::UPDATE, '
					UPDATE roundtable
					SET gold=:gold
					WHERE userID=:userID
				');
				$bonus = $userStats[0]['race'] == 0 ? 1.25 : 1.0;
				$updateUser->parameters(array(
					':gold'=>$gold + (1024 + ($userStats[0]['totalStats']/1024))*$numberOfDrops,
					':userID'=>$result['userID'],
				));
				$test = $updateUser->execute();
			}
		}
		
		$newUpdateTime = DB::query(Database::INSERT, '
			INSERT INTO roundgolddrops
			VALUES (NULL, :time)
			
		');
		
		$newUpdateTime->parameters(array(
			':time'=> $dropTime,
		));
		$newUpdateTime->execute();
	}
	
	public function updateRanks($numberOfUpdates, $updateTime)
	{
		
		$query = DB::query(Database::SELECT, '
			SELECT userID
			FROM roundtable round
			ORDER BY userID
		');
	
		$results = $query->execute();
		
		foreach($results AS $result)
		{
			$updateUser = DB::query(Database::UPDATE, '
				UPDATE roundtable
				SET totalStats=(airAttack + airDefense + groundAttack + groundDefense + Inteligence)/5
				WHERE userID=:userID
			');
			
			$updateUser->parameters(array(
				':userID'=>$result['userID'],
			));
			
			$test = $updateUser->execute();
		}
		
		
		$query = DB::query(Database::SELECT, '
			SELECT userID, points
			FROM roundtable round
			WHERE totalStats > 0
			ORDER BY totalStats DESC
		');
	
		$results = $query->execute();
		
		$i = 1;
		foreach($results AS $result)
		{
			$updateUser = DB::query(Database::UPDATE, '
				UPDATE roundtable
				SET rank=:rank, points=:points
				WHERE userID=:userID
			');
		
			$updateUser->parameters(array(
				':points'=>((1024/$i)*$numberOfUpdates) + $result['points'] ,
				':rank'=>$i++,
				':userID'=>$result['userID'],
			));
			$test = $updateUser->execute();
			
		}
		
		
		$newUpdateTime = DB::query(Database::INSERT, '
			INSERT INTO roundupdates
			VALUES (NULL, :time)
			
		');
		
		$newUpdateTime->parameters(array(
			':time'=> $updateTime,
		));
		$newUpdateTime->execute();
		return;
	}
	
	public function getLastRankUpdate()
	{
		
		$query = DB::query(Database::SELECT, '
			SELECT max(n.time) as time
			FROM roundupdates n
		');
	
		return $query->execute();
	}

	
	public function getLastGoldDrop()
	{
		
		$query = DB::query(Database::SELECT, '
			SELECT max(gd.time) as time
			FROM roundgolddrops gd
		');
	
		return $query->execute();
	}
	public function getLastTurnDrop()
	{
		
		$query = DB::query(Database::SELECT, '
			SELECT max(gd.time) as time
			FROM roundturndrop gd
		');
	
		return $query->execute();
	}
	
	
	public function getBuildings()
	{
		$profileModel = new Model_Profile();
		$userID = $profileModel->getUserBySalt($_SESSION['user']);
		
		
		//fix housing to work with this!
		$query = DB::query(Database::SELECT, '
					SELECT *, 
					(SELECT amount FROM buildingstousers u WHERE u.buildingID = t.buildingID AND u.userID = :userID) amount,
					(SELECT multiple FROM buildingtypes u WHERE u.buildingID = t.buildingID) multiple
					FROM buildingtypes t
					');
		$query->parameters(array(
		    ':userID' => $userID[0]['userID'],
		));
		
		return $query->execute();
		
	}
	public function addBuilding($amount, $buildingID)
	{
		$profileModel = new Model_Profile();
		$userID = $profileModel->getUserBySalt($_SESSION['user']);
		$userID = $userID[0]['userID'];
		
		$addBuild = DB::query(Database::INSERT, '
				INSERT INTO buildingstousers
				VALUES (:buildingID, :userID, :amount)
		');
	
		$addBuild->parameters(array(
			':buildingID'=> $buildingID,			
			':userID'=>$userID,
			':amount'=>$amount,
		));
		return $addBuild->execute();
		
	}
	
	
	public function addBuildingRoundTable($amount, $buildingID)
	{
		$profileModel = new Model_Profile();
		$userID = $profileModel->getUserBySalt($_SESSION['user']);
		$userID = $userID[0]['userID'];
		
		
		$queryTotal = DB::query(Database::SELECT, '
					SELECT housing FROM roundtable WHERE userID = :userID
					');
		$queryTotal->parameters(array(
		    ':userID' => $userID,
			':buildingID' => $buildingID,
		));
		$toatlBuildings = $queryTotal->execute();
		
		
		$updateUser = DB::query(Database::UPDATE, '
				UPDATE roundtable
				SET housing=:housing
				WHERE userID=:userID
			');
		
			$updateUser->parameters(array(
				':housing'=> $toatlBuildings[0]['housing'] + $amount,			
				':userID'=>$userID,
			));
			$test = $updateUser->execute();
		
		$updateBuilda = DB::query(Database::UPDATE, '
				UPDATE buildingstousers
				SET amount=:housing
				WHERE userID=:userID AND buildingID = 1
			');
		
		$updateBuilda->parameters(array(
				':housing'=> $toatlBuildings[0]['housing'] + $amount,			
				':userID'=>$userID,
			));
		$test = $updateBuilda->execute();	

		
		return false;
	}
	
	public function getBuildingCost($buildingID)
	{
		$query = DB::query(Database::SELECT, '
					SELECT cost
					FROM buildingtypes t
					WHERE buildingID=:buildingID
					');
		$query->parameters(array(
		    ':buildingID' => $buildingID,
		));
		$cost = $query->execute();
		$cost = $cost[0]['cost'];
		return $cost;
	}
	
	public function getLastCaptcha()
	{
		$query = DB::query(Database::SELECT, '
			SELECT max(gd.time) as time
			FROM captcha gd
			WHERE userSalt=:salt
		');
		$query->parameters(array(':salt'=>Session::instance()->get('user')));
		return $query->execute();
	}
	
	public function setCaptcha()
	{
		$query = DB::query(Database::INSERT, "INSERT INTO captcha (userSalt, time) VALUES (:salt, :time)");
		$now = date('Y-m-d H:i:s',  time());//time();
		
		$query->parameters(array(':salt'=>Session::instance()->get('user'), ':time'=>$now));
		$query->execute();
	}
}













