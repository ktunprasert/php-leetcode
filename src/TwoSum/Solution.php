<?php

namespace LeetCode\TwoSum;

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $map = [];
        foreach ($nums as $index => $val) {
            if (isset($map[$target - $val])) {
                return [$index, $map[$target - $val]];
            }

            $map[$val] = $index;
        }
        return [-1, -1];
    }
}
