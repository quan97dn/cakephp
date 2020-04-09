<?php
  if($data == NULL) {
    echo "<h2>Dada Empty</h2>";
  }
  else {
?>
    <h2><?php echo $title_for_layout; ?></h2>
    <hr>
    <table class="table table-hover" >
        <thead>
            <tr>
              <td>Id</td>
              <td>Name</td>
            </tr>
        </thead>
        <tbody>
        <?php 
          foreach($data as $item) { ?>
                <tr>
                   <td><?php echo $item['Ploai']['id']; ?></td>
                   <td><?php echo $html->link($item['Ploai']['c_name'], array("action" => "view", $item['Ploai']['id'])); ?></td>
                   <td>
                      <?php echo $html->link("Edit", array("action" => "edit", $item['Ploai']['id']), array('class' => 'btn btn-primary')); ?> |
                      <?php echo $html->link("Delete", array("action" => "delete", $item['Ploai']['id']), array('class' => 'btn btn-danger'), 'Are you sure ?'); ?>
                   </td>
                </tr>          
        <?php } ?>
                <tr>
                    <td colspan="5" style="text-align: right;font-weight: bold;" ><?php echo "Count : ". $count; ?></td>
                </tr>
        </tbody>
  <?php } ?> 
    </table>
    <?php echo $html->link('Add', array('controller' => 'ploais', 'action' => 'add'), array('class' => 'btn btn-info')); ?>

