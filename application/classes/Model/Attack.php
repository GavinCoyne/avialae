<?php 
class Model_Attack extends Model
{
	public function getUserStats($userID)
	{
		$query = DB::query(Database::SELECT, '
							SELECT airAttack, airDefense, groundAttack, groundDefense, Inteligence,
								turns, gold, userID, exp, level, totalStats, race, karma, rank,
							(SELECT sum(amount) FROM unitstousers u WHERE u.userID = :userID) army
							FROM roundtable
							WHERE userID=:userID
							 
							');
		$query->parameters(array(
		    		':userID' => $userID,
				));						
		
		return $query->execute();
	}
	
	public function getUnitTypes($userID)
	{
		$query = DB::query(Database::SELECT, '
							SELECT userID, unitID, amount,
							(SELECT Position FROM unittypes t WHERE t.unitID = u.unitID) position,
							(SELECT unitname FROM unittypes t WHERE t.unitID = u.unitID) unitname
							FROM unitstousers u
							WHERE userID=:userID
							 
							');
		$query->parameters(array(
		    		':userID' => $userID,
				));						
		
		return $query->execute();
	}
	
	/**
	 * 
	 * This function will update the unitstouser and the global unit stats in the 
	 * round Table
	 * @param unknown_type $unitID
	 * @param unknown_type $amount
	 * @param unknown_type $userID
	 */
	public function updateUnit($unitID, $amount, $userID)
	{
		$unitStats = self::getUnitStats($unitID);
		$unitAmounts = self::getUnitsByUnit($unitID, $userID);
		$amount = ($unitAmounts[0]['amount'] - $amount < 30 ? 0 : $amount);
		$ap = $amount * $unitStats[0]['airAttack'];
		$ad = $amount * $unitStats[0]['airDefense'];
		$gp = $amount * $unitStats[0]['groundAttack'];
		$gd = $amount * $unitStats[0]['groundDefense'];
		$int = $amount * $unitStats[0]['Inteligence'];
		$gg = $amount * $unitStats[0]['goldGather'];
		
		$updateUser = DB::query(Database::UPDATE, '
			UPDATE roundtable
			SET airAttack=(airAttack - :aa),
				airDefense=(airDefense - :ad), 
				groundAttack=(groundAttack -:ga), 
				groundDefense=(groundDefense -:gd),
				inteligence=(inteligence -:int), 
				goldGather=(goldGather -:gg)
			WHERE userID= :userID
		');
		
		$updateUser->parameters(array(
				':aa' => (int)$ap,
				':ad' => (int)$ad,
				':ga' => (int)$gp,
				':gd' => (int)$gd,
				':int' => (int)$int,
				':gg' => (int)$gg,
				':userID' => $userID,
		
			));
		$updateUser->execute();
		
		$queryUpdate = DB::query(Database::UPDATE, '
				UPDATE unitstousers 
				SET amount=(amount - :amount)
				WHERE unitID = :unitID AND userID = :userID
			');
			$queryUpdate->parameters(array(
			    ':userID' => $userID,
				':unitID' => $unitID,
				':amount' => (int)($amount),
			));
			$queryUpdate->execute();
			return $amount;
		
		
	}
	
	public function getUnitStats($unitID)
	{
		$query = DB::query(Database::SELECT, '
							SELECT *
							FROM unittypes
							WHERE unitID=:unitID
							 
							');
		$query->parameters(array(
		    		':unitID' => $unitID,
				));						
		
		return $query->execute();
	}
	
	public function getUnitsByUnit($unitID, $userID)
	{
		$query = DB::query(Database::SELECT, '
							SELECT *
							FROM unitstousers
							WHERE userID=:userID
								AND unitID=:unitID
							 
							');
		$query->parameters(array(
		    		':userID' => $userID,
					':unitID' => $unitID,
				));						
		
		return $query->execute();
	}
	
	
	public function updateAttacker($goldGain, $karma, $turns, $exp, $level, $userID)
	{
		
		$updateUser = DB::query(Database::UPDATE, '
			UPDATE roundtable 
			SET gold=(gold + :gold), karma=:karma, turns=(turns - :turns), exp=:exp, level=:level 
			WHERE userID=:userID 
		');
		
		$updateUser->parameters(array(
				':gold' => (int)$goldGain,
				':karma' => (int)$karma * 100,
				':turns' => (int)$turns,
				':exp' => (int)$exp,
				':level' => (int)$level,
				':userID' => $userID,
		
			));
		return $updateUser->execute();
	}
	
	public function updateTarget($goldGain, $userID)
	{
		
		$updateUser = DB::query(Database::UPDATE, '
			UPDATE roundtable 
			SET gold=(gold - :gold) 
			WHERE userID=:userID 
		');
		
		$updateUser->parameters(array(
				':gold' => (int)$goldGain,
				':userID' => $userID,
		
			));
		return $updateUser->execute();
	
	}
	
}