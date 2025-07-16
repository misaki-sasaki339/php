<?php
function outpunNumber($a){
    echo "引数の値は" . $a . "です" . "<br />";
    return;
}

outpunNumber(2);

function outputHello(){
    echo "Hello World" . "<br />";
}
outputHello();

function text($number1, $number2){
    $value = $number1 + $number2;
    return $value;
}

$total = text(2, 4);
echo $total . "<br />";

function outputNumber1($a){
    echo $a . "<br />";
    return;
}

outputNumber1(5);

function Hantei($score1, $score2, $score3){
    $total = $score1 + $score2 + $score3;
    if($total > 210){
        echo "合計点は" . $total . "なので合格です";
    }else{
        echo "合計点は" . $total . "なので不合格です";
    }
}

Hantei(100, 100, 10);
Hantei(100, 100, 9);
Hantei(100, 100, 11);

function Triangle($width, $height){
    $area = $width * $height /2;
    echo "三角形の面積は" . $area . "<br/>";
}
function Square($width, $height){
    $area = $width * $height;
    echo "四角形の面積は" . $area . "<br/>";
}

function Trapezoid($top_width, $bottom_width, $height){
    $area =($top_width + $bottom_width) * $height/2;
    echo "台形の面積は" . $area . "<br/>";
}

Triangle(3,6);
Square(5, 5);
Trapezoid(3, 5, 6);