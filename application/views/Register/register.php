	<!-- Button trigger modal -->
	<?php 
if(!isset($_SESSION['user']))
{
	
	?>
<form id="registerForm" action>
      		<div class="modal-body" id="registerDiv">
      
		       	<div class="form-group"  >
					<input  class="form-control " type="text" id="username" placeholder="Username" required />
				</div>
		       	<div class="form-group">
					<input  class="form-control" type="password" id="password" name="password" placeholder="password" required  />
				</div>
		       	<div class="form-group">
					<input  class="form-control" type="password" id="passwordCheck" name="passwordCheck" placeholder="password check" required />
				</div>
				<div class="form-group">
					<input  class="form-control" type="text" id="email" name="email" placeholder="email" required />
				</div>

				<div class="alert alert-success fade in" style="display:none;" id="registerAlert">
				</div>
      		</div>
      		
      		<div class="modal-footer">
       			<button class="btn btn-danger" data-dismiss="modal">Cancel</button>
        		<button id="registerButton" type="submit" class="btn btn-primary"  >Sign up</button>
      		</div>
      	</form>
<?php 
}

?>
		<!-- <button class="btn btn-success " data-toggle="modal" data-target="#registerModal" onclick="setTimeout(function(){$('#usernameIn').focus();}, 500);">
		  Register <i class="glyphicon glyphicon-plus-sign"></i>
		</button>
		
		-->

<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      	<div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        	<h4 class="modal-title" id="myModalLabel">register</h4>
      	</div>
      	<form id="registerForm" action>
      		<div class="modal-body" id="registerDiv">
      
		       	<div class="form-group"  >
					<input  class="form-control " type="text" id="username" placeholder="Username"  />
				</div>
		       	<div class="form-group">
					<input  class="form-control" type="password" id="password" name="password" placeholder="password"  />
				</div>
		       	<div class="form-group">
					<input  class="form-control" type="password" id="passwordCheck" name="passwordCheck" placeholder="password check"  />
				</div>
				<div class="form-group">
					<input  class="form-control" type="text" id="email" name="email" placeholder="email"  />
				</div>

				<div class="alert alert-success fade in" style="display:none;" id="registerAlert">
				</div>
      		</div>
      		
      		<div class="modal-footer">
       			<button class="btn btn-danger" data-dismiss="modal">Cancel</button>
        		<button id="registerButton" type="submit" class="btn btn-primary"  >Sign up</button>
      		</div>
      	</form>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->