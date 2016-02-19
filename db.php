<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 08.02.2016
 * Time: 18:38
 */

function conn_db()
{
    $dbserver = '192.168.0.100';
    $userserver = 'moderator';
    $passuserserver = '123456';
    $sqldb = 'Catalo';
    $connection = new PDO("mysql:host=$dbserver;dbname=$sqldb", $userserver, $passuserserver);
    return $connection;
}