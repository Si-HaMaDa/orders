<?php
include "header.php";

include "side.php";

if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {

	$user->deleteee((int)($_GET['delete']));

} elseif (isset($_GET['view']) && is_numeric($_GET['view'])) {

	$user->getOneData((int)($_GET['view']));

	include 'temps/userViewTemp.php';

} elseif (isset($_GET['edit']) && is_numeric($_GET['edit'])) {

	if (isset($_POST['update'])) {
		if ( !$user->updateee((int)($_GET['edit'])) ){
			$user->postData();
		}
	} else {
		$user->getOneData((int)($_GET['edit']));
	}
	include 'temps/userEditTemp.php';

} else {

	if (isset($_POST['new'])) {
		if ( !$user->signup() ){
			$user->postData();
		}
	}

	include 'temps/userNewTemp.php';

}


include "footer.php";
?>