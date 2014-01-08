

<div id="profile" class="">
	<h1><small><?= $username ?></small></h2>
	<div class="table-responsive">
		<table class="table">
	    		<tr>
	    			<th width="10%">
	    				<img style="width:100px;" alt="..." src="<?= Kohana::$base_url?>media/avatars/ostrich_skiing.gif"  />
	    			</th>
	    			<?php 
	    		
	    			if($info['salt'] != $_SESSION['user'])
	    			{
	    		
	    		?>
	    					<th>
	    						<a href="<?=Kohana::$base_url?>Game/attack?target=<?= $username ?>" class="btn btn-primary">Attack</a>
	    						<a href="<?=Kohana::$base_url?>Messaging/send?to=<?= $username ?>" class="btn btn-info">Send Message</a>
	    						<a href="<?=Kohana::$base_url?>Profile/addFriend?target=<?= $username ?>" class="btn btn-success">Make Friend</a>
	    						<a href="<?=Kohana::$base_url?>Messaging/addEnemy?to=<?= $username ?>" class="btn btn-danger">Make Enemy</a>
	    						<a href="<?=Kohana::$base_url?>Guilds/invite?to=<?= $username ?>" class="btn btn-warning" >Send Guild Invite</a>
	    					</th>
	    		<?php 
	    			}
	    			else
	    			{
	    				?>
	    				<td>
	    				<button id="edit" type="button" class="btn btn-info">Edit</button>
	    				<a href="<?=Kohana::$base_url?>Profile/edit" class="btn btn-info">Edit</a>
	    				<a href="<?=Kohana::$base_url?>Profile/settings" class="btn btn-info">Account Settings</a>
	    				<a href="<?=Kohana::$base_url?>Game/activate" class="btn btn-info">Round Activate</a>
	    				
	    				</td>
	    		<?php 
	    			}
	    		?>
	    		</tr>
	    		<tr>
	    			<th>Rank </th>
	    			<td><?= isset($info['rank']) ? ($info['rank'] == -1 ? '-' : $info['rank']): "-" ?></td>
	    		</tr>
	    		<tr>
	    			<th>Points </th>
	    			<td><?= isset($info['points']) ? $info['points'] : "-"?></td>
	    		</tr>
	    		<tr>
	    			<th>Gold </th>
	    			<td><?= isset($info['points']) ? $info['gold'] : "-"?></td>
	    		</tr>
	    		<tr>
	    			<th>Karma </th>
	    			<td><?= isset($info['points']) ? "%".$info['karma']/100 : "-"?></td>
	    		</tr>
	    		<tr>
	    			<th>Race </th>
	    			<td><?= isset($info['raceName']) ? $info['raceName'] : "-"?></td>
	    		</tr>
	    		<tr>
	    			<th>Army </th>
	    			<td><?= isset($info['points']) ? $info['army'] : "-"?></td>
	    		</tr>
				<tr>
	    			<th>About me: </th>
	    			<td>Stuff</td>
	    		</tr>
	    		<tr>
	    			<th>Minions </th>
	    			<td>YOU!</td>
	    		</tr>
	    		
	    		<tr>
	    		
	    			<td></td>
	    		</tr>
	    		
	  </table>
  </div>

</div>