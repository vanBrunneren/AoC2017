<?php

$coords[0][0] = 1;
$coords[1][0] = 1;
$coords[1][1] = 2;





























/*
echo run_the_code(312051) . "\n";

function run_the_code($input) {
    $x = 2;
    $y = 2;

    $grid = [];
    for ($i = 0; $i <= (2 * $y); $i++) {
        $grid[] = [];
    }
    $grid[$x][$y] = 1;
    $width = 1;

    $calculateGrid = function($grid, $x, $y) {
        $sum = 0;

        $sum += ($grid[$x - 1][$y] ?? 0);
        $sum += ($grid[$x - 1][$y + 1] ?? 0);
        $sum += ($grid[$x - 1][$y - 1] ?? 0);
        $sum += ($grid[$x][$y + 1] ?? 0);
        $sum += ($grid[$x][$y - 1] ?? 0);
        $sum += ($grid[$x + 1][$y] ?? 0);
        $sum += ($grid[$x + 1][$y - 1] ?? 0);
        $sum += ($grid[$x + 1][$y + 1] ?? 0);

        return $sum;
    };

    while (true) { // will error out eventually
        $width += 2;

        $y++; // move to the right
        $grid[$x][$y] = $calculateGrid($grid, $x, $y);
        if ($grid[$x][$y] > $input) {
            return $grid[$x][$y];
        }

        // go up (but not too much)
        for ($i = 0; $i < $width - 2; $i++) {
            $x--;

            $grid[$x][$y] = $calculateGrid($grid, $x, $y);
            if ($grid[$x][$y] > $input) {
                return $grid[$x][$y];
            }
        }

        // go left
        for ($i = 0; $i < $width - 1; $i++) {
            $y--;

            $grid[$x][$y] = $calculateGrid($grid, $x, $y);
            if ($grid[$x][$y] > $input) {
                return $grid[$x][$y];
            }
        }

        // go down
        for ($i = 0; $i < $width - 1; $i++) {
            $x++;

            $grid[$x][$y] = $calculateGrid($grid, $x, $y);
            if ($grid[$x][$y] > $input) {
                return $grid[$x][$y];
            }
        }

        // go right
        for ($i = 0; $i < $width - 1; $i++) {
            $y++;

            $grid[$x][$y] = $calculateGrid($grid, $x, $y);
            if ($grid[$x][$y] > $input) {
                return $grid[$x][$y];
            }
        }
    }

    return -1;
}
*/
?>