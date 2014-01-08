<h2>Round Activation - <small><?= $user['userName']?></small></h2>

<?php if(isset($_SESSION['user']))
{
	?>
<form id="activateRound">
	<div class="input-group">
		<select class="form-control" id="race">
			<?php 
				foreach($races as $race)
				{
			?>
				
				<option value="<?= $race['raceID']?>" ><?= $race['raceName']?></option>
			<?php 
				}	
			?>
		</select>
		<button type="submit" class="btn btn-warning form-control">Activate</button>
	</div>
</form>

<?php 
}
?>