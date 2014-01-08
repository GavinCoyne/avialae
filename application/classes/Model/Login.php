<?php 
class Model_Login extends Model
{
		public function login($username, $password)
		{
			$password = hash("sha512", $password.Cookie::$salt);
			$result = self::check($username);
			if($result)
			{
				if($result['password'] == $password)
				{
					$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				    $randomString = '';
				    for ($i = 0; $i < 512; $i++) {
				        $randomString .= $characters[rand(0, strlen($characters) - 1)];
				    }
					$sessionSalt = hash("sha512", Cookie::$salt.$randomString);
					
					//$_SESSION['user'] = $result['salt'];
					Session::instance()->set('user', $result['salt']);
					self::logUser();
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		
		public function logUser()
		{
		    	$query = DB::query(Database::INSERT, "INSERT INTO usersessions (userSalt, requestURI, IP) VALUES (:salt, :uri, :IP)");
		    	$query->parameters(array(
		    		':salt' => $_SESSION['user'],
	    			':uri' => $_SERVER['REQUEST_URI'],
		    		':IP' => $_SERVER['REMOTE_ADDR'],
				));
				return $query->execute();
		}
		
		public function check($username)
		{
			
		$query = DB::query(Database::SELECT, 'SELECT userName, password, salt FROM user WHERE userName=:user OR email=:user');
    	$query->parameters(array(
		    ':user' => $username,
		));
		$results = $query->execute();

		foreach($results as $result)
		{
			return $result;
		}
		return false;
		}
}