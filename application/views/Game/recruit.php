		<table class="table table-striped pull-right" >
			<thead>
		    		<tr>
		    			<th>Own </th>
		    			<th>Name</th>
		    			<th>Position</th>
		    			<th>GA</th>
		    			<th>GD</th>
		    			<th>AA</th>
		    			<th>AD</th>
		    			<th>INT</th>
		    			<th>RES</th>
		    			<th>GATHER</th>
		    			<th>Cost</th>
		    			<th>Recruit</th>
		    		</tr>
    		</thead>
    		<tbody>

<?php 
	foreach($unitTypes AS $unit)
	{
?>
				<tr>
						<td><?= isset($unit['amount'])? $unit['amount'] : 0 ?> </td>
		    			<td><?=$unit['unitName'] ?></td>
		    			<td><?=$unit['PositionName'] ?></td>
		    			<td><?=$unit['groundAttack'] ?></td>
		    			<td><?=$unit['groundDefense'] ?></td>
		    			<td><?=$unit['airAttack'] ?></td>
		    			<td><?=$unit['airDefense'] ?></td>
		    			<td><?=$unit['Inteligence'] ?></td>
		    			<td><?=$unit['Resistence'] ?></td>
		    			<td><?=$unit['goldGather'] ?></td>
		    			<td><?=$unit['unitCost'] ?></td>
		    			<td class="col-lg-3">
			    				<form class="form-inline buyUnitsForm" role="form"  >
									<input type="hidden" class="unitToBuy" value="<?=$unit['unitID'] ?>" />
									
	    								<div class="input-group">
											<input type="text" class="amountToBuy " style="width:130px;" />
											<span class="">
									        	<button class="btn btn-default" type="submit">Recruit</button>
									      	</span>
								      	</div>
								</form>
						</td>				
				</tr>

<?php 
	}
?>
				</tbody>
	</table>