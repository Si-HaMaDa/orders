<?php
include "header.php";

include "side.php";

use classes\Order\Order as order;
use classes\User\User as user;
use classes\Product\Product as product;

$order   = new order();
$user    = new user();
$product = new product();

if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {

	$order->deleteee((int)($_GET['delete']));

} elseif (isset($_GET['view']) && is_numeric($_GET['view'])) {

	$order->getOneData((int)($_GET['view']));
	$user = $user->find($order->data['user_id']);
	$product = $product->find($order->data['product_id']);

	include 'temps/orderTemp.php';

} elseif (isset($_GET['edit']) && is_numeric($_GET['edit'])) {

	if (isset($_POST['edit'])) {
		if ( !$order->updateee((int)($_GET['edit'])) ){
			$order->postData();
		}
	} else {
		$order->getOneData((int)($_GET['edit']));
	}
	include 'temps/orderEditTemp.php';

} else {

	$order->getData();

	include 'temps/ordersTemp.php';

}


include "footer.php";
?>