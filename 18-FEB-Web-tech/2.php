<?php

function value_add ( $amount ){
    $cal_value_add = ($amount* 15 )/100;
    return $cal_value_add;
}
print(value_add(200));
?>