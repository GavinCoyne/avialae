<h1>Invite User</h1> 
<h2><?= isset($to) ? $to : 'No user Selected for guild invite.'?></h2>
<?php 
	if(isset($to)){
		echo 'guild invitation has been sent to '.$to;
	}
?>