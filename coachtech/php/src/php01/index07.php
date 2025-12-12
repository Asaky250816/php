<?php
function text ($score1, $score2, $score3)
{
    $value = $score1 + $score2 + $score3;
    if ( $value >= 210 ) {
        return "合格点は" . $value . "なので合格です。";
    } else {
        return "合格点は" . $value . "なので不合格です。";
    }
}
$value = text(10, 70, 80);
echo  $value . "<br>";

function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
    echo $total . "点なので合格です";
    } else {
    echo $total . "点なので不合格です";
    }
}
echo (exam(80, 60, 90)) . "<br>";

// 三角形の面積を求める関数
function triangleArea($base, $height)
{
    return $base * $height / 2;
}

// 四角形の面積を求める関数
function rectangleArea($width, $height)
{
    return $width * $height;
}

// 台形の面積を求める関数
function trapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

// 使用例
echo "三角形の面積: " . triangleArea(10, 5) . "<br>";
echo "四角形の面積: " . rectangleArea(10, 5) . "<br>";
echo "台形の面積: " . trapezoidArea(5, 10, 6) . "<br>";


