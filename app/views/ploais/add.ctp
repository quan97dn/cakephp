<h2><?php echo $title_for_layout; ?></h2>
<hr/>
<?php 
	echo $form->create('Ploai', array('action' => 'add', 'class' => 'form-horizontal'));
		?>
		<div class="form-group">
		    <div class="col-sm-5">
		      	<?php echo $form->input('c_name', array('label' => 'Name', 'class' => 'form-control', 'placeholder' => 'Name...')); ?>
		    </div>
		</div>	
<?php
	echo $form->button('Add', array('class' => 'btn btn-danger', 'style' =>'margin-right:2%;'));
	echo $html->link('Back', array('controller' => 'ploais', 'action' => 'index'), array('class' => 'btn btn-info'));
?>
