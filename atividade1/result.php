<?php
$peso= $_POST['peso'];
$altura= $_POST['altura'];
$imc= $peso / ($altura * $altura);

if ($imc >=18.5){
    echo "voce esta magro " . $imc;
}
else if ($imc <= 18.6 and $imc >=24.9){
    echo "voce esta bem";
}
else if ($imc <= 25){
    echo "voce esta gordo";
}

?>
