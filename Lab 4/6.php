<?php


function search($number)
{
    $numbers= [1,34,56,78,9];
    foreach($numbers as $s){
        if ($number==$s){
            $variable= true;
            break;
        }

        $variable= false;
    }

    if ($variable==true){
        echo "found ";

    }
    else {
        echo "Not Found ";
    }

}
search(34);
    ?>