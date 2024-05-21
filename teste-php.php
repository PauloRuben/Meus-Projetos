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