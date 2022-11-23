<?php

namespace Tests\Lib\TreeNode;

use LeetCode\Lib\TreeNode;
use Tests\TestCase;

class InvertBinaryTreeTest extends TestCase
{
    public function test_it_builds_tree(): void
    {
        $input = [4, 2, 7];

        $tree = TreeNode::fromArray($input);

        $this->assertEquals(4, $tree->val);
        $this->assertEquals(2, $tree->left->val);
        $this->assertEquals(7, $tree->right->val);

        $input = [4, 2, 7, 1, 3, 6, 9];
        $tree = TreeNode::fromArray($input);

        $this->assertEquals(4, $tree->val);

        $this->assertEquals(2, $tree->left->val);
        $this->assertEquals(1, $tree->left->left->val);
        $this->assertEquals(3, $tree->left->right->val);

        $this->assertEquals(7, $tree->right->val);
        $this->assertEquals(6, $tree->right->left->val);
        $this->assertEquals(9, $tree->right->right->val);


    }
}
