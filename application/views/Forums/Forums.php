<table class="table">
	<thead>
		<tr>
			<th>Forum</th>
			<th>Threads</th>
			<th>Posts</th>
			<th>Latest Post</th>
		</tr>
	</thead>
	
	<tbody>

	<?php 
		foreach($forums as $forum)
		{
			echo '<tr>';
				echo '<td><a href="'.Kohana::$base_url.'Forums/forum?forum='.$forum['forumID'].'">'.$forum['forumName'].'</a></td>';
				echo '<td>'.'0/0'.'</td>';
				echo '<td>'.'0'.'</td>';
				echo '<td>'.'By Author'.'</td>';
			echo '</tr>';
		}
	?>
	
	</tbody>
</table>