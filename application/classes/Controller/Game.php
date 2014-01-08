<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Game extends Controller_GameTemplate {

	/**
	 * 
	 * (non-PHPdoc)
	 * @see Controller_GameTemplate::before()
	 */
	public function before()
	{
      parent::before();
      
      if(isset($_SESSION['user']))
      {
      	
      	
      }
      
	}
	
	public function action_index()
	{
		$this->response->body('hello, world!');
	}
	
	public function action_ranking()
	{
		$gameModel = new Model_Game();
		$rankedUsers = $gameModel->getRankedUsers();
		
		$this->template->content = View::factory('Game/ranking')
										->set('users', $rankedUsers);
	}
	
	
	public function action_activate()
	{
		
		if(isset($_SESSION['user']))
		{
			$gameModel = new Model_Game();
			if(count($gameModel->isActive()) == 0)
			{
				$salt = $_SESSION['user'];
				$gameModel = new Model_Game();
				$races = $gameModel->getRaces();
				
				$profileModel = new Model_Profile();
				$user = $profileModel->getUserBySalt($salt);
	
				$this->template->content = View::factory('Game/activate')
											->set('races', $races)
											->set('user', $user[0]);
			}
			else
			{
				$this->template->content = "You are activated.";
			}
			
			
		}else{
			$this->template->content = "<p>Error Please try again.";
		}
		
	}
	
	public function action_ativateAjax()
	{
		$this->auto_render = false;
		if(!isset($_POST['race']))
		{
			echo json_encode(array('erros'=>"HACKER! IM TELLING!"));
			return;
		}
		
		$race = ($_POST['race']);
		$gameModel = new Model_Game();
		
		if(count($gameModel->isActive()) == 0)
		{
			($gameModel->activateUser($race));
			{
				echo json_encode(array('success'=>'You have been activated!'));
				return;
				
			}
		}else{
			echo json_encode(array('errors'=>'You are already activated for the round'));
			return;
		}
		
	}
	
	
	public function action_recruit()
	{
		$gameModel = new Model_Game();
		$unittypes = $gameModel->getUnits();
		
		$this->template->content = View::factory('Game/recruit')
										->set('unitTypes', $unittypes);
	}
	public function action_recruitAjax()
	{
		$this->auto_render = false;

		
		if(!isset($_POST['amount']) || !isset($_POST['type']))
		{
			return;
		}
		$unitID = $_POST['type'];
		$amount = $_POST['amount'];
		$gameModel = new Model_Game();
		$stats = $gameModel->getStats();
		$stats = $stats[0];
		
		$cost = $gameModel->getUnitCost($unitID);
		$goldLeft = ($stats['gold'] - ($cost*$amount));
		$housing = $stats['housing'];
		$army = $stats['army'];
		$spaceLeft = ($stats['housing']*50) - $stats['army'];
		
		if($goldLeft >= 0 && $amount >= 0)
		{
			if($spaceLeft >= $amount)
			{
				$unittypes = $gameModel->addUnits($amount, $unitID);
				if($unittypes)
				{
					$goldLeft = $gameModel->updateUserGold($goldLeft);
					echo json_encode(array('success'=>'Recruited Units!'));
					return;
				}
				else 
				{
					echo json_encode(array('errors'=>'Unable to recruit units'));
					return;
				}
			}
			else 
			{
				echo json_encode(array('errors'=>'Not Enough Space'));
				return;
			}
		}
		else 
		{
			echo json_encode(array('errors'=>'Not Enough Gold'));
			return;
		}
		
		echo json_encode(array('errors'=>'Unable to recruit units'));
		return;
	}
	
	public function action_upgrades()
	{
		
	}
	
	public function action_buildings()
	{
		$gameModel = new Model_Game();
		$buildtypes = $gameModel->getBuildings();

		$this->template->content = View::factory('Game/build')
										->set('buildingTypes', $buildtypes);
	}
	
	public function action_buildAjax()
	{
		$this->auto_render = false;

		
		if(!isset($_POST['amount']) || !isset($_POST['type']))
		{
			return;
		}
		$buildingID = $_POST['type'];
		$amount = $_POST['amount'];
		$gameModel = new Model_Game();
		$stats = $gameModel->getStats();
		$stats = $stats[0];
		
		$cost = $gameModel->getBuildingCost($buildingID);
		$goldLeft = ($stats['gold'] - ($cost*$amount));
		$housing = $stats['housing'];
		
		
		if($goldLeft >= 0)
		{
				if($buildingID == 1)
				{
					$unittypes = $gameModel->addBuildingRoundTable($amount, $buildingID);
				}
				else {
					$amount = 1;
					$gameModel->addBuilding($amount, $buildingID);
				}
			
				
				$goldLeft = $gameModel->updateUserGold($goldLeft);
				echo json_encode(array('success'=>'Recruited Units!'));
				return;
				
			
		}
		else 
		{
			echo json_encode(array('errors'=>'Not Enough Gold'));
			return;
		}
		
		echo json_encode(array('errors'=>'Unable to recruit units'));
		return;
	}
	
	public function action_attack()
	{
		if(!isset($_GET['target']) || $_GET['target'] == null)
		{
			var_dump("no target selected");
			return;
		}

		$this->template->content = View::factory('Game/attack');
	}
	
	public function action_attackAjax()
	{
		$this->auto_render = false;
		if(!isset($_POST['position']) || !isset($_POST['turns']) || !isset($_POST['target']))
		{
			return;
		}
		
		$position = $_POST['position'];
		$turns = $_POST['turns'];
		$target = $_POST['target'];
		
		$profileModel = new Model_Profile();
		$target = $profileModel->getProfileByName($target);
		$target = $target[0];
		
		$attackModel = new Model_Attack();
		$targetStat = $attackModel->getUserStats($target['userID']);
		
		$profileModel = new Model_Profile();
		$user = $profileModel->getUserBySalt($_SESSION['user']);
		$userID = $user[0]['userID'];
		$attackerStats = $attackModel->getUserStats($userID);

		if(!($attackerStats[0]['airAttack'] == 0 && $attackerStats[0]['airDefense'] == 0 && $attackerStats[0]['groundAttack'] == 0 && $attackerStats[0]['groundDefense'] == 0 && $attackerStats[0]['Inteligence'] == 0))
		{
			if(!($targetStat[0]['airAttack'] == 0 && $targetStat[0]['airDefense'] == 0 && $targetStat[0]['groundAttack'] == 0 && $targetStat[0]['groundDefense'] == 0 && $targetStat[0]['Inteligence'] == 0))
			{
				if(($attackerStats[0]['turns'] - $turns) >= 0)	
				{	
					$attackAP = array('aa'=>$attackerStats[0]['airAttack'], 'ga'=>$attackerStats[0]['groundAttack']);
					$attackDP = array('ad'=>$attackerStats[0]['airDefense'], 'gd'=> $attackerStats[0]['groundDefense']);
					$attackerInt = $attackerStats[0]['Inteligence'] + $attackerStats[0]['Inteligence'];
					
					$tagetAP = array('aa'=>$targetStat[0]['airAttack'], 'ga'=>$targetStat[0]['groundAttack']);
					$tagetDP = array('ad'=>$targetStat[0]['airDefense'], 'gd'=>$targetStat[0]['groundDefense']);
					$tagetInt = $targetStat[0]['Inteligence'] + $targetStat[0]['Inteligence'];
					$targetGold = $targetStat[0]['gold'];
								
					$attackerUnits = $attackModel->getUnitTypes($userID);
					$targetUnits = $attackModel->getUnitTypes($target['userID']);
					
					$targetLosses = 0;		
					$attackerLosses = 0;	
						
					$targetKarma = ($targetStat[0]['karma']/100/100);
					$targetArmy = $targetStat[0]['army'];
							
					$attackerKarma = ($attackerStats[0]['karma']/100);//attacker karma out of 100
					$attackerArmy = $attackerStats[0]['army'];
			
					//Calculate the gold stolen
					$goldGain =	($targetGold/4)*(($attackerInt/$tagetInt > 1 ? 1 : ($attackerInt/$tagetInt))) *  ($attackerKarma/100);
					
					$gameModel = new Model_Game();
					$totalusers = $gameModel->getRankedUsers();
					
					$totalusers= count($totalusers);
					
					//Calc the ckarma loss
					$karmaChange = ($totalusers > 0 ) ? (($attackerStats[0]['rank'] == -1 ?$totalusers + 1 : $attackerStats[0]['rank']) - $targetStat[0]['rank'])/$totalusers * 10 : 0;
	
					$karmaChange = (($attackerKarma + $karmaChange < 0) ? 0 : ($attackerKarma + $karmaChange)) ;
					$karmaChange = (($karmaChange > 100) ? 100 : ($karmaChange)) ;
	
					$attackerKarma /= 100;//get karma down to 1.0 ratoi
					/**
					 * 
					 * ADD IN sending unitName => unitLoss into target, attackers arrs
					 * for attack logs.
					 */
					//calc target Losses
					$targetUnitsLost = array();
					foreach($targetUnits as $unit)
					{
						
						$attackA = (($unit['position'] == 1) ? $attackAP['aa'] : $attackAP['ga']);
						$targetD = (($unit['position'] == 1) ? $tagetDP['ad'] : $tagetDP['gd']);
						///////////
						//echo "Position= ".$unit['position']."<br>";echo "Position= ".$position."<br>";
						if($attackA > 0 && $targetD > 0)
						{
							if($unit['position'] == $position)
							{
								$unitLoss = floor(($attackA/$targetD)*($unit['amount']/150) * $attackerKarma * ($turns/15));
								$unitLoss = $attackModel->updateUnit($unit['unitID'], $unitLoss, $target['userID']);
								$targetLosses += $unitLoss;
								$targetUnitsLost[$unit['unitname']] = $unitLoss;
							}
						}
						
					}
					
					
					
					//calc attack Losses
					$attackerLossArr = array();
					foreach($targetUnits as $unit)
					{
						$attackDef = ($unit['position'] == 1 ? $attackDP['ad'] : $attackDP['gd']);
						$targetAtac = ($unit['position'] == 1 ? $tagetAP['aa'] : $tagetAP['ga']);
						if($attackDef > 0 && $targetAtac > 0)
						{
							if($unit['position'] == $position)
							{
								$unitLoss = floor(($targetAtac/$attackDef)*($unit['amount']/150) * $targetKarma * ($turns/15));
								$unitLoss = $attackModel->updateUnit($unit['unitID'], $unitLoss, $userID);
								$attackerLosses += $unitLoss;
								$attackerLossArr[$unit['unitname']] = $unitLoss;
							}
						}
					}
					
					
					
					$exp = ($targetLosses * 40 + ($targetStat[0]['level']/5)) + $attackerStats[0]['exp'];
					$level = sqrt(($exp/95))+1;//($exp-1)*($exp-1)*95;//380
					
					$attackModel->updateAttacker($goldGain, $karmaChange, $turns, $exp, $level, $userID);
					$attackModel->updateTarget($goldGain, $target['userID']);
					
					echo json_encode(array('AttckerLosses'=>$attackerLossArr, 'TargetLosses'=>$targetUnitsLost, 'gold'=>$goldGain, 'attacker'=>$user[0]['userName']));
				}
			}else{
				echo json_encode(array('errors'=>'Target needs an army before you can attack.'));
				return;
			}
		}else
		{	
			echo json_encode(array('errors'=>'You need an army before you can attack.'));
			return;
		}
		
		
	}
	
	public function action_guilds()
	{
		
	}

	public function action_captcha()
	{
		$this->template->content = View::factory('Game/captcha');
	}

} // End Welcome