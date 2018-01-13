<?php
/**
 * Created by PhpStorm.
 * User: madhuranga
 * Date: 1/12/18
 */

namespace App\Services;


class GridService
{
    public $cols;
    public $rows;

    function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getCols()
    {
        return $this->cols;
    }

    /**
     * @param mixed $cols
     */
    public function setCols($cols)
    {
        $this->cols = $cols;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param mixed $rows
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    /**
     * Update generation's size
     *
     * @param $gridArray
     */
    public function updateRowsCols($gridArray)
    {
        $this->setCols(sizeof($gridArray));
        $this->setRows(sizeof($gridArray[0]));
    }

    /**
     * Processes a new generation for all cells.
     *
     * Base on these rules:
     * 1. Any live cell with fewer than two live neighbours dies, as if by needs caused by underpopulation.
     * 2. Any live cell with more than three live neighbours dies, as if by overcrowding.
     * 3. Any live cell with two or three live neighbours lives, unchanged, to the next generation.
     * 4. Any dead cell with exactly three live neighbours will come to life.
     */
    public function nextGeneration($currentGen)
    {
        if ($this->isValidArray($currentGen)) {
            // Update rows and cols counts
            $this->updateRowsCols($currentGen);

            for ($i = 0; $i < $this->getCols(); $i++) {
                for ($j = 0; $j < $this->getRows(); $j++) {
                    $state = $currentGen[$i][$j];

                    // Get count current generation's neighbors
                    $neighbors = $this->countNeighbors($currentGen, $i, $j);

                    if ($state == 0 && $neighbors == 3) {
                        $next[$i][$j] = 1;
                    } else if ($state == 1 && ($neighbors < 2 || $neighbors > 3)) {
                        $next[$i][$j] = 0;
                    } else {
                        $next[$i][$j] = $state;
                    }
                }
            }
            return $next;
        } else {
            return array();
        }

    }

    /**
     * Count the nearest neighbors
     *
     * @param $grid
     * @param $x
     * @param $y
     * @return int
     */
    public function countNeighbors($grid, $x, $y)
    {
        $cell = 0;
        for ($i = -1; $i < 2; $i++) {
            for ($j = -1; $j < 2; $j++) {
                $col = ($x + $i + $this->getCols()) % $this->getCols();
                $row = ($y + $j + $this->getRows()) % $this->getRows();
                $cell += $grid[$col][$row];
            }
        }
        $cell -= $grid[$x][$y];
        return $cell;
    }

    public function isValidCell($cell)
    {
        // 0 Take as false so 0  should seperately check
        if ($cell === 0 || !empty($cell)) {
            if($cell === 0){
                $cell = '0';
            }
            switch ($cell) {
                case '0':
                    return true;
                case 1:
                    return true;
                default:
                    return false;
            }
        }
        return false;
    }

    /**
     * Check grid array is valid
     *
     * @param $grid
     * @return bool
     */
    public function isValidArray($grid)
    {
        // Check is empty wrapper array
        if ((!empty($grid)) && is_array($grid)) {
            $initialArraySize = sizeof($grid[0]);
            foreach ($grid as $row) {
                $rowLength = sizeof($row);
                // Check row array
                if (empty($row) || (!is_array($row)) || $initialArraySize != $rowLength) {
                    return false;
                } else {
                    foreach ($row as $cell) {
                        // Check each cell is valid
                        if($this->isValidCell($cell)==false){
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}

?>