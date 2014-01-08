		<table class="table table-striped pull-right" >
			<thead>
		    		<tr>
		    			<th>Own </th>
		    			<th>Name</th>
		    			<th>Cost</th>
		    			<th>Build</th>
		    		</tr>
    		</thead>
    		<tbody>

<?php 
	foreach($buildingTypes AS $building)
	{
?>
				<tr>
						<td><?= isset($building['amount'])? $building['amount'] : 0 ?> </td>
		    			<td><?=$building['buildingName'] ?></td>
		    			<td><?=$building['cost'] ?></td>
		    			<td class="col-lg-3">
		    			<?php 
		    			
		    				if(isset($building['multiple'])) {
		    					if($building['multiple'] == 1 || $building['amount'] < 1)
		    					{
		    				?>
		    			
			    				<form class="form-inline buyBuildingsForm" role="form"  >
									<input type="hidden" class="buildingToBuy" value="<?=$building['buildingID'] ?>" />
									
	    								<div class="">
	    								<?php if($building['buildingID'] == 1){?>
											<input type="text" class="amountToBuy " style="width:75px" />
										<?php }
										else
										{?>
											<input type="hidden" class="amountToBuy " value="1" />
								<?php 	}?>
											<span class="">
												<button class="btn btn-default" type="submit">Build</button>
									      	</span>
								      	</div>
								</form>
								
						<?php 
		    					}
		    				}
						
						?>
						</td>				
				</tr>

<?php 
	}
?>
				</tbody>
	</table>