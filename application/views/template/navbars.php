<?php 
	if(isset($_SESSION['user']))
	{

?>
		<nav class="nav" id="controlNav" >
			<ul class="nav nav-pills nav-stacked" >
				<?php 
				foreach($links as $name=>$link)
				{
				?>
				  <li ><a href="<?= $link ?>"><?= $name ?></a></li>
				<?php 
				}
				?>
			</ul>
		</nav>
		
<?php 
}
?>