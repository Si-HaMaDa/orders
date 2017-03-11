<?php

require 'header-1.php';

use classes\Product\Product as product;

$product = new product();

$product->getData();
?>

<?php
foreach ($product->data as $key => $value) {
?>

<div class="col-xs-12 col-lg-6">
  <h2><?=$value['name']?></h2>
  <img class="img-responsive" src="<?=$value['img']?>">
  <p><?=$value['desc']?></p>
  <p><a class="btn btn-default" href="product.php?view=<?=$value['id']?>" role="button">View details &raquo;</a></p>
</div><!--/.col-xs-6.col-lg-4-->

<?php
}


require 'footer.php';
?>