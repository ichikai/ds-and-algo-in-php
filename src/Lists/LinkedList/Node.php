<?php

namespace Ds\Lists\LinkedList;

class Node implements NodeInterface
{
    /** @var int */
    private $value;

    /** @var NodeInterface|null */
    private $next;

    public function __construct()
    {
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param NodeInterface|null $node
     */
    public function setNext(?NodeInterface $node): void
    {
        $this->next = $node;
    }

    /**
     * @return NodeInterface|null
     */
    public function getNext(): ?NodeInterface
    {
        return $this->next;
    }
}
