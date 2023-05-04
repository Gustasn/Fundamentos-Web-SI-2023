<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "fundamentosweb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE Pessoa SET nomePessoa='Wandrel' WHERE IdadePessoa=20";
$sql2 = "UPDATE Pessoa SET nomePessoa='Pedro' WHERE IdadePessoa=21";
$sql3 = "UPDATE Produto SET nomeProduto='MacBook' WHERE nomeProduto='Notebook'";
$sql4 = "UPDATE Produto SET nomeProduto='Smartphone' WHERE nomeProduto='Tablet'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
}if (mysqli_query($conn, $sql2)) {}
if (mysqli_query($conn, $sql3)) {}
if (mysqli_query($conn, $sql4)) {}
 else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>