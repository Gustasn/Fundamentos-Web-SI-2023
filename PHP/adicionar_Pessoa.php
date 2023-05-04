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

        $sql = "INSERT INTO Pessoa (CPF, nomePessoa, IdadePessoa)
        VALUES ('123.415.698-10', 'Gustavo', '20');";

        $sql .= "INSERT INTO Pessoa (CPF, nomePessoa, IdadePessoa)
        VALUES ('123.456.789-80', 'Lucas', '21');";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>