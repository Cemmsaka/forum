<?php

print_r(PDO::getAvailableDrivers());

$dbHost = "localhost";
$database = "2";
$user = "Cem";
$wachtwoord = "kurwa123";

try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$database", $user, $wachtwoord);
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "<br>Verbinding is gemaakt<br>";
} catch (PDOException $e) {
    $message = $e ->getMessage();
    echo "<br>$message<br>";
}
// $query = "INSERT INTO testusers (user,wachtwoord) VALUES ( ? , ? );";
//
// $insert = $conn ->prepare($query);
//
// $data = array("cem","cem");
//
// try {
//   $insert ->execute($data);
// echo "gebruiker aangemaakt";
// } catch (PDOException $e) {
//   echo $e->getMessage();
//   echo "gebruiker niet aangemaakt";
$query = "SELECT * FROM testusers WHERE USER= :user";

$data = "Cem";

$SELECT = $conn->prepare($query);
// bindparameter moet by reference dus via variable
//alternatief is $select->bindValue("user", "testuser", PDO::PARAM_STR);
try {
  $SELECT->bindParam(":user", $data, PDO::PARAM_STR);
  $SELECT->execute();
  $result = $SELECT->fetchAll();
// resultaat naar t scherm printen
echo "id \t user \t wachtwoord";
foreach ($result as $item) {
  echo "<li>{$item["id"]} {$item["user"]} {$item["wachtwoord"]} </li>";
}

}catch(PDOException $e){

}
?>
