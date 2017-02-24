<?php

require 'start.php';

// use Illuminate\Database\Capsule\Manager as Eloquent;

use classes\users\users as Users;


$users = new Users();
// $users->name = 'HaMaDa';
// $users->save();

echo "<pre>";

dd($users->all());


echo "</pre>";




require 'end.php';
