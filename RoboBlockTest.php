<?php
use PHPUnit\Framework\TestCase;
include("robo_block.php");

class RoboBlockTest extends TestCase {
    public function test_move_onto() {
        $blocks = new RoboBlocks(3);
        $blocks->move_onto(1, 2);
        $expected = [0 => [0], 1 => [], 2 => [2, 1]];
        $this->assertSame($blocks->get_blocks(), $expected);
    }

    public function test_move_over() {
        $blocks = new RoboBlocks(3);
        $blocks->move_onto(1, 2);
        $blocks->move_over(0, 2);
        $expected = [0 => [], 1 => [], 2 => [2, 1, 0]];
        $this->assertSame($blocks->get_blocks(), $expected);
    }

    public function test_pile_onto() {
        $blocks = new RoboBlocks(4);
        $blocks->move_onto(1, 2);
        $blocks->move_over(0, 3);
        $blocks->pile_onto(3, 2);
        $expected = [0 => [], 1 => [1], 2 => [2, 3, 0], 3 => []];
        $this->assertSame($blocks->get_blocks(), $expected);
    }

    public function test_pile_over() {
        $blocks = new RoboBlocks(4);
        $blocks->move_onto(1, 2);
        $blocks->move_over(0, 3);
        $blocks->pile_over(3, 2);
        $expected = [0 => [], 1 => [], 2 => [2, 1, 3, 0], 3 => []];
        $this->assertSame($blocks->get_blocks(), $expected);
    }

    public function test_full() {
        $blocks = new RoboBlocks(10);
        $blocks->move_onto(9, 1);
        $blocks->move_over(8, 1);
        $blocks->move_over(7, 1);
        $blocks->move_over(6, 1);
        $blocks->pile_over(8, 6);
        $blocks->pile_over(8, 5);
        $blocks->move_over(2, 1);
        $blocks->move_over(4, 9);
        
        $expected = [0 => [0], 1 => [1, 9, 2, 4], 2 => [], 3 => [3], 4 => [], 5 => [5, 8, 7, 6], 6 => [], 7 => [], 8 => [], 9 => []];

        $this->assertSame($blocks->get_blocks(), $expected);
    }
}
?>