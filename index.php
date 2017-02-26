<?php

require 'header-1.php';

use classes\users\users as Users;


$users = new Users();
// $users->name = 'HaMaDa';
// $users->save();

echo "<pre>";

dd($users->all());


echo "</pre>";



require 'footer.php';
