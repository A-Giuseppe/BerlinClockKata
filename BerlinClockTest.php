<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;
use BerlinClock\BerlinClock;



class BerlinClockTest extends PHPUnit_Framework_TestCase
{

    private $berlinClock;



    protected function setUp(): void{
        $this->berlinClock = new BerlinClock();
    }

    public function test_first_line_minutes_given0_shouldReturnEEEE(){
        //Arrange

        //Act
        $actual = $this->berlinClock->firstLineMinutes(0);

        //Assert
        $this->assertEquals("E E E E",$actual);
    }

    public function test_first_line_minutes_given1_shouldReturnAEEE(){
        //Arrange

        //Act
        $actual = $this->berlinClock->firstLineMinutes(1);

        //Assert
        $this->assertEquals("A E E E", $actual);
    }

    public function  test_first_line_minutes_given2_shouldReturnAAEE(){
        //Arrange

        //Act
        $actual = $this->berlinClock->firstLineMinutes(2);

        //Assert
        $this->assertEquals("A A E E", $actual);
    }

    public function test_first_line_minutes_given3_shouldReturnAAAE(){

        $actual = $this->berlinClock->firstLineMinutes(3);

        $this->assertEquals("A A A E", $actual);
    }
    public function test_first_line_minutes_given4_shouldReturnAAAA(){
        $actual = $this->berlinClock->firstLineMinutes(4);

        $this->assertEquals("A A A A", $actual);
    }

    public function test_first_line_minutes_given6_shouldReturnAEEE(){
        $actual = $this->berlinClock->firstLineMinutes(6);

        $this->assertEquals("A E E E", $actual);
    }

    public function test_first_line_minutes_given7_shouldReturnAAEE(){
        $actual = $this->berlinClock->firstLineMinutes(7);

        $this->assertEquals("A A E E", $actual);
    }

    public function test_first_line_minutes_given8_shouldReturnAAAE(){
        $actual = $this->berlinClock->firstLineMinutes(8);

        $this->assertEquals("A A A E", $actual);
    }

    public function test_first_line_minutes_given9_shouldReturnAAAA(){
        $actual = $this->berlinClock->firstLineMinutes(9);

        $this->assertEquals("A A A A", $actual);
    }

    public function test_second_line_minutes_given0_shouldReturnEEEEEEEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(0);

        $this->assertEquals("E E E E E E E E E E E", $actual);
    }
    public function test_second_line_minutes_given5_shouldReturnAEEEEEEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(5);

        $this->assertEquals("A E E E E E E E E E E", $actual);
    }

    public function test_second_line_minutes_given6_shouldReturnAEEEEEEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(6);

        $this->assertEquals("A E E E E E E E E E E", $actual);
    }

    public function test_second_line_minutes_given10_shouldReturnAAEEEEEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(10);

        $this->assertEquals("A A E E E E E E E E E", $actual);
    }

    public function test_second_line_minutes_given11_shouldReturnAAEEEEEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(11);

        $this->assertEquals("A A E E E E E E E E E", $actual);
    }

    public function test_second_line_minutes_given15_shouldReturnAAAEEEEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(15);

        $this->assertEquals("A A A E E E E E E E E", $actual);
    }

    public function test_second_line_minutes_given16_shouldReturnAAAEEEEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(16);

        $this->assertEquals("A A A E E E E E E E E", $actual);
    }

    public function test_second_line_minutes_given20_shouldReturnAAAAEEEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(20);

        $this->assertEquals("A A A A E E E E E E E", $actual);
    }

    public function test_second_line_minutes_given21_shouldReturnAAAAEEEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(21);

        $this->assertEquals("A A A A E E E E E E E", $actual);
    }

}
