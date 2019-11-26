<?php

use Ds\Lists\LinkedList\Node;
use PHPUnit\Framework\TestCase;

class NodeTest extends TestCase
{

    function testValue()
    {
        $node = new Node();
        $node->setValue(3);
        $this->assertEquals(3, $node->getValue());
    }

    function testNext()
    {
        $node1 = new Node();
        $node2 = new Node();

        $node1->setNext($node2);

        $this->assertEquals($node2, $node1->getNext());
    }
}
