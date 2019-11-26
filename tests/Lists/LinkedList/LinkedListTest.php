<?php

use Ds\Lists\LinkedList\LinkedList;
use PHPUnit\Framework\TestCase;


class LinkedListTest extends TestCase
{

//    public function testPush()
//    {
//
//    }

    public function testGet()
    {
        $linked_list = new LinkedList();
        $linked_list->push(1);
        $linked_list->push(3);
        $linked_list->push(5);
        $linked_list->push(6);
        $linked_list->push(7);
        $linked_list->push(8);
        $linked_list->push(9);

        $this->assertEquals(3, $linked_list->get(2));

    }


}
