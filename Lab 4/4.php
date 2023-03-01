<?php

function largest ( $one,$two,$three ){
    if ($one >$two){
        if($one>$three){
            echo "${one} is the largest ";
        }
    }
        else if ($two>$three){
            echo "${two} is the largest ";
        }
        else {
            echo "${three} is the largest ";
        }
    }


print(largest(10,20,30));

?>