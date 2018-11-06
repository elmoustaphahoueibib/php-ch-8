<?php
 $x = 10;
$a=0;
for ( $i=0 ;$i <= $x; $i++  ){
    $a = $a+ $i;
    echo $a;
    echo"<br>";
}
echo 'sum = ' .$a;


$i = 1;
$a = 0;
while($i <= 3){
    $a+=  $i;
    $i++;
}

echo $a;