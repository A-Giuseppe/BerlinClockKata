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

}
