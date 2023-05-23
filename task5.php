<?php
    function checkBrackets($s) {
        $stack = array();
        // Ассоциативный массив с парами открывающих и закрывающих скобок
        $brackets = array('(' => ')', '{' => '}', '[' => ']');
        for ($i = 0; $i < strlen($s); $i++) {
            $c = substr($s, $i, 1);
            // Если скобка открывающая - помещаем её в стек
            if (array_key_exists($c, $brackets)) {
                array_push($stack, $c);
            } else if (in_array($c, $brackets)) {
                // Если закрывающая, то сравниваем её с последней открытой в стеке
                if (count($stack) == 0 || $brackets[array_pop($stack)] != $c) {
                    return false;
                }
            }
        }
        return count($stack) == 0;
    }
    var_dump(checkBrackets("{[(}])"));
    var_dump(checkBrackets("{()[]}"));
    var_dump(checkBrackets("({[]})))"));
?>