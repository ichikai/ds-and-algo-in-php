<?php

namespace Ds\Lists\LinkedList;

interface NodeInterface
{
    public function __construct();

    public function setValue(int $value): void;

    public function getValue(): int;

    public function setNext(?NodeInterface $node): void;

    public function getNext(): ?NodeInterface;
}
