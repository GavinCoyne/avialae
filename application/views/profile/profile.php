

<div id="profile" class="">
	<h1><small><?= $username ?></small></h2>
	<div class="table-responsive">
		<table class="table">
	    		<tr>
	    			<th width="10%">
	    				<img style="width:100px;" alt="..." src="<?= Kohana::$base_url?>media/avatars/ostrich_skiing.gif"  />
	    			</th>
	    			<?php 
	    		
	    			if($info['salt'] != $_SESSION['user'])
	    			{
	    		
	    		?>
	    					<th>
	    						<a href="<?=Kohana::$base_url?>Messaging/send?to=<?= $username ?>" class="btn btn-info">Send Message</a>
	    					</th>
	    		<?php 
	    			}
	    			else
	    			{
	    				?>
	    				<td>
		    				<a href="<?=Kohana::$base_url?>Profile/edit" class="btn btn-info">Edit</a>
		    				<a href="<?=Kohana::$base_url?>Profile/settings" class="btn btn-info">Account Settings</a>   				
	    				</td>
	    		<?php 
	    			}
	    		?>
	    		</tr>

	    		
	    		<tr>
	    		
	    			<td>Infor here</td>
	    		</tr>
	    		
	  </table>
  </div>

</div>