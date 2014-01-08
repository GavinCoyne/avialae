<h2>Send Message</h2>

<form action="" method="post" id="sendForm" >
	<div class="form-group">
		<textarea rows="8" cols="125" id="messageBody" ></textarea>
		<input type="hidden" value="<?= $to?>" id="to" />
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Send</button>
	</div>
</form>