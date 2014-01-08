<?php 

var_dump($_POST);
if(isset($_POST))
{
	$errors = Array();
	if(!isset($_POST['newPassword'])|| $_POST['newPassword'] == '')
	{
		$errors[] = 'Error: New Password can\'t be empty failed<br>';
	}
	if(!isset($_POST['newPasswordCheck']) || $_POST['newPasswordCheck'] == '')
	{
		$errors[] = 'Error: Password Check failed<br>';
	}
	
	if(!isset($_POST['oldPassword'])|| $_POST['oldPassword'] == '')
	{
		$errors[] = 'Error: Old Password failed<br>';
	}
	
	
	if(count($errors) > 0)
	{
		echo '<div class="alert alert-danger">';
		foreach($errors AS $error)
			echo $error;
		echo '</div>';
	}
	
}
?>

<form action="#" method="POST" role="form">
	<div class="form-group">
	    <label for="oldPassword">Old Password:</label>
		<input name="oldPassword" type="password" class="form-control" />
	</div>
	<div class="form-group">
	    <label for="newPassword">New Password:</label>
		<input name="newPassword" type="password" class="form-control" />
	</div>
	<div class="form-group">
	    <label for="newPasswordCheck">Password Check:</label>
		<input name="newPasswordCheck" type="password" class="form-control" />
	</div>
	<button type="submit" class="btn btn-success">Save</button>

</form>