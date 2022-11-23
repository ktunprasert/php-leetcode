<?php

namespace Tests\Unit\GroupAnagrams;

use LeetCode\GroupAnagrams\Solution;
use Tests\TestCase;

class GroupAnagramsTest extends TestCase
{
    private string $solveMethod = "groupAnagrams";

    /** @dataProvider validAnagrams */
    public function test_it_passes_valid_group_anagram(array $input, array $expected): void
    {
        $solver = new Solution();

        $this->assertEqualsCanonicalizing($expected, $solver->{$this->solveMethod}($input));
    }

    /** @dataProvider invalidAnagrams */
    public function test_it_fails_invalid_group_anagrams(array $input, array $expected): void
    {
        $solver = new Solution();

        $this->assertNotEqualsCanonicalizing($expected, $solver->{$this->solveMethod}($input));
    }

    public function validAnagrams(): array
    {
        return [
            [
                ["eat", "tea", "tan", "ate", "nat", "bat"],
                [["bat"], ["nat", "tan"], ["ate", "eat", "tea"]],
            ],
        ];
    }

    public function invalidAnagrams(): array
    {
        return [
            [
                ["a", "b"],
                [["b"], ["b"]],
            ],
        ];
    }
}
