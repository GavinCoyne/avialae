<div>
	<p><?= isset($errors) ? $errors : ''?></p>
	<h2>Buy a guild. Cost 10,000 gold</h2>
	<form id="guildPurchase" action="/Guilds/buyGuild" method="post" >
		<input name="guildName" >
		<button type="submit" class="btn btn-success">Purchase</button>
	</form>
</div>