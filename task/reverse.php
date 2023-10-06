<?php
$num=12345;
$rev=0;
echo "before reverse: $num";
while($num>0){
    $a=$num%10;
    $rev=($rev*10)+$a;
    $num=(int)($num/10);
}
echo "\nafter reverse: $rev";
?>