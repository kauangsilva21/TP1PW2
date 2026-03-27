<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cálculo de Salário Líquido</title>
</head>
<body>
    <form method="post" action="result.php">
  <h2>Cálculo de Salário Líquido (INSS)</h2>
    <label>Nome do Funcionário:</label><br>
    <input type="text" name="funcionario" required><br><br>
    
    <label>Salário Bruto (R$):</label><br>
    <input type="number" step="0.01" name="salario_bruto" required><br><br>
    
    <input type="submit" value="Calcular Salário Líquido">
  </form>
</body>
</html>