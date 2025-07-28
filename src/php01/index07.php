<?php
function outputNumber($number)
{
    print $number;
}

function JudgeScore($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if($total > 210){
        echo "合計点は".$total."なので合格です！<br>";
    }
    else{
        echo "合計点は".$total."なので不合格です<br>";
    }
}
JudgeScore(10, 200, 0);
JudgeScore(10, 200, 1);

function CalcTriangle($base, $height)
{
    return $base * $height * 0.5;
}
echo CalcTriangle(5, 10);
echo "<br>";

function CalcSquare($width, $height)
{
    return $width * $height;
}
echo CalcSquare(5, 5);
echo "<br>";
function CalcTrapezium($top, $buttom, $height)
{
    return ($top + $buttom) * $height * 0.5;
}
echo CalcTrapezium(5, 10, 5);
echo "<br>";
?>