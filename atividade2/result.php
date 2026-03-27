<?php
$nome= $_POST['nome'];
$sobrenome= $_POST['sobrenome'];
$email= $nome . "." . $sobrenome;

echo "seu E-mail e " . $email;

?>
