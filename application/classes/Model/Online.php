<?php
class Model_Online extends Model
{
	public function getAllOnline()
	{
		$query = DB::query(Database::SELECT, '
					SELECT MAX(time) time,
					(
						SELECT DISTINCT userName FROM user where user.salt = us.userSalt
					) userName
					FROM usersessions us
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					GROUP BY userName
					ORDER BY time DESC
					' );

		return $query->execute();
		
	}
}