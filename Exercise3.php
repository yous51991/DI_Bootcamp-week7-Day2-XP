<?php

/**
 * Function valid number
 * @return void
 */
function myFunction($nb) {
    try {
        // verif is integer 
        if (is_int($nb)) {
            echo "$nb is a valid integer.";
        } else {
            throw new Exception("$nb is not a valid integer.", 1);
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    } finally {
        echo "Validation Complete";
    }
}

myFunction(2.5);
