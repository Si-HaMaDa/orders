<?php

require 'header-1.php';

use classes\OutProduct\OutProduct as outproduct;

$outproduct = new outproduct();

$outproduct->getData();
?>

<?php
foreach ($outproduct->data as $key => $value) {
?>

<div class="col-xs-12 col-lg-6">
  <h2><?=$value['name']?></h2>
  <img class="img-responsive img-thumbnail" src="<?=$value['img']?>">
  <p><?=$value['desc']?></p>
  <p>Price at: <?=$value['price']?></p>
  <p>With Category: <?=$outproduct->getCatName($value['cat_id'])->name?></p>
</div><!--/.col-xs-6.col-lg-4-->

<?php
}


require 'footer.php';
?>