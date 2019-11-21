<?php

use WSCPROJECT\Math;
use PHPUnit\Framework\TestCase;

class AverageTest extends TestCase
{
    protected $Math;

    public function setUp()
    {
        $this->Math = new Math();
    }

    public function testCalcCentury(){
        // arrage
        $arrage = [
            ["input" => 2019, "expect" => 21],
            ["input" => 1022, "expect" => 11],
            ["input" => 1519, "expect" => 16],
            ["input" => 2011, "expect" => 21],
            ["input" => 322, "expect" => 4],
        ];

        // act
        foreach($arrage as $case){
            $data = $this->Math->calcCentury($case['input']);
            // assert
            $this->assertEquals($case['expect'], $data);
        }

    }

    /**
     * @dataProvider exampleProvider
     */
    public function testCalcCenturyWithDataProvider($input, $expected){
        // act
        $data = $this->Math->calcCentury($input);
        
        // assert
        $this->assertEquals($expected, $data);
    }

    public function exampleProvider()
    {
        return [
            [2, 1],
            [2121, 22],
            [2011, 21],
            [132, 2]
        ];
    }




    public function CalculationOfMedian()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Math->median($numbers));
    }
}
