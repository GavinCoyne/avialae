<?php 

?>
<div class="controlPanel">
	<table class="table">
		<tr>
			<td rowspan="4" width="20%">
				<img style="width:150px;" alt="..." src="<?= Kohana::$base_url?>media/avatars/"  />
			</td>
			<td >Name<span class="pull-right"><a href="<?= Kohana::$base_url."profile/user?name=".$username ?>" title=""><?= $username ?></a></span></td>
			<td>PMs<a href="<?= Kohana::$base_url?>messaging" class="pull-right" >Inbox <span class="badge"><?= isset($count) ? $count : '0'?></span></a></td>
			<td class="text-right" ><?php echo date(' H:i l d, Y');?> </td>
		</tr>
	</table>
</div>