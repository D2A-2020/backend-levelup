<?php
 header('Access-Control-Allow-Origin: *');
 header('content-type: application/json; charset=utf-8');

 require "connection/connection.php";

 $con = new Connection();
 $con->getConnection();

$some = array('juan' => 1, 'brian' => 2);


echo json_encode($some);


?>