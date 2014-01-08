<form role="form" id="attackForm">
  <div class="form-group">
    <label for="attackPosition">Select Attack Position:</label>
    <select class="form-control" id="attackPosition" placeholder="both">
    	<option value="0">Both</option>
    	<option value="1">Air</option>
    	<option value="2">Ground</option>
    </select>
  </div>
  <div class="form-group">
    <label for="attackTurns">Turns To use:</label>
    	<select class="form-control" id="attackTurns" >
    		<?php 
    			for($i = ATTACK_TURNS; $i >= 1 ;$i--)
    			{
					echo '<option value="'.$i.'" >'.$i.'</option>';
    			}
    		?>
    	</select>
  </div>
  <input type="hidden" value="<?= $_GET['target']?>" id="target" />
  <button type="submit" class="btn btn-danger">ATTACK</button>
</form>


<table	id="attackLogsAttack" class="table table-striped table-condensed table-hover">

</table>