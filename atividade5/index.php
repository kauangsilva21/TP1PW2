<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Calculo de Salario Liquido</title>
</head>
<body>
    <form method="post" action="result.php">
  <h2>Calculo de Salario Liquido (INSS)</h2>
    <label>Nome do Funcionario:</label>
    <input type="text" name="funcionario">
    
    <label>Salario Bruto (R$):</label>
    <input type="number" step="0.01" name="salario_bruto">
    
    <input type="submit" value="Calcular Salario Liquido">
  </form>
</body>
</html>
