<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicios";
$port = 3381;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connetion failed: ". $conn->connect_error);
}

$id = $_POST['id'];

$sql = "DELETE FROM usuarios WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro excluido com sucesso <br> <button><a href='index.html'>Votlar</a></button>";
} 

$conn->close();
?>


