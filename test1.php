<?php

function checkBrackets(string $s): bool
{
    $stack = [];
    $pairs = ['('=>')', '['=>']'];
    $len = strlen($s);
    for ($i = 0; $i < $len; $i++) {
        $symbol = $s[$i];
        if ($symbol == '(' or $symbol == '[') {
            array_push($stack, $symbol);
        } elseif ($symbol == ')' or $symbol == ']') {
            $open = array_pop($stack);
            if ($pairs[$open] != $symbol) {
                return false;
            }
        }
    }

    return empty($stack);
}