<?php
$reais= $_POST['valorreais'];
$euros= 5.41;
$dolares= 4.97;
$libras= 6.33;

$euro= $reais * $euros;
$dolar= $reais * $dolares;
$libra= $reais * $libras;

echo "euro " . $euro . "dolar " . $dolar . "libra " . $libra;
?>
