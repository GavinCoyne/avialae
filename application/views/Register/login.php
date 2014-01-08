

<?php 
if(!isset($_SESSION['user']))
{
	?>
		<!-- Button trigger modal -->
		<button class="btn btn-primary marg15" data-toggle="modal" data-target="#loginModal" onclick="setTimeout(function(){$('#username').focus();}, 500);">
		  Login
		</button>
		<!-- Modal -->
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">Login</h4>
		      </div>
		      <form id="login" action>
		      <div class="modal-body" id="loginDiv" >
		      	<div class="form-group">
		       		<input type="text" rel="username"  class="form-control login" id="usernameLogin" placeholder="Username or Email" />
		      	</div>
		       	<div class="form-group">
					<input class="form-control login" rel="password" type="password" id="passwordLogin" name="passwordLogin" placeholder="password" />
				</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancel</button>
		        <button type="submit" class="btn btn-success" id="loginButton" >Login <i class="glyphicon glyphicon-off"></i></button>
		      </div>
		      </form>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	
		
	<?php 
}
else
{
	?>
	<a class="btn btn-danger marg15" href="<?= Kohana::$base_url?>login/logout" >Logout <i class="glyphicon glyphicon-off"></i></a>
	
	<?php 
}	
?>

