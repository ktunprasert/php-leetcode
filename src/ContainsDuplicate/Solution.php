<?php

namespace LeetCode\ContainsDuplicate;

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums)
    {
        $map = [];
        foreach ($nums as $n) {
            if (isset($map[$n])) {
                return true;
            }
            $map[$n] = true;
        }

        return false;
    }
}

