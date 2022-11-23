<?php

namespace LeetCode\Lib;

class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }

    function insert(int $val): self
    {
        switch ($val) {
            case ($val > $this->val):
                if ($this->right) {
                    $this->right->insert($val);
                    break;
                }

                $this->right = new TreeNode($val);
                break;
            case ($val <= $this->val):
                if ($this->left) {
                    $this->left->insert($val);
                    break;
                }

                $this->left = new TreeNode($val);
                break;
        }

        return $this;
    }

    static function fromArray(array $arr): self
    {
        $tree = new TreeNode(array_shift($arr));
        while ($val = array_shift($arr)) {
            $tree->insert($val);
        }

        return $tree;
    }

    function toArray(): array
    {
        $out = [$this->val];

        if ($this->left) {
            $out = [...$out, ...$this->left->toArray()];
        }

        if ($this->right) {
            $out = [...$out, ...$this->right->toArray()];
        }

        return $out;
    }
}
