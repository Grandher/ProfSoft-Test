<?php
    //алгоритм быстрой сортировки
    function quickSort(&$array) {
        // Если в массиве меньше 1 элемента, то он уже отсортирован, поэтому ничего не делаем
        if (count($array) <= 1) {
            return $array;
        }
        // Выбираем первый элемент массива как опорный
        $k = $array[0];
        $rightArray = array();
        $leftArray = array();
        // Проходим циклом по всем элементам массива начиная со второго
        for ($i = 1; $i < count($array); $i++) {
            // Если текущий элемент больше либо равен опорному, добавляем вправое подмножество,
            if ($array[$i] >= $k) {
                array_push($rightArray, $array[$i]);
            } else { // в противном случае - в левое подмножество
                array_push($leftArray, $array[$i]);
            }
        }
        // Рекурсивно вызываем функцию быстрой сортировки на левом и правом подмножествах
        quickSort($leftArray);
        quickSort($rightArray);
        // Объединяем отсортированные массивы
        $array = array_merge($leftArray, array($k), $rightArray);
    }

    $array = range(0, 100000);
    shuffle($array);

    $start = microtime(true);
    quickSort($array);
    $end = microtime(true);

    echo 'Время сортировки: ' . $end - $start;

?>