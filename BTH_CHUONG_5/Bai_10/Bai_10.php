<?php 
    $array = array(1,2,3,4,5,6,7,8,9,10,11,12,13,);
    
    echo "Mảng ban đầu: ";
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . "   ";
    }
    echo "<br>";
    echo "Đếm tổng các số chẵn: ";
    $sumEven = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 == 0) {
            $sumEven += $array[$i];
        }
    }
    echo $sumEven;

    echo "<br>";
    echo "Đếm tổng các số lẻ: ";
    $sumOdd = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 == 1) {
            $sumOdd += $array[$i];
        }
    }
    echo $sumOdd;

    echo "<br>";
    echo "Số lớn nhất trong mảng: ";
    $max = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }
    echo $max;

    echo "<br>";
    echo "Số nhỏ nhất trong mảng: ";
    $min = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    echo $min;

    echo "<br>";
    echo "Đảo ngược mảng mảng: ";
    for ($i = count($array) - 1; $i >= 0; $i--) {
        echo  " ".  $array[$i];
    }

?>
