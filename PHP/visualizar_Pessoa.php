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

// $sql = "SELECT idProduto, nomeProduto, PesoProduto, PrecoProduto FROM Produto";
$sql = "SELECT CPF, nomePessoa, IdadePessoa FROM Pessoa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["idProduto"]. " - Nome Produto: " . $row["nomeProduto"]. " Peso: " . $row["PesoProduto"]. " Preço: " . $row["PrecoProduto"]. "<br>";
    echo "CPF: " . $row["CPF"]. " - Nome: " . $row["nomePessoa"]. " Idade: " . $row["IdadePessoa"]. "<br>";
  }
} else {
  echo "0 results of Pessoa" . "<br>";
}

$sqlproduto = "SELECT idProduto, nomeProduto, PesoProduto, PrecoProduto FROM Produto";
$resultado = mysqli_query($conn, $sqlproduto);

if (mysqli_num_rows($resultado) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($resultado)) {
    echo "id: " . $row["idProduto"]. " - Nome Produto: " . $row["nomeProduto"]. " Peso: " . $row["PesoProduto"]. " Preço: " . $row["PrecoProduto"]. "<br>";
    // echo "CPF: " . $row["CPF"]. " - Nome: " . $row["nomePessoa"]. " Idade: " . $row["IdadePessoa"]. "<br>";
  }
} else {
  echo "0 results of Produto";
}

mysqli_close($conn);
?>