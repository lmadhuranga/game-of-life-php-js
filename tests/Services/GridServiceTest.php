<?php

namespace App\Tests\Util;

use App\Services\GridService;
use PHPUnit\Framework\TestCase;

class GridServiceTest extends TestCase
{
    public $grid;
    public $sampleGridArrays = array();

    public function setup()
    {
        $this->grid = new GridService();

        $this->sampleGridArrays['grid0'] = [
            //  1, 2, 3, 4, 5, 6, 7, 8, 9
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 0
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 1
            [0, 0, 1, 0, 0, 0, 0, 0, 0, 0], // 2
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 3
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 4
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 5
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 6
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 7
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 8
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 9
        ];

        $this->sampleGridArrays['grid1'] = [
            //  1, 2, 3, 4, 5, 6, 7, 8, 9
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 0
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 1
            [0, 0, 0, 1, 0, 0, 0, 0, 0, 0], // 2
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 3
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 4
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 5
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 6
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 7
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 8
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 9
        ];

        $this->sampleGridArrays['grid2'] = [
            //  1, 2, 3, 4, 5, 6, 7, 8, 9
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 0
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 1
            [0, 0, 0, 1, 0, 0, 0, 0, 0, 0], // 2
            [0, 0, 0, 1, 0, 0, 0, 0, 0, 0], // 3
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 4
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 5
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 6
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 7
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 8
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 9
        ];

        $this->sampleGridArrays['grid3'] = [
            //  1, 2, 3, 4, 5, 6, 7, 8, 9
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 0
            [0, 0, 0, 1, 0, 0, 0, 0, 0, 0], // 1
            [0, 0, 0, 1, 0, 0, 0, 0, 0, 0], // 2
            [0, 0, 0, 1, 0, 0, 0, 0, 0, 0], // 3
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 4
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 5
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 6
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 7
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 8
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 9
        ];

        $this->sampleGridArrays['grid4'] = [
            //  1, 2, 3, 4, 5, 6, 7, 8, 9
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 0
            [0, 0, 0, 1, 0, 0, 0, 0, 0, 0], // 1
            [0, 1, 1, 1, 1, 0, 0, 0, 0, 0], // 2
            [0, 0, 0, 1, 0, 0, 0, 0, 0, 0], // 3
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 4
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 5
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 6
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 7
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 8
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 9
        ];

        $this->sampleGridArrays['grid5'] = [
            //  1, 2, 3, 4, 5, 6, 7, 8, 9
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 0
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 1
            [0, 0, 0, 0, 1, 0, 0, 0, 0, 0], // 2
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 3
            [0, 0, 1, 0, 1, 0, 1, 0, 0, 0], // 4
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 5
            [0, 0, 0, 0, 1, 0, 0, 0, 0, 0], // 6
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 7
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 8
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 9
        ];
    }


    public function testNeighborsWithMySelfSkip()
    {
        $this->grid->updateRowsCols($this->sampleGridArrays['grid0']);

        $actualCells = $this->grid->countNeighbors($this->sampleGridArrays['grid0'], 2, 2);
        $this->assertEquals(0, $actualCells);
    }


    public function testNeighborsWithSingleNeibhor()
    {
        $this->grid->updateRowsCols($this->sampleGridArrays['grid1']);

        $actualCells = $this->grid->countNeighbors($this->sampleGridArrays['grid1'], 2, 2);
        $this->assertEquals(1, $actualCells);
    }


    public function testNeighborsWithRuleTwo()
    {
        $this->grid->updateRowsCols($this->sampleGridArrays['grid2']);

        $actualCells = $this->grid->countNeighbors($this->sampleGridArrays['grid2'], 2, 2);
        $this->assertEquals(2, $actualCells);
    }


    public function testNeighborsWithRuleThree()
    {
        $this->grid->updateRowsCols($this->sampleGridArrays['grid3']);

        $actualCells = $this->grid->countNeighbors($this->sampleGridArrays['grid3'], 2, 2);
        $this->assertEquals(3, $actualCells);
    }


    public function testNeighborsWithAndSkipMyself()
    {
        $this->grid->updateRowsCols($this->sampleGridArrays['grid3']);

        $actualCells = $this->grid->countNeighbors($this->sampleGridArrays['grid4'], 2, 2);

        $this->assertEquals(4, $actualCells);
    }


    public function testTestOnlyNeighbors()
    {
        $this->grid->updateRowsCols($this->sampleGridArrays['grid5']);

        $actualCells = $this->grid->countNeighbors($this->sampleGridArrays['grid5'], 4, 4);
        $this->assertEquals(0, $actualCells);
    }


    public function testNextGenerationWithMyOneCell()
    {
        $next0 = $this->grid->nextGeneration($this->sampleGridArrays['grid0']);
        $expect0 = [
            //  1, 2, 3, 4, 5, 6, 7, 8, 9
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 0
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 1
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 2
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 3
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 4
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 5
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 6
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 7
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 8
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 9
        ];
        $this->assertTrue(is_array($next0));
        $this->assertEquals($expect0, $next0);
    }

    public function testFirstRule()
    {
        // 1. Any live cell with fewer than two live neighbours dies,
        // as if by needs caused by underpopulation.
        $next1 = $this->grid->nextGeneration($this->sampleGridArrays['grid1']);
        $expect1 = [
            //  1, 2, 3, 4, 5, 6, 7, 8, 9
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 0
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 1
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 2
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 3
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 4
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 5
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 6
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 7
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 8
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 9
        ];
        $this->assertTrue(is_array($next1));
        $this->assertEquals($expect1, $next1);
    }

    public function testSecondRule()
    {
        $next2 = $this->grid->nextGeneration($this->sampleGridArrays['grid2']);
        $expect2 = [
            //  1, 2, 3, 4, 5, 6, 7, 8, 9
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 0
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 1
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 2
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 3
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 4
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 5
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 6
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 7
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 8
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 9
        ];
        $this->assertTrue(is_array($next2));
        $this->assertEquals($expect2, $next2);
    }

    public function testThirdRule()
    {
        $next3 = $this->grid->nextGeneration($this->sampleGridArrays['grid3']);
        $expect3 = [
            //  1, 2, 3, 4, 5, 6, 7, 8, 9
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 0
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 1
            [0, 0, 1, 1, 1, 0, 0, 0, 0, 0], // 2
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 3
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 4
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 5
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 6
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 7
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 8
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 9
        ];
        $this->assertTrue(is_array($next3));
        $this->assertEquals($expect3, $next3);
    }

    public function testUpdateRowsCols()
    {
        $this->grid->updateRowsCols($this->sampleGridArrays['grid3']);
        $this->assertEquals(10, $this->grid->getCols());
        $this->assertEquals(10, $this->grid->getRows());
    }

    public function testIsValidArrayWithInvalidArrayData()
    {
        $incompletedGrid = [
            //  1, 2, 3, 4, 5, 6, 7, 8, 9
            [0, 0, 0], // 0
            [0, 0, 0, 0, 0], // 1
            [0, 0, 0, 0, 0], // 2
        ];

        $this->assertFalse($this->grid->isValidArray($incompletedGrid));
    }

    public function testIsValidArrayWithInvalidArrayData2()
    {
        $incompletedGrid = [
            //  1, 2, 3, 4, 5, 6, 7, 8, 9
            [0, 0, 0, 0, 0, 0, 0, 0], // 0
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 1
            [0, 0, 1, 1, 1, 0, 0, 0, 0, 0], // 2

            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 4
            [0, 0, 0],                      // 5
            [], // 6
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 7
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 8
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // 9
        ];

        $this->assertFalse($this->grid->isValidArray($incompletedGrid));
    }

    public function testIsValidArrayWithValidArrayData()
    {
        $completedGrid = [
            //  1, 2, 3
            [0, 0, 0, 0], // 0
            [0, 0, 0, 0], // 1
            [0, 0, 1, 1], // 2
        ];

        $this->assertTrue($this->grid->isValidArray($completedGrid));
    }

    public function testIsValidArrayWithEmptyArrayData()
    {
        $emptyArrays = [];

        $this->assertFalse($this->grid->isValidArray($emptyArrays));
    }

    public function testIsValidArrayWithDataArrayWithSingelInnerEmptyArrays()
    {
        $incompletedGrid = [
            [], // 0
            [], // 1
        ];

        $this->assertFalse($this->grid->isValidArray($incompletedGrid));
    }

    public function testShouldWorkWithOnlyArrayGrid()
    {
        $wrongArray = [
            [0,0,0],
            [0, 0,'']
        ];
        $this->assertFalse($this->grid->isValidArray($wrongArray));

        $wrongArray = [
            [0,0,0],
            [0, 0,'s']
        ];
        $this->assertFalse($this->grid->isValidArray($wrongArray));

    }

    public function testIsValidCellWithDifferentData()
    {
        $cell = 0;
        $this->assertTrue($this->grid->isValidCell($cell));

        $cell = 1;
        $this->assertTrue($this->grid->isValidCell($cell));

        $cell = 3;
        $this->assertFalse($this->grid->isValidCell($cell));

        $cell = 's';
        $this->assertFalse($this->grid->isValidCell($cell));

        $cell = null;
        $this->assertFalse($this->grid->isValidCell($cell));
    }

}

?>