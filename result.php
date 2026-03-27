<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $sobrenome = trim($_POST['sobrenome']);
    if (!empty($nome) && !empty($sobrenome)) { 
        $primeiro_nome = explode(" ", $nome)[0]; 
        $partes_sobrenome = explode(" ", $sobrenome);
        $ultimo_sobrenome = end($partes_sobrenome);
        $email_prefixo = strtolower($primeiro_nome . "." . $ultimo_sobrenome);
        $email_final = $email_prefixo . "@cps.sp.gov.br";
        echo "<h2>E-mail Gerado com Sucesso!</h2>";
        echo "Usuário: <strong>$nome $sobrenome</strong><br>";
        echo "E-mail Institucional: <span style='color: blue;'>$email_final</span>";
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
?>