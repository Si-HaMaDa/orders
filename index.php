<?php

require 'header-1.php';

use classes\user\User as user;
// use classes\call\Call as user;
// use classes\outProduct\OutProduct as user;
// use classes\Product\Product as user;
// use classes\Info\Info as user;
// use classes\Order\Order as user;


$users = new user();
// $users->name = 'HaMaDa';
// $users->save();

echo "<pre>";

dd($users->all());


echo "</pre>";



require 'footer.php';
