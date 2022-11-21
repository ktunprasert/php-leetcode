<?php

namespace Tests\ValidAnagram;

use LeetCode\ValidAnagram\Solution;
use PHPUnit\Framework\TestCase;

class ValidAnagramTest extends TestCase
{
    /** @dataProvider validAnagrams */
    public function test_it_passes_valid_anagram(string $first, string $second): void
    {
        $solver = new Solution();

        $this->assertTrue($solver->isAnagram($first, $second));
    }

    public function validAnagrams(): array
    {
        return [
            ["anagram", "gramana"],
        ];
    }
}
