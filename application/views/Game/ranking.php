<h1>Rankings</h1>


	<div>
		<table class="table table-striped table-condensed table-hover" data-provides="rowlink">
			<thead>
		    		<tr>
		    			<th>Rank </th>
		    			<th>Points</th>
		    			<th>Username</th>
		    			<th>Level</th>
		    			<th>Race</th>
		    			<th>Army</th>
		    			<th>Gold</th>
		    		</tr>
    		</thead>
    		<tbody>
    		<?php 
    			foreach($users as $user)
    			{
    		?>
		    		<tr>
				    			<td><?= $user['rank'] ?></td>
				    			<td><?= $user['points'] ?></td>
				    			<td><a href="/profile/user?name=<?= $user['username'] ?>" title="<?= $user['username'] ?>" data-toggle="tooltip" ><?= $user['username'] ?></a></td>
				    			<td><?= $user['level'] ?></td>
				    			<td><?= $user['raceName'] ?></td>
				    			<td><?= !is_null($user['army']) ? $user['army'] : 0 ?></td>
				    			<td><?= $user['gold'] ?></td>
				    </tr>
		    <?php 
    			}
		    ?>
    		</tbody>

		</table>
	</div>
