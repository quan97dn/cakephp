<h2><?php echo $title_for_layout; ?></h2>
<hr/>
<?php 
	echo $form->create('Book', array('action' => 'edit', 'class' => 'form-horizontal'));
		?>
		<div class="form-group">
		    <div class="col-sm-5">
		      	<?php echo $form->input('b_name', array('label' => 'Name', 'class' => 'form-control', 'placeholder' => 'Name...')); ?>
		    </div>
		</div>
		<div class="form-group">
		    <div class="col-sm-5">
		      	<?php echo $form->input('b_price', array('label' => 'Price', 'class' => 'form-control', 'placeholder' => 'Price...')); ?>
		    </div>
		</div>
		<div class="form-group">
		    <div class="col-sm-5">
		      	<?php echo $form->input('b_classify', array('label' => 'Classify', 'class' => 'form-control', 'placeholder' => 'Classify...')); ?>
		    </div>
		</div>
		<div class="form-group">
		    <div class="col-sm-5">
		      	<?php echo $form->input('b_description', array('label' => 'Description', 'class' => 'form-control', 'placeholder' => 'Description...')); ?>
		    </div>
		</div>
		
<?php
	echo $form->button('Update', array('class' => 'btn btn-danger', 'style' =>'margin-right:2%;'));
	echo $html->link('Back', array('controller' => 'books', 'action' => 'index'), array('class' => 'btn btn-info'));
?>
