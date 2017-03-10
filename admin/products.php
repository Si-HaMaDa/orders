<?php
include "header.php";

include "side.php";

use classes\Product\Product as product;

$product = new product();

$product->getData();

include 'temps/productsTemp.php';


include "footer.php";
?>