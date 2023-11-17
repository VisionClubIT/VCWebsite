<?php
$connection = [
    'host' => 'srv781.hstgr.io',
    'user'=> 'u359487913_VC2030',
        'password'=> 'Vision2030Club',
    'database' => 'u359487913_VC2030'
];


$con = new mysqli(
    $connection['host'],
    $connection['user'],
      $connection['password'],
    $connection['database']);

if($con->connect_error){
    die('Error connecting to database  ' . $con->connect_error);
}


