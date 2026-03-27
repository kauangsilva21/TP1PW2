<?php
$nota1= $_POST['nota1'];
$nota2= $_POST['nota2'];
$nota3= $_POST['nota3'];

$notafinal= ($nota1 + $nota2 + $nota3) / 3;

if ($notafinal <=4){
    echo "sua nota e I";
}
else if ($notafinal >=4.1 and $notafinal <6){
    echo "sua nota e R";
}
else if ($notafinal >=6.1 and $notafinal <9){
    echo "sua nota e B";
}
else if ($notafinal >=10){
    echo "sua nota e MB";
}







    ?>