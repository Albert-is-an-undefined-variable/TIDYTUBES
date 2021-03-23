<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();
$samplename = $celltype = $idfreezer = $rack = $position = $amount = $frozendate = $availability = '';
$errors_registration = array('username' => '', 'email' => '', 'password_1' => '', 'password_2' => '');
// connect to the database
$db = mysqli_connect('localhost', 'albert', '/Puiyuaru1616', 'mydb');


?>
