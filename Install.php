<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 06.02.2016
 * Time: 22:52
 */
$dbserver='192.168.0.100';
$userserver='moderator';
$passuserserver='123456';
$sqldb='Catalo';

$connection=new PDO("mysql:host=$dbserver;dbname=$sqldb",$userserver, $passuserserver);

//$create='create database Catalog';
$user1='create table IF NOT EXISTS user1 (id INTEGER AUTO_INCREMENT, login VARCHAR(20), password VARCHAR(20), PRIMARY KEY (id));';
$categories1='create table IF NOT EXISTS categories1 (id INTEGER AUTO_INCREMENT, name VARCHAR(10), PRIMARY KEY (id));';
$goods='create table IF NOT EXISTS goods (id INTEGER AUTO_INCREMENT, name VARCHAR(20), description VARCHAR(20), category_id INTEGER,
PRIMARY KEY (id), FOREIGN KEY (category_id) REFERENCES categories1 (id));';
//
//
//$connection->exec($create);
$connection->exec($user1);
//print_r($connection->errorInfo());

$connection->exec($categories1);
//print_r($connection->errorInfo());

$connection->exec($goods);
//print_r($connection->errorInfo());

$id="";
$login="";
$password="";
$pastedata1='insert into user1 values("'.$id.'","'.$login.'","'.$password.'")';
$connection->query($pastedata1);

$id2="";
$name="";
$pastedata2='insert into categories1 values("'.$id2.'","'.$name.'")';
$connection->query($pastedata2);

$id3="";
$name2="";
$description="";
$category_id="";
$pastedata3='insert into goods values("'.$id3.'","'.$name2.'","'.$description.'","'.$category_id.'")';
$connection->query($pastedata3);
?>