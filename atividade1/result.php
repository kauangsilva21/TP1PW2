<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    if (!empty($peso) && !empty($altura)) {
        
   
        $peso = str_replace(',', '.', $peso);
        $altura = str_replace(',', '.', $altura);

  
        $imc = $peso / ($altura * $altura);

        echo "<h2>Resultado do Cálculo</h2>";
        echo "Peso informado: " . $peso . "kg<br>";
        echo "Altura informada: " . $altura . "m<br>";
        echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . "<br>";

   
        if ($imc < 18.5) {
            echo "Status: Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            echo "Status: Peso ideal (parabéns!)";
        } elseif ($imc >= 25 && $imc <= 29.9) {
            echo "Status: Levemente acima do peso";
        } else {
            echo "Status: Obesidade";
        }
    } else {
        echo "Por favor, preencha todos os campos!";
    }
}
?>