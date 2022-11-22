<?php

namespace Tests\Unit\ValidAnagram;

use LeetCode\ValidAnagram\Solution;
use Tests\TestCase;

class ValidAnagramTest extends TestCase
{
    private string $solveMethod = "isAnagram";

    /** @dataProvider validAnagrams */
    public function test_it_passes_valid_anagram(string $first, string $second): void
    {
        $solver = new Solution();

        $this->assertTrue($solver->isAnagram($first, $second));
    }

    /** @dataProvider invalidAnagrams */
    public function test_it_fails_invalid_anagrams(string $first, string $second): void
    {
        $solver = new Solution();

        $this->assertFalse($solver->isAnagram($first, $second));
    }

    public function validAnagrams(): array
    {
        return [
            ["anagram", "gramana"],
            ["cac", "acc"],
        ];
    }

    public function invalidAnagrams(): array
    {
        return [
            ["cat", "dog"],
            ["bottle", "water"],
        ];
    }
}
