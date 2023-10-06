<?php
$n=9;
for($i=2;$i<$n;$i++){
    if($n%$i==0){
        $f=1;;
        break;
    }
}
if($f==0){
    echo "$n is prime";
}
else{
    echo "$n is not prime";
}
?>