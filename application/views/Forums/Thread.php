<h2>Posts</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Forum</th>
			<th>Views</th>

		</tr>
	</thead>
	
	<tbody>

	<?php 
	if(count($posts) > 0)
		foreach($posts as $post)
		{
			echo '<tr>';
				echo '<td style="width:15%;">'.$post['username'].'</td>';
				echo '<td rowspan="2">'.base64_decode($post['post']).'</td>';
			echo '</tr>';
				echo '<tr>';
				
				echo '<td style="width:15%;">'.$post['postTime'].'</td>';
			echo '</tr>';
		}
	?>
	
	</tbody>
</table>

<form action="<?= Kohana::$base_url.'Forums/addPost?thread='.$threadID?>" method="POST" role="form">
	<div class="form-group">
	</div>
	<div class="form-group">
		<textarea rows="10" cols="125" name="post" placeholder="post" ></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Post</button>

</form>