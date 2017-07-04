<?php

class mydatabase{

  private static $conn;
  private static $servername = "localhost";
  private static $databasename = "accounts";
  private static $username = "root";
  private static $password = "secret";

  public  function __construct(){
    try{
      $sn = mydatabase::$servername;
      $dn = mydatabase::$databasename;

      mydatabase::$conn = new PDO("mysql:host={$sn};dbname={$dn}",mydatabase::$username);
      mydatabase::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      echo $e->getMessage();
    }
  }

  public static function execute($query,$return = true){
    $holder = mydatabase::$conn->prepare($query);
    $holder->execute();
    if($return){
      return $holder->fetchAll();
    }
  }

}
// include path_to_database
// new databas
// mydatabase::execute("select * from user");
