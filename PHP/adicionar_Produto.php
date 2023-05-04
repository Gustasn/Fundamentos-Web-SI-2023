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

        $sqlproduto = "INSERT INTO Produto (nomeProduto, PesoProduto, PrecoProduto)
        VALUES ('Notebook', '1.0', '3.658');";

        $sqlproduto .= "INSERT INTO Produto (nomeProduto, PesoProduto, PrecoProduto)
        VALUES ('Tablet', '0.5', '1.500');";

if (mysqli_multi_query($conn, $sqlproduto)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sqlproduto . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>