<?php 
class Model_Register extends Model
{
    public function checkUserName($username, $email)
    {
    	$query = DB::query(Database::SELECT, 'SELECT * FROM user WHERE userName=:user OR email=:email');
    	$query->parameters(array(
		    ':user' => $username,
    		':email' => $email,
		));
		$results = $query->execute();

		foreach($results as $result)
			return false;
    	
        return true;
    }
    
    public function registerUser($username, $password, $email)
    {
    	$salt = hash("sha512", $username.$password.$email.Cookie::$salt);
    	$password = hash('sha512', $password.Cookie::$salt);
    	
    	$query = DB::query(Database::INSERT, "INSERT INTO user (userID, userName, password, salt, email) VALUES (null, :userName, :password, :salt, :email)");
    	$query->parameters(array(
		    ':userName' => $username,
    		':password' => $password,
    		':salt' => $salt,
    		':email' => $email,
		));
		
		$results = $query->execute();
		return $results;
    }
}