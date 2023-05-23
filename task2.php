<?php

    function sortArrayByOther($arrA, $arrB) {
        // Отбор элементов массива А, содержащихся в массиве В
        $result = array();
        for ($i = 0; $i < count($arrB); $i++) {
            for ($j = 0; $j < count($arrA); $j++) {
                if ($arrB[$i] == $arrA[$j]) {
                    array_push($result, $arrA[$j]);
                }
            }
        }
        // Сортировка оставшихся элементов массива A по убыванию
        $otherValues = array_diff($arrA, $arrB);
        rsort($otherValues);

        $result = array_merge($result, $otherValues);
        return $result;
    }

    $arrA = array(2, 4, 1, 3, 2, 4, 6, 7, 9, 2, 19);
    $arrB = array(2, 1, 4, 3, 6, 9);

    $result = sortArrayByOther($arrA, $arrB);

    for ($i = 0; $i < count($result); $i++) {
        echo $result[$i] . " ";
    }

?>