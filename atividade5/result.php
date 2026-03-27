<?php
$salariobruto= $_POST['Salario_Bruto'];
$salariominimo= 3242;

$abaixo2minimo= $salariobruto - ( $salariobruto * 8 / 100;
$acima2minimo= $salariobruto - ( $salariobruto * 10 / 100;

if ($salariobruto >= $salariominimo){
  echo "salario: " . $$abaixo2minimo;
}
else if ($salariobruto < $salariominimo){
  echo "salario: " . $acima2minimo;
}

?>
