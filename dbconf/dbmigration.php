<?php

/*
 ************************************************************************
 *
 * Tables Migration for Orders script
 *
 * By Si-HaMaDa
 *
 * just include it one time in dbconf.php file with following line
 * include 'dbmigration.php';
 * and open the site page one time then remove the include line
 *
 ************************************************************************
*/


$capsule::schema()->dropIfExists('users');
$capsule::schema()->create('users', function($table)
{
   $table->increments('id');
   $table->string('name');
   $table->string('email')->unique();
   $table->string('pass');
   $table->string('lvl');
   $table->integer('phone');
   $table->string('country');
   $table->string('city');
   $table->timestamps();
});


$capsule::schema()->dropIfExists('products');
$capsule::schema()->create('products', function($table)
{
   $table->increments('id');
   $table->string('name');
   $table->string('img');
   $table->longText('desc');
   $table->integer('price');
   $table->string('statu');
   $table->integer('num');
   $table->timestamps();
});


$capsule::schema()->dropIfExists('orders');
$capsule::schema()->create('orders', function($table)
{
   $table->increments('id');
   $table->integer('user');
   $table->integer('product');
   $table->integer('num');
   $table->text('notes');
   $table->timestamps();
});


$capsule::schema()->dropIfExists('outProducts');
$capsule::schema()->create('outProducts', function($table)
{
   $table->increments('id');
   $table->string('name');
   $table->string('img');
   $table->longText('desc');
   $table->integer('price');
   $table->string('statu');
   $table->integer('num');
   $table->timestamps();
});


$capsule::schema()->dropIfExists('callUs');
$capsule::schema()->create('callUs', function($table)
{
   $table->increments('id');
   $table->string('name');
   $table->string('email');
   $table->string('phone');
   $table->longText('desc');
   $table->string('country');
   $table->integer('city');
   $table->timestamps();
});


$capsule::schema()->dropIfExists('aboutUs');
$capsule::schema()->create('aboutUs', function($table)
{
   $table->increments('id');
   $table->string('name');
   $table->text('head');
   $table->string('phones');
   $table->string('worktime');
   $table->longText('desc');
   $table->timestamps();
});