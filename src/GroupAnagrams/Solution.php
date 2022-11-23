<?php

namespace LeetCode\GroupAnagrams;

class Solution
{

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams(array $strs)
    {
        $map = [];
        foreach ($strs as $str) {
            $str_arr = str_split($str);
            sort($str_arr);

            $map[implode('', $str_arr)][] = $str;
        }

        return array_values($map);
    }
}
