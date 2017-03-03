<?php

require 'header-1.php';

use classes\Info\Info as info;

$info = new info();

$info->getData();

?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Companey name</h3>
  </div>
  <div class="panel-body">
    <?php echo $info->data['name']; ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Companey places</h3>
  </div>
  <div class="panel-body">
    <?php echo $info->data['head']; ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Companey Phones</h3>
  </div>
  <div class="panel-body">
    <?php echo $info->data['phones']; ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Companey Work times</h3>
  </div>
  <div class="panel-body">
    <?php echo $info->data['worktime']; ?>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">About the Companey</h3>
  </div>
  <div class="panel-body">
    <?php echo $info->data['desc']; ?>
  </div>
</div>



<?php
require 'footer.php';
?>