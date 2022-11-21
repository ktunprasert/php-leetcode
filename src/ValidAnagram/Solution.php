<?php

namespace LeetCode\ValidAnagram;

class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t): bool
    {
        if (strlen($s) !== strlen($t)) {
            return false;
        }

        $charMap = [];
        foreach (range(0, strlen($s) - 1) as $i) {
            if (isset($charMap[$s[$i]])) {
                $charMap[$s[$i]]++;
            } else {
                $charMap[$s[$i]] = 1;
            }
        }

        foreach (range(0, strlen($t) - 1) as $j) {
            if (!isset($charMap[$t[$j]])) {
                return false;
            } else {
                $charMap[$t[$j]]--;
            }

            if ($charMap[$t[$j]] === 0) {
                unset($charMap[$t[$j]]);
            }
        }

        return count($charMap) === 0;
    }
}
