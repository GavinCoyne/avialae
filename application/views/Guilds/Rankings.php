<h1>Rankings</h1>


	<div>
		<table class="table table-striped table-condensed table-hover" data-provides="rowlink">
			<thead>
		    		<tr>
		    			<th>Rank </th>
		    			<th>Points</th>
		    			<th>Username</th>
		    			<th>Level</th>
		    		</tr>
    		</thead>
    		<tbody>
    		<?php 
    			foreach($guilds as $guild)
    			{
    		?>
		    		<tr>
				    			<td><?= 'rank'//$guild['rank'] ?></td>
				    			<td><?= 'points'//$guild['points'] ?></td>
				    			<td><a href="<?= kohana::$base_url.'Guilds/guild?guildName='.base64_decode($guild['guildName'])?>"><?= base64_decode($guild['guildName'])?></a></td>
				    			<td><?= 'level'//$guild['level'] ?></td>
				    </tr>
		    <?php 
    			}
		    ?>
    		</tbody>

		</table>
	</div>
