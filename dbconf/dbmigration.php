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
   $table->string('lvl')->nullable();
   $table->integer('phone');
   $table->string('country')->nullable();
   $table->string('city')->nullable();
   $table->timestamps();
});


$capsule::schema()->dropIfExists('products');
$capsule::schema()->create('products', function($table)
{
   $table->increments('id');
   $table->string('name');
   $table->string('img');
   $table->longText('desc')->nullable();
   $table->integer('price');
   $table->string('statu')->nullable();
   $table->integer('num')->nullable();
   $table->timestamps();
});


$capsule::schema()->dropIfExists('orders');
$capsule::schema()->create('orders', function($table)
{
   $table->increments('id');
   $table->integer('user_id');
   $table->integer('product_id');
   $table->integer('num');
   $table->text('notes')->nullable();
   $table->timestamps();
});


$capsule::schema()->dropIfExists('out_products');
$capsule::schema()->create('out_products', function($table)
{
   $table->increments('id');
   $table->string('name');
   $table->string('img');
   $table->longText('desc')->nullable();
   $table->integer('price')->nullable();
   $table->string('statu')->nullable();
   $table->integer('num')->nullable();
   $table->timestamps();
});


$capsule::schema()->dropIfExists('calls');
$capsule::schema()->create('calls', function($table)
{
   $table->increments('id');
   $table->string('name');
   $table->string('email');
   $table->string('phone');
   $table->longText('desc')->nullable();
   $table->string('country')->nullable();
   $table->integer('city')->nullable();
   $table->timestamps();
});


$capsule::schema()->dropIfExists('infos');
$capsule::schema()->create('infos', function($table)
{
   $table->increments('id');
   $table->string('name');
   $table->text('head')->nullable();
   $table->string('phones')->nullable();
   $table->string('worktime')->nullable();
   $table->longText('desc')->nullable();
   $table->timestamps();
});