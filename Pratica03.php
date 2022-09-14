<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 03</title>
</head>
<body>

<h1>Ejercicio 1</h1>    
<?php
   $_myvar;  //valida
   $_7var;  //valid
   //myvar;   no valida
   $myvar; 
   $var7; 
   $_element1; 
   //$house*5;  no valida
?>

<h1>Ejercicio 2</h1>

<?php
$a = "ManejadorSQL";
$b = 'MySQL';
$c = &$a;
echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';

$a = "PHP server";
$b = &$a;
echo $a.'<br>';
echo $b.'<br>';

?>

<h1>Ejercicio 3</h1>

<?php
$a = "PHP5";
echo $a.'<br>';
$z[] = &$a;
print_r($z).'<br>';
$b = '5a version de PHP';
echo $b.'<br>';
$c = (int)$b*10;
echo $c.'<br>';
$a .= $b;
echo $a.'<br>';
$b *= $c;
echo $b.'<br>';
$z[0] = "MySQL";
print_r($z).'<br>';
?>


<h1>Ejercicio 4</h1>

<?php
$a = "PHP5";
echo $GLOBALS['a'] . "<br>";
$z[] = &$a;
print_r ($GLOBALS['z']);
echo "<br>";
$b = "5a version de PHP";
echo $b.$GLOBALS['b'] . "<br>";
$c = (int)$b*10;
echo $c.$GLOBALS['c'] . "<br>";
$a .= $b;
$GLOBALS['a'] . "<br>";
$b *= $c;
echo $a.$GLOBALS['b'] . "<br>";
$z[0] = "MySQL";
$GLOBALS['z']."<br>";
?>


<h1>Ejercicio 5</h1>
<?php
$a = "7 personas";
echo $a.'<br>';
$b = (integer) $a;
echo $b.'<br>';
$a = "9E3";
echo $a.'<br>';
$c = (double) $a;
echo $c.'<br>';

?>


<h1>Ejercicio 6</h1>
<?php
$a = "7 personas";
var_dump('a');
$b = (integer) $a;
var_dump('b');
$a = "9E3";
var_dump('c');
$c = (double) $a;
var_dump('a');




?>

</body>
</html>