<!doctype HTML>
<html>
	<head><title><?= $title; ?></title>
	
	
	<?php 
	foreach($styles AS $name => $style)
	{
	?>
		<link rel="stylesheet" href="<?= $name?>" />
	<?php 
	}
	?>
	
	<?php 
	foreach($scripts AS $script)
	{
	?>
		<script src="<?= $script?>"></script>
	<?php 
	}
	?>
</head>

<body >
	
	<div class="container" id="container">
		<h1><?= $header?><small> - Alpha Test</small></h1>
		<h2><?= $logout ?></h2>
		<?= isset($controlPanel) ? $controlPanel : ''?>

		<div class="row-fluid">
			<div class="navBars pull-left " style="width: 12%;" >
				<?= $navBar ?>
			</div>
			<div class="pull-right" style="width: 80%;">
				<?= $content ?>
			</div>
		</div>

		<div class="footer center-text row-fluid">
			<a href="mailto:gavin@gavincoyne.com" alt"gavin@gavincoyne.com">gavin@gavincoyne.com</a>
			<a href="https://plus.google.com/105878991380743070475" rel="publisher">Google+</a>
		</div>
	</div>
	
	
	
</body>

</html>