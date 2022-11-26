<?php

namespace LeetCode\ValidParen;

class Solution
{
    static $braceMatch = [
        ']' => '[',
        ')' => '(',
        '}' => '{',
    ];

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $stack = [];
        foreach (str_split($s) as $c) {
            if (isset(static::$braceMatch[$c])) {
                $prev = array_pop($stack);
                if ($prev !== static::$braceMatch[$c]) {
                    return false;
                }
            } else {
                $stack[] = $c;
            }
        }

        return empty($stack);
    }
}
