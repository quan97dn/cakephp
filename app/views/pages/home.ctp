<h2>Home</h2>
<hr/>
<?php
	echo  $html->link('Books', array('controller' => 'books', 'action' => 'index'), array('class' => 'btn btn-info', 'style' => 'margin-right:2%;'));
	echo  $html->link('Clfys', array('controller' => 'ploais', 'action' => 'index'), array('class' => 'btn btn-info'));
 ?>