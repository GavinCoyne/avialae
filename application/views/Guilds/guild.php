<div id="profile" class="profile">
	<h1>The <?= isset($guildInfo['guildName']) ? base64_decode($guildInfo['guildName']) : "No Name" ?> Guild<small></small></h2>

	<h2><?= count($users)?>/<?= MAX_MEMBERS?></h2>
	<div class="table-responsive">
		
		
		<table class="table">
	    		<tr>
	    			<th width="10%">
	    				<img style="width:100px;" alt="..." src="<?= Kohana::$base_url?>media/avatars/ostrich_skiing.gif"  />
	    			</th>
	    			
	    		</tr>
	    		<tr>
	    			<td>Name</td>
	    			<td>Rank</td>
	    			<td>Gold</td>
	    			<td>Level</td>
	    			<td>Size</td>
	    		</tr>
    		<?php 
	    		foreach($users as $user)
	    		{
    		?>
		    		<tr>
		    			
		    			<td><a href="<?= Kohana::$base_url.'Profile/user?name='.$user['userName'];?>"><?=$user['userName']?> </a></td>
		    			<td><?= $user['rank']?></td>
		    			<td><?= $user['gold']?></td>
		    			<td><?= $user['level']?></td>
		    			<td><?= $user['size']?></td>
		    		</tr>
		    <?php 
	    		}
		    ?>

	  </table>
  </div>

</div>