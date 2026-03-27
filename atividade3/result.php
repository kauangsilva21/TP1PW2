<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $reais = str_replace(',', '.', $_POST['valor_reais']);

    if (is_numeric($reais) && $reais > 0) {
       
        $cotacao_dolar = 4.97;
        $cotacao_euro = 5.41;
        $cotacao_libra = 6.33;

       
        $dolar = $reais / $cotacao_dolar;
        $euro = $reais / $cotacao_euro;
        $libra = $reais / $cotacao_libra;

        echo "<h2>Resultado da Conversão</h2>";
        echo "Valor original: <strong>R$ " . number_format($reais, 2, ',', '.') . "</strong><br><hr>";
        
        echo "Dólar (USD): $ " . number_format($dolar, 2, '.', ',') . "<br>";
        echo "Euro (EUR): € " . number_format($euro, 2, ',', '.') . "<br>";
        echo "Libra (GBP): £ " . number_format($libra, 2, ',', '.') . "<br>";
        
        echo "<br><small>*Cotações baseadas no fechamento de 20/03.</small>";
    } else {
        echo "Por favor, coloque um valor numérico válido.";
    }
}
?>