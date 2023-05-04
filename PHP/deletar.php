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

// sql to delete a record
$sql = "DELETE FROM Pessoa WHERE nomePessoa = 'Gustavo' ";
$sql2 = "DELETE FROM Pessoa WHERE nomePessoa = 'Lucas' ";
$sql3 = "DELETE FROM Produto WHERE nomeProduto = 'Notebook' ";
$sql4 = "DELETE FROM Produto WHERE nomeProduto = 'Tablet' ";
$sql5 = "DELETE FROM Pessoa WHERE nomePessoa = 'Wandrel' ";
$sql6 = "DELETE FROM Pessoa WHERE nomePessoa = 'Pedro' ";
$sql7 = "DELETE FROM Produto WHERE nomeProduto = 'MacBook' ";
$sql8 = "DELETE FROM Produto WHERE nomeProduto = 'Smartphone' ";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} if (mysqli_query($conn, $sql2)) {}
if (mysqli_query($conn, $sql3)) {}
if (mysqli_query($conn, $sql4)) {}
if (mysqli_query($conn, $sql5)) {}
if (mysqli_query($conn, $sql6)) {}
if (mysqli_query($conn, $sql7)) {}
if (mysqli_query($conn, $sql8)) {}
else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>