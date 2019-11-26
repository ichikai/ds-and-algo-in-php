<?php

namespace Ds\Lists\LinkedList;

class LinkedList implements LinkedListInterface
{
    /** @var Node */
    private $first_node;

    /** @var Node */
    private $last_node;

    public function __constructor()
    {
        $this->first_node = null;
        $this->last_node = null;
    }

    public function push(int $value): void
    {
        $node = new Node();
        $node->setValue($value);

        if (is_null($this->first_node)) {
            $this->first_node = $node;
            $this->last_node = $node;
        } else {
            $this->last_node->setNext($node);
        }
    }

    public function get(int $index): int
    {
        $node = $this->first_node;
        // 2つ目以上のnodeは辿っていく
        for ($i = 1; $i <= $index - 1 ; $i++) {
            $node = $node->getNext();
        }

        return $node->getValue();
    }

    public function shift(): int
    {

    }

    public function add(int $value, int $index): void
    {

    }
}
