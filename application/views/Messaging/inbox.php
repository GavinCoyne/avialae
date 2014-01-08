<h2>Inbox</h2>

<table class="table table-bordered">
	<tr  >
		<th style="width:10%;">From</th>
		<th>Message</th>
	</tr>
	<?php 
		foreach($messages as $message){?>
			<tr class="<?= $message['read'] == 0 ? 'unreadPM' : 'readPM';?>">
				<th><a href="<?= Kohana::$base_url."profile/user?name=".$message['sender']?>" ><?= $message['sender']?></a></th>
				<td class="pull-right" style="width:100%">
					
					<a class="readMessage" href="" style="margin-right: 10px;" >Mark as Read</a>
					<input type="hidden" value="<?= $message['messageID'] ?>" />
					<a href="<?=Kohana::$base_url?>Messaging/send?to=<?= $message['sender'] ?>" style="margin-right: 10px;">Reply</a>
					<a class="deleteMessage" href="" style="margin-right: 10px;">Delete</a>
					<input type="hidden" value="<?= $message['messageID'] ?>" />
				</td>
			<tr>
			<tr class="<?= $message['read'] == 0 ? 'unreadPM' : 'readPM';?>" >
				<td style="height:250px;"><?= $message['sendTime']?></td>
				<td><?= base64_decode($message['Message'])?></td>
			</tr>
	<?php 
		}
	?>
</table>