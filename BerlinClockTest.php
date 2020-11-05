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

    public function test_second_line_minutes_given25_shouldReturnAAAAAEEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(25);

        $this->assertEquals("A A A A A E E E E E E", $actual);
    }

    public function test_second_line_minutes_given26_shouldReturnAAAAAEEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(26);

        $this->assertEquals("A A A A A E E E E E E", $actual);
    }

    public function test_second_line_minutes_given30_shouldReturnAAAAAAEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(30);

        $this->assertEquals("A A A A A A E E E E E", $actual);
    }

    public function test_second_line_minutes_given31_shouldReturnAAAAAAEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(31);

        $this->assertEquals("A A A A A A E E E E E", $actual);
    }

    public function test_second_line_minutes_given35_shouldReturnAAAAAAEEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(35);

        $this->assertEquals("A A A A A A A E E E E", $actual);
    }

    public function test_second_line_minutes_given36_shouldReturnAAAAAAAEEEE(){
        $actual = $this->berlinClock->secondLineMinutes(36);

        $this->assertEquals("A A A A A A A E E E E", $actual);
    }

    public function test_second_line_minutes_given40_shouldReturnAAAAAAAAEEE(){
        $actual = $this->berlinClock->secondLineMinutes(40);

        $this->assertEquals("A A A A A A A A E E E", $actual);
    }

    public function test_second_line_minutes_given41_shouldReturnAAAAAAAAEEE(){
        $actual = $this->berlinClock->secondLineMinutes(41);

        $this->assertEquals("A A A A A A A A E E E", $actual);
    }

    public function test_second_line_minutes_given45_shouldReturnAAAAAAAAAEE(){
        $actual = $this->berlinClock->secondLineMinutes(45);

        $this->assertEquals("A A A A A A A A A E E", $actual);
    }

    public function test_second_line_minutes_given46_shouldReturnAAAAAAAAAEE(){
        $actual = $this->berlinClock->secondLineMinutes(46);

        $this->assertEquals("A A A A A A A A A E E", $actual);
    }

    public function test_second_line_minutes_given50_shouldReturnAAAAAAAAAAE(){
        $actual = $this->berlinClock->secondLineMinutes(50);

        $this->assertEquals("A A A A A A A A A A E", $actual);
    }

    public function test_second_line_minutes_given51_shouldReturnAAAAAAAAAAE(){
        $actual = $this->berlinClock->secondLineMinutes(51);

        $this->assertEquals("A A A A A A A A A A E", $actual);
    }

    public function test_second_line_minutes_given55_shouldReturnAAAAAAAAAAA(){
        $actual = $this->berlinClock->secondLineMinutes(55);

        $this->assertEquals("A A A A A A A A A A A", $actual);
    }

    public function test_second_line_minutes_given56_shouldReturnAAAAAAAAAAA(){
        $actual = $this->berlinClock->secondLineMinutes(56);

        $this->assertEquals("A A A A A A A A A A A", $actual);
    }

    public function test_first_line_hours_given0_shouldReturnEEEE(){
        $acual = $this->berlinClock->firstLineHours(0);

        $this->assertEquals("E E E E", $acual);
    }

    public function test_first_line_hours_given1_shouldReturnAEEE(){
        $acual = $this->berlinClock->firstLineHours(1);

        $this->assertEquals("A E E E", $acual);
    }

    public function test_first_line_hours_given2_shouldReturnAAEE(){
        $acual = $this->berlinClock->firstLineHours(2);

        $this->assertEquals("A A E E", $acual);
    }

    public function test_first_line_hours_given3_shouldReturnAAAE(){
        $acual = $this->berlinClock->firstLineHours(3);

        $this->assertEquals("A A A E", $acual);
    }

    public function test_first_line_hours_given4_shouldReturnAAAA(){
        $acual = $this->berlinClock->firstLineHours(4);

        $this->assertEquals("A A A A", $acual);
    }
    public function test_first_line_hours_given6_shouldReturnAEEE(){
        $actual = $this->berlinClock->firstLineHours(6);

        $this->assertEquals("A E E E", $actual);
    }

    public function test_first_line_hours_given7_shouldReturnAAEE(){
        $actual = $this->berlinClock->firstLineHours(7);

        $this->assertEquals("A A E E", $actual);
    }

    public function test_first_line_hours_given8_shouldReturnAAAE(){
        $actual = $this->berlinClock->firstLineHours(8);

        $this->assertEquals("A A A E", $actual);
    }

    public function test_first_line_hours_given9_shouldReturnAAAA(){
        $actual = $this->berlinClock->firstLineHours(9);

        $this->assertEquals("A A A A", $actual);
    }

    public function test_second_line_hours_given0_shouldReturnEEEE(){
        $actual = $this->berlinClock->secondLineHours(0);

        $this->assertEquals("E E E E", $actual);
    }

    public function test_second_line_hours_given5_shouldReturnAEEE(){
        $actual = $this->berlinClock->secondLineHours(5);

        $this->assertEquals("A E E E", $actual);
    }

    public function test_second_line_hours_given6_shouldReturnAEEE(){
        $actual = $this->berlinClock->secondLineHours(6);

        $this->assertEquals("A E E E", $actual);
    }

    public function test_second_line_hours_given10_shouldReturnAAEE(){
        $actual = $this->berlinClock->secondLineHours(10);

        $this->assertEquals("A A E E", $actual);
    }

    public function test_second_line_hours_given11_shouldReturnAAEE(){
        $actual = $this->berlinClock->secondLineHours(11);

        $this->assertEquals("A A E E", $actual);
    }

    public function test_second_line_hours_given15_shouldReturnAAAE(){
        $actual = $this->berlinClock->secondLineHours(15);

        $this->assertEquals("A A A E", $actual);
    }

    public function test_second_line_hours_given16_shouldReturnAAAE(){
        $actual = $this->berlinClock->secondLineHours(16);

        $this->assertEquals("A A A E", $actual);
    }

    public function test_second_line_hours_given20_shouldReturnAAAA(){
        $actual = $this->berlinClock->secondLineHours(20);

        $this->assertEquals("A A A A", $actual);
    }

    public function test_second_line_hours_given21_shouldReturnAAAA(){
        $actual = $this->berlinClock->secondLineHours(21);

        $this->assertEquals("A A A A", $actual);
    }

    public function test_line_seconds_given0_shouldReturnA(){
    $actual = $this->berlinClock->secondsLine(0);

    $this->assertEquals("A", $actual);
    }
public function test_line_seconds_given1_shouldReturnA(){
    $actual = $this->berlinClock->secondsLine(1);

    $this->assertEquals("E", $actual);
    }





}
