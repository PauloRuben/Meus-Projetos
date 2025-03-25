<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "exercicios";
 $port = "3381";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if($conn->connect_error){
    die("Connect failed: ".$conn->connect_error);
}
$nome = $_POST['nome'];
$email = $_POST['email'];
$sql = "INSERT INTO usuarios(nome,email) VALUES ('$nome','$email')";

if($conn->query($sql) === TRUE){
    echo "Novo registro criado com sucesso<br>
    <button><a href ='index.html'>Voltar</a></button>
    <button><a href ='conexao.php'>Verificar</a></button>";
} else {
    echo "Erro: ".$sql."<br>".$conn->error;
}
$conn->close();
?>