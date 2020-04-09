<h2><?php echo $title_for_layout; ?></h2>
	<table class="table table-bordered" >
		<tr>
			<td>ID</td>
			<td><?php echo $data['Book']['id']; ?></td>
		</tr>
		<tr>
			<td>NAME</td>
			<td><?php echo $data['Book']['b_name']; ?></td>
		</tr>
		<tr>
			<td>PRICE</td>
			<td><?php echo $data['Book']['b_price']; ?></td>
		</tr>
		<tr>
			<td>CLASSIFY</td>
			<td><?php echo $data['Book']['b_classify']; ?></td>
		</tr>
	</table>
	<?php echo $html->link("Back", array("action" => "index"), array('class' => 'btn btn-primary')); ?>
