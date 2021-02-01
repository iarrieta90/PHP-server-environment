<?php

//----- Example looping over the $_SERVER variable array and echoing keys and values for each item of the array

// foreach($_SERVER as $k => $v) {
//     echo $k . "-";
//     if(!is_array($v)) {
//         echo $v;
//     }
//     echo "<br/>";
// }



//----- Example printing the $_SERVER variable array directly with print_r ----->

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

?>