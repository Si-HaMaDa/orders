<?php
include "header.php";

include "side.php";

use classes\Cat\Cat as cat;

$cat = new cat();

if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {

	$cat->deleteee((int)($_GET['delete']));

} elseif (isset($_GET['view']) && is_numeric($_GET['view'])) {

	$cat->getOneData((int)($_GET['view']));

	include 'temps/catViewTemp.php';

} elseif (isset($_GET['edit']) && is_numeric($_GET['edit'])) {

	if (isset($_POST['edit'])) {
		if ( !$cat->updateee((int)($_GET['edit'])) ){
			$cat->postData();
		}
	} else {
		$cat->getOneData((int)($_GET['edit']));
	}
	include 'temps/catEditTemp.php';

} elseif ( isset($_GET['new']) ) {

	if (isset($_POST['new'])) {
		if ( !$cat->saveData() ){
			$cat->postData();
		}
	}

	include 'temps/catNewTemp.php';

} else {

	$cat->getData();

	include 'temps/catsTemp.php';

}


include "footer.php";
?>