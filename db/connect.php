<?php
  //function connection() {

      // $servername = "localhost";
      // $username   = "root";
      // $password   = "";
      // $dbname     = "oingyrsuk1jbsiga";

      try {
        //$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn = new PDO(JAWSDB_URL);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
 // }
?>