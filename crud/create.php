<?php
  include '../db/connect.php';
  $conn = connection();

  $servername = "ik1eybdutgxsm0lo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $username   = "co8f00xb6adb62fj";
  $password   = "xaaty6r4puyceze4";
  $dbname     = "oingyrsuk1jbsiga";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO users (name, email, password)
  VALUES (:name, :email, :password)");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);

  // insert a row
  $name     = "José";
  $email    = "jose@example.com";
  $password = "123";
  $stmt->execute();

  // insert another row
  $name     = "Maria";
  $email    = "maria@example.com";
  $password = "123";
  $stmt->execute();

  // insert another row
  $name     = "Antonio da Silva";
  $email    = "toinho@example.com";
  $password = "123";
  $stmt->execute();

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>