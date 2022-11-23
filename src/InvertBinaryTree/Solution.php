<?php

namespace LeetCode\InvertBinaryTree;

use LeetCode\Lib\TreeNode;

class Solution
{

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function invertTree($root)
    {
        if (!$root) {
            return null;
        }

        $result = new TreeNode(
            $root->val,
            $this->invertTree($root->right),
            $this->invertTree($root->left),
        );
        return $result;
    }
}
