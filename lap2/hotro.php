/**
 * The idcontinue function generates unique IDs in ascending order each time it is called by utilizing
 * a static variable to store and increment the current ID value.
 * 
 * @return The function `idcontinue()` returns the unique ID value, which is incremented each time the
 * function is called.
 */
<?php

/**
 * The idcontinue function is used to generate unique IDs in ascending order each time it is called.
 * It uses a static variable to store the current ID value and increments it after each function call.
 * @return int The unique ID value.
 */
function idcontinue(){
    static $userid = 1;
    return $userid++;
}
?>

