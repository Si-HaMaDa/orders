<?php
include "header.php";

include "side.php";

use classes\Call\Call as call;

$call = new call();

if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {

	$call->deleteee((int)($_GET['delete']));

} elseif (isset($_GET['view']) && is_numeric($_GET['view'])) {

	$call->getOneData((int)($_GET['view']));

	include 'temps/messageTemp.php';

} else {

	$call->getData();

	include 'temps/messagesTemp.php';

}


include "footer.php";
?>