<?php
    function minRemoveToMakeValid($s) {
        $chars = str_split($s);
        $chars = removeBrackets($chars, "(");
        $chars = array_reverse($chars);
        $chars = removeBrackets($chars, ")");
        $chars = array_reverse($chars);
        return implode('', $chars);
    }

    function removeBrackets(array $chars, string $bracket) {
        $count = 0;
        foreach ($chars as $i => $char) {
            if ($char != "(" && $char != ")") continue;
            if ($char == $bracket) {
                $count++;
            } else { // other one
                if ($count == 0) {
                    unset($chars[$i]);
                }
                $count = max(0, $count - 1);
            }
        }
        return $chars;
    }

    function solve(){
        $a = readline('Enter a string: ');
        echo minRemoveToMakeValid($a);
        echo "\n";
    }

    solve();

?>