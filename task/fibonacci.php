<?php
$num1=1;
$num2=0;
$num3=0;
for($i=1;$i<=10;$i++){
    echo " $num3";
    $num3=$num1+$num2;
    $num1=$num2;
    $num2=$num3;
}
?>