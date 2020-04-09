<h2><?php echo $title_for_layout; ?></h2>
	<table class="table table-bordered" >
		<tr>
			<td>ID</td>
			<td><?php echo $data['Ploai']['id']; ?></td>
		</tr>
		<tr>
			<td>NAME</td>
			<td><?php echo $data['Ploai']['c_name']; ?></td>
		</tr>
	</table>
	<?php echo $html->link("Back", array("action" => "index"), array('class' => 'btn btn-primary')); ?>
