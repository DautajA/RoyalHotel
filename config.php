
<?php
// Informacione për lidhjen me bazën e të dhënave
$servername = "localhost"; // Emri i serverit MySQL
$username = "root"; // Emri i përdoruesit për lidhjen me bazën e të dhënave
$password = ""; // Fjalëkalimi për lidhjen me bazën e të dhënave
$dbname = "royalhotel"; // Emri i bazës së të dhënave

// Lidhja me bazën e të dhënave
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrolloni lidhjen
   // Kontrollo lidhjen
   if ($conn->connect_error) {
      die("Lidhja dështoi: " . $conn->connect_error);
  }
?>