<?php
include "header.php";

include "side.php";

use classes\Product\Product as product;

$product = new product();

if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {

	$product->deleteee((int)($_GET['delete']));

} elseif (isset($_GET['view']) && is_numeric($_GET['view'])) {

	$product->getOneData((int)($_GET['view']));

	include 'temps/productViewTemp.php';

} elseif (isset($_GET['edit']) && is_numeric($_GET['edit'])) {

	if (isset($_POST['edit'])) {
		if ( !$product->updateee((int)($_GET['edit'])) ){
			$product->postData();
		}
	} else {
		$product->getOneData((int)($_GET['edit']));
	}
	include 'temps/productEditTemp.php';

} else {

	if (isset($_POST['new'])) {
		if ( !$product->saveData() ){
			$product->postData();
		}
	}

	include 'temps/productNewTemp.php';

}


include "footer.php";
?>