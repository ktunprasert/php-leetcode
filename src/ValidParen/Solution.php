<?php

namespace LeetCode\ValidParen;

class Solution
{

    function getMatchingBrace($c)
    {
        return match ($c) {
            ']' => '[',
            ')' => '(',
            '}' => '{',
        };
    }
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        if (strlen($s) == 1) {
            return false;
        }

        $stack = [];
        foreach (str_split($s) as $c) {
            switch ($c) {
                case '[':
                case '(':
                case '{':
                    $stack[] = $c;
                    break;
                case ']':
                case ')':
                case '}':
                    if (!count($stack)) {
                        return false;
                    }
                    $prev = array_pop($stack);
                    if ($prev !== $this->getMatchingBrace($c)) {
                        return false;
                    }
                    break;
            }
        }

        return empty($stack);
    }
}
