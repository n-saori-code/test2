<?php

use BcMath\Number;

// function addNumber($a, $b = 10)
// {
//     $add = $a + $b;
//     return $add;
// }

// $total = addNumber(2, 5);
// print $total;

// echo "<br>";


function Number($score1, $score2, $score3)
{
    $add = $score1 + $score2 + $score3;
    return $add;
}

$a = Number(100, 100, 40);

if (239 >= $a && $a >= 210) {
    $result = "合格";
} elseif ($a >= 240) {
    $result = "ハイパー合格";
} elseif ($a >= 150) {
    $result = "ギリ合格";
} else {
    $result = "不合格";
}

echo "合計点は" . $a . "なので" . $result . "です";

// echo "<br>";

// function exam($score1, $score2, $score3)
// {
//     $total = $score1 + $score2 + $score3;
//     if ($total > 210) {
//         echo $total . "点なので合格です";
//     } else {
//         echo $total . "点なので不合格です";
//     }
// }
// exam(80, 60, 90);

// echo "<br>";

// function triangle($a, $b)
// {
//     return $a * $b / 2;
// }

// echo triangle(2, 3);

// echo "<br>";

// function getSquareArea($base, $height)
// {
//     return $base * $height;
// }
// function getTriangleArea($base, $height)
// {
//     return $base * $height / 2;
// }
// function getTrapezoidArea($upperBase, $lowerBase, $height)
// {
//     return ($upperBase + $lowerBase) * $height / 2;
// }

// echo getSquareArea(5, 5) . "\n";
// echo getTriangleArea(7, 8) . "\n";
// echo getTrapezoidArea(4, 5, 4);
