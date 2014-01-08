<h1>Who's Online <small>Activity in the last 5 minutes</small></h1>


	<div>
		<table class="table table-striped table-condensed table-hover">
	    		<tr>
	    			<th>Username</th>
	    			<th style="text-align: right;">Last Active</th>
	    		</tr>
	    		<?php 
					foreach($online as $user)
					{
				?>
			    		<tr>
			    			<td><a href="profile/user?name=<?= $user['userName'];?>" alt="username"><?= $user['userName'];?></a> </td>
			    			<td style="text-align: right;"><?= $user['time'];?></td>
			    		</tr>
	    		<?php 
					}
				?>
		</table>
	</div>

