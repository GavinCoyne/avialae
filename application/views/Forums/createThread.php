<form action="<?= Kohana::$base_url.'Forums/createThreadPOST?forum='.$forumID?>" method="POST" role="form">
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" placeholder="title" name="threadTitle" />
	</div>
	<div class="form-group">
		<textarea rows="10" cols="125" name="post" placeholder="post" ></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Create</button>

</form>