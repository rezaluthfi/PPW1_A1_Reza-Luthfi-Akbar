<?php
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);

    for ($x = 0; $x < $arrlength; $x++) {
        if ($cars[$x] == "BMW") {
            echo "Saya suka mobil " . $cars[$x] . ". ";
        } else {
            echo "Saya suka mobil " . $cars[$x] . ". ";
        }
    }
?>