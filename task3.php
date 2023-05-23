<?php

    $N = 5;
    $array = array();
    spiralArray($N, $array);
    
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            printf( "%02d ", $array[$i][$j]);
        }
        echo "<br>";
    }

    function spiralArray($n, &$arr) {
        $val = 1;
        $m = $n;
        // k и l - границы подмассива
        $k = 0;
        $l = 0;
        while ($k < $m && $l < $n) {
            // Записываем последовательность значений от левого к правому краю
            for ($i = $l; $i < $n; ++$i)
                $arr[$k][$i] = $val++;
            $k++;
            // от верхнего до нижнего края
            for ($i = $k; $i < $m; ++$i)
                $arr[$i][$n - 1] = $val++;
            $n--;
            // от правого до левого 
            if ($k < $m) {
                for ($i = $n - 1; $i >= $l; --$i)
                    $arr[$m - 1][$i] = $val++;
                $m--;
            }
            // от нижнего до верхнего 
            if ($l < $n) {
                for ($i = $m - 1; $i >= $k; --$i)
                    $arr[$i][$l] = $val++;
                $l++;
            }
        }
    }

?>