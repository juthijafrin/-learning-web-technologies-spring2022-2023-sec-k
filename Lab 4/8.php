<?php
$myarray= [
[1,2,3,'A'],[1,2,'B','C'],[1,'D','E','F']

];
print_r($myarray);
echo "PRINTING THE SHAPES NOW :\r\n";
echo "\r\n";

function number(){
    for($i=1; $i<4 ;$i++){
        $s=1;
        for ($j=4; $j>$i ;$j--){
            echo $s.' ';
            $s=$s+1;
        }
        echo "\r\n";
    }
    
}
print(number());


//printing letters now 
function letter (){
    $s='A';
    for($i=1; $i<4 ;$i++){
        for ($j=1; $j<=$i ;$j++){
            echo $s.' ';
            $s++;
        }
        echo "\r\n";
    }
    
}
print(letter());


?>