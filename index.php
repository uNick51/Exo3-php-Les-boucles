<!DOCTYPE HTML>
<html>
<head>
<title>Exemple</title>
</head>
<body>

<?php

// ---------------Exercie1-------------------
$a = 0;
while ($a <= 10) {
  echo "$a";
  $a++;
}

// ---------------Exercie2-------------------
$a = 0;
$b = 7;
while ($a < 20) {
  echo $a*$b;
  $a++;
}

// ---------------Exercie3-------------------
$a = 100;
$b = 2;
while ($a >= 10) {
  echo $a*$b;
  $a--;
}

// ---------------Exercie4-------------------
$a = 1;
while ($a <= 10) {
  echo " ".$a;
  $a=$a+$a/2;
}

// ---------------Exercie5-------------------
$a = 1;
while ($a <= 15) {
  echo " ".$a." On y arrive presque";
  $a++;
}

// ---------------Exercie6-------------------
$a = 20;
while ($a >= 0) {
  echo " ".$a." C'est presque bon";
  $a--;
}

// ---------------Exercie7-------------------
$a = 1;
while ($a <= 100) {
  echo " ".$a." On tient le bon bout";
  $a=$a+15;
}

// ---------------Exercie8-------------------
$a = 200;
while ($a >= 0) {
  echo " ".$a." Enfin !!!!";
  $a=$a-12;
}
?>

</body>
</html>
