<?php

class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t)
    {
        if (strlen($s) !== strlen($t)) {
            return false;
        }

        $charMap = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $charMap[$s[$i]]++;
        }

        for ($j = 0; $j < strlen($t); $j++) {
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

echo "\n" . (new Solution())->isAnagram('anagram', 'gramana');
