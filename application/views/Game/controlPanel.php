<?php 

?>
<div class="controlPanel">
	<table class="table">
		<tr>
			<td rowspan="4" width="20%">
				<img style="width:150px;" alt="..." src="<?= Kohana::$base_url?>media/avatars/ostrich_skiing.gif"  />
			</td>
			<td >Name<span class="pull-right"><a href="<?= Kohana::$base_url."profile/user?name=".$username ?>" title=""><?= $username ?></a></span></td>
			<td>Rank: <span class="pull-right"><?= ($user['rank'] > 0) ? number_format($user['rank'], 0, '.', ',') : '-' ?></span></td>
			<td>Points<span class="pull-right green"><?= number_format( $user['points'], 0, '.', ',') ?></span></td>
			
		</tr>
		<tr>
			<td>Level<span class="pull-right"><?= $user['level'] ?></span></td>
			<td>Gold<span class="pull-right"><?=  number_format($user['gold'], 0, '.', ',') ?></span></td>
			<?php $karma = number_format($user['karma']/100, 2)?>
			<td>Karma<span class="pull-right " style="color:<?= ($karma <= 75) ? ($karma <= 50 ? 'rgba(255,0,0,1)' : 'blue') : 'green'?> ;"><?= $karma ?></span></td>
		</tr>
		<tr>
			<td>Exp<span class="pull-right"><?= number_format($user['exp'] , 0, '.', ',')?></span></td>
			<td>Units<span class="pull-right"><?= !is_null($user['army']) ? $user['army'] : 0  ?>/<?= (int)($user['housing'])*50 ?></span></td>
			<td>PMs<a href="<?= Kohana::$base_url?>messaging" class="pull-right" >Inbox <span class="badge"><?= isset($count) ? $count : '0'?></span></a></td>
		</tr>
		<tr>
			<td> Turns<span class="pull-right"><?= number_format($user['turns'], 0, '.', ',') ?></span></td><td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="4" class="text-right" ><?php echo date(' H:i l d, Y');?> </td>
		</tr>
		<tr>
			<td colspan="4" class="text-right" ></td>
		</tr>

	</table>
</div>