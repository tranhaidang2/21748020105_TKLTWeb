<?php 
    $string = "toi an com";
    $new_String = explode(" ", $string);
    for ($i = 0; $i < count($new_String); $i++) {
        echo "a[$i]:" . " = " . $new_String[$i]; 
        echo "<br>";
    }

?>