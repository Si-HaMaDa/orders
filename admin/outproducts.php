<?php
include "header.php";

include "side.php";

use classes\OutProduct\OutProduct as outproduct;

$outproduct = new outproduct();

$outproduct->getData();

include 'temps/outproductsTemp.php';


include "footer.php";
?>