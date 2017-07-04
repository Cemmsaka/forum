<?php
/* Database connection settings */
$host = 'localhost' ;
$user = 'cem';
$pass = 'cem';
$db = 'accounts';
$mysqli = new mysqli ($host, $user, $pass, $db) or die($mysqli->error);
