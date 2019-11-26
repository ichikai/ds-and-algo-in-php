<?php

namespace Ds\Lists\LinkedList;

interface LinkedListInterface
{
    public function __constructor();

    public function push(int $value): void;

    public function get(int $index): int;

    public function shift(): int;

    public function add(int $value, int $index): void;
}
