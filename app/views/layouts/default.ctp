<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title_for_layout; ?></title>
	<?php echo $html->css(array('styles', 'bootstrap.min')); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php echo $html->script(array('jquery.min', 'bootstrap.min')); ?>
</head>
<body>
	<div class="container-fluid cntiner">
	  <div class="row content">
	    <div class="col-sm-2 sidenav">
	      <h3><span class="fa fa-book fa-2x" style="vertical-align: middle;"></span>&nbsp&nbspPage Book</h3>
	      <ul class="nav nav-pills nav-stacked">
			<?php

			// Tag - menu(HOME)      
			echo '<li class="active" >'.$html->link('Home', '/').'</li>';?> 
			<!-- Tag - menu(Item) -->
			<li <?php if(isset($menu)) { if($menu[1] == 0) echo 'class="active"';} ?>><?php echo $html->link('Book', array('controller' => 'books', 'action' => 'index')); ?></li>
			<li <?php if(isset($menu)) { if($menu[1] == 1) echo 'class="active"';} ?>><?php echo $html->link('Clfy', array('controller' => 'ploais', 'action' => 'index')); ?></li>

	      </ul><br>
	      <div class="input-group">
	        <input type="text" class="form-control" placeholder="Search Blog..">
	        <span class="input-group-btn">
	          <button class="btn btn-default" type="button">
	            <span class="fa fa-search"></span>
	          </button>
	        </span>
	      </div>
	    </div>
	    <div class="col-sm-10">
	      	<?php echo $session->flash(); ?>
			<?php echo $content_for_layout; ?>
	    </div>
	  </div>
	</div>
	<footer class="container-fluid">
	  	<h4>@Copyright 2017</h4>
	</footer>
</body>
</html>
