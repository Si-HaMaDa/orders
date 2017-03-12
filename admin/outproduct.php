<?php
include "header.php";

include "side.php";

use classes\OutProduct\OutProduct as outproduct;

$outproduct = new outproduct();

if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {

	$outproduct->deleteee((int)($_GET['delete']));

} elseif (isset($_GET['view']) && is_numeric($_GET['view'])) {

	$outproduct->getOneData((int)($_GET['view']));

	include 'temps/outproductViewTemp.php';

} elseif (isset($_GET['edit']) && is_numeric($_GET['edit'])) {

	if (isset($_POST['edit'])) {
		if ( !$outproduct->updateee((int)($_GET['edit'])) ){
			$outproduct->postData();
		}
	} else {
		$outproduct->getOneData((int)($_GET['edit']));
	}
	include 'temps/outproductEditTemp.php';

} else {

	if (isset($_POST['new'])) {
		if ( !$outproduct->saveData() ){
			$outproduct->postData();
		}
	}

	include 'temps/outproductNewTemp.php';

}


include "footer.php";
?>