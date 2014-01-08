<a href="<?= Kohana::$base_url.'Forums/createThread?forum='.$forumID ?>" alt="create thread" title="create thread">Create Thread</a>

<table class="table">
	<thead>
		<tr>
			<th>Forum</th>
			<th>Views</th>
			<th>Replies</th>
			<th>Latest Post</th>
		</tr>
	</thead>
	
	<tbody>

	<?php 
	if(count($threads) > 0)
		foreach($threads as $thread)
		{
			echo '<tr>';
				echo '<td><a href="'.Kohana::$base_url.'Forums/thread?thread='.$thread['threadID'].'">'.base64_decode($thread['threadTitle']).'</a></td>';
				echo '<td>'.'0'.'</td>';
				echo '<td>'.'0'.'</td>';
				echo '<td>'.'By Author'.'</td>';
			echo '</tr>';
		}
	?>
	
	</tbody>
</table>