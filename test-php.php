<?php
define("INFERIOR",1);
define("SUPERIOR",100);

$numero = rand(INFERIOR, SUPERIOR);
echo "Meu numero da sorte: <br>";
echo $numero."<br>";
?>
<?php
$x = 5; //Ambito global

function meuTeste () {
    echo "<p>A variavel x dentro da função é: $x</p><br>";
    }
    //Ambito local
         meuTeste ();
    echo "<p>A variavel x dentro da função é: $x</p><br>";
   
?>

<?php
$x = 5;
$y = 10;
function numero(){
    global $x, $y;
    $y= $x + $y;
    }
numero();
echo $y;
?>

<?php
//ambito estatico
function teste(){
        static $x = 0;
        echo $x;
        $x++;
    }
echo "<br>";
echo "<br>";
teste();
echo "<br>";
teste();
echo "<br>";
teste();

?>
<?php
echo "<br>Geovane da Costa";
print "<br>Geovane da Costa<br><br>";
?>

<?php
$x = 5;
var_dump($x);
echo "<br>";
?>

<?php
$x = 'Minha string';
$y = "Minha string 2!";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
?>

<?php
$x = 3.14;
var_dump($x);
echo "<br>";
?>

<?php
$x = true;
var_dump($x);
echo "<br>";
?>

<?php
$cars =array("BMW","BYD","AUDI");
var_dump($cars);
echo "<br>";
?>

<?php
echo"<br>";
echo strlen("Olá Mundo")

?>
<?php
echo"<br>";
echo str_word_count('Olá Mundo')
?>

<?php
echo "<br>";
echo strpos ("Novo bravo mundo","Iron Maiden")
?>

<?php
$x ="Ola Mundo";
echo strtolower($x);
?>

<?php
$x=" NoVo TesTe";
echo strtolower($x);
?>

<?php
$x="Meu Teste";
echo "<br>";
echo str_replace("Teste", "Arquivo", $x);
?>

<?php
$x="Meu Teste";
echo"<br>";
echo strrev($x);
?>

<?php
$x="Meu Teste";
echo"<br>";
echo trim($x);
?>

<?php
echo"<input value='" . $x . "'>";
echo"<br>";
echo"<input value'" . trim($x) . "'>";
?>

<?php
echo "<br>";
$x="Meu ";
$y="Teste";
$z=$x . $y;
echo"<br>";
echo $z;
?>

<?php
echo"<br>";
$p="Paulo ";
$r="Ruben ";
$m="Meira ";
$a="Prado";
$z=$p . $r . $m. $a ;
echo"<br>";
echo $z;
echo"<br>";
?>

<?php
echo"<br>";
$x="Meu teste";
echo substr($x, 6);
echo"<br>";
?>

<?php
//<--*caracteres de escape*-->
//\' Single Quote
//\" Double Quote
//\$ PHP variables
//\n New line
//\r Carriage Return
//\t Tab
//\f Form Feed
//\ooo Octal value
//\xhh Hex value

$x="Somos os chamados\"Vikings\" do norte";
echo $x;
?>
<?php
$a=5;
$b=5.34;
$c="25";
echo"<br>";
var_dump($a);
echo"<br>";
var_dump($b);
echo"<br>";
var_dump($c);
echo"<br>";
var_dump($y);
?>

<?php
echo"<br>";
//verifique se o tipo de uma 
//variavel e inteiro
echo"<br>";
$x=5985;
var_dump(is_int($x));
echo"<br>";
//verificar novamente
$x=3.14;
var_dump(is_int($x));
echo"<br>";
$x=10.123;
var_dump(is_float($x));
echo"<br>";
$x=1.9e411;
var_dump(is_infinite($x));
?>

<?php
echo"<br>";
$x=25.312;
$a=5213;
$b="Meu Teste";
$c=41.2e303;
echo"<br>";
var_dump(is_string($x));
echo"<br>";
var_dump(is_string($a));
echo"<br>";
var_dump(is_string($b));
echo"<br>";
var_dump(is_string($c));
echo"<br>";
?>

<?php
//Converter float para inteiro
echo"<br>";
$x=120450.75;
$int_cast=(int)$x;
echo $int_cast;
echo "<br>";
echo "<br>";
?>

<?PHP
$valor = 20;
if ($valor == 15){ //testa se $valor é igual a 15
    echo "<br> Valor é 15";
}
elseif ($valor >= 10){
    echo "Valor é maior ou igual a 10";
 }    
else {
    echo "Valor é menor que 10";
   
}
?>

<?PHP
echo"<br>";
if ($valor === "10"){
	echo"Valor é string";
}
else{
	echo"Valor não e string";
}
echo"<br><br>";
echo"Agora, fazendo cast no valor atribuido a variavel:<br><br>";
$valor = (string)10;
if ($valor === "10"){
	echo"Valor não é string<br>";
}
else{
	echo"Valor não é string <br>";
}
?>
<?PHP
$a = 10;
$b = 20;
echo ($a == 10) && ($b == 20);
echo "<br>";
if (($a == 10) && ($b == 20)){
	echo"Ambos os valores são corretos <br><br>";
}
if (($a == 10) && ($b == 20)){
	echo"Um dos valores está correto <br><br>";
}
if (($a == 10) && ($b == 20)){
	echo"Um dos valores está errado <br><br>";
}
?>
<?PHP
$a = 3 + 5 * 4;
$b = (3 + 5) * 4;
echo"<br>";
if($a == 3 + 5 * 4){
	echo"O valor é igual 23 <br><br>";
}

if($b == (3 + 5 ) * 4){
	echo"O valor é igual 32<br><br>";
}
?>

<?PHP
$a = 10;
$b = 9; 
$c = 5;
$resultado = ($a+$b+$c)/3;
echo"a média é : $resultado <br><br>";
if($resultado >= 7 ){
	echo" Você foi aprovado <br><br>";
}
else{
	echo"Você não foi aprovado <br><br>";
}						
?>

<?PHP
$nota1 = 0;
$nota2 = 0; 
$nota3= 0;
$nota4 = 0;
$resultado = ($nota1 + $nota2 + $nota3 + $nota4)/4;
echo"a média do aluno é : $resultado <br>";
if($resultado >= 7 ){
	echo" Aluno foi aprovado <br> ";
}
else{
	echo"Você não foi aprovado <br>";
}	
if($resultado === 10){
	echo"Parabéns!Aluno com nota máxima.<br><br>";
}
if($resultado === 0){
	echo"Estude mais.<br><br>";
}	
?>

<?PHP
$num = 30;
if($num >= 20 ){
	echo"Número e maior ou igual 20 <br><br>";
}
else{
	echo"É menor que 20<br><br>";
}
?>
