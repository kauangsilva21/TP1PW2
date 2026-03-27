<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['funcionario'];
    $bruto = $_POST['salario_bruto'];
    
   
    $salario_minimo = 1582.00;
    $limite_dois_minimos = $salario_minimo * 2;

   
    if ($bruto <= $limite_dois_minimos) {
        $porcentagem = 8;
    } else {
        $porcentagem = 10;
    }

    $valor_desconto = $bruto * ($porcentagem / 100);
    $salario_liquido = $bruto - $valor_desconto;

    echo "<h2>Holerite Digital</h2>";
    echo "Funcionário: <strong>$nome</strong><br>";
    echo "Salário Bruto: R$ " . number_format($bruto, 2, ',', '.') . "<br>";
    echo "Alíquota aplicada: $porcentagem%<br>";
    echo "Desconto INSS: R$ " . number_format($valor_desconto, 2, ',', '.') . "<br>";
    echo "<hr>";
    echo "<strong>Salário Líquido: R$ " . number_format($salario_liquido, 2, ',', '.') . "</strong>";
}
?>