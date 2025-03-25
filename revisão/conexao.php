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

$sql = "SELECT id, nome, email FROM  usuarios";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row =$result->fetch_assoc()){
    echo "id: ".$row["id"]."Nome: ".$row["nome"]."E-mail: ".$row["email"]."<br>";
    }
} 
else{
    echo "Não há dados";
}
?>