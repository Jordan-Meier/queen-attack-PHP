<?php
    require_once __DIR__ . '/../src/Queen.php';

    class QueenTest extends PHPUnit_Framework_TestCase
    {
        function test_canAttack_vertical()
        {
            // arrange
            $test_Queen = new Queen(4,4);

            // act
            $result = $test_Queen->canAttack(4,1);
            $result2 = $test_Queen->canAttack(3,1);

            // assert
            $this->assertEquals(true, $result);
            $this->assertEquals(false, $result2);
        }
        function test_canAttack_horizontal()
        {
            // arrange
            $test_Queen = new Queen(4,4);

            // act
            $result = $test_Queen->canAttack(1,4);
            $result2 = $test_Queen->canAttack(1,3);

            // assert
            $this->assertEquals(true, $result);
            $this->assertEquals(false, $result2);
        }
        function test_canAttack_diagonal()
        {
            // arrange
            $test_Queen = new Queen(4,4);

            // act
            $result = $test_Queen->canAttack(1,1);
            $result2 = $test_Queen->canAttack(1,3);

            // assert
            $this->assertEquals(true, $result);
            $this->assertEquals(false, $result2);
        }
    }
?>
