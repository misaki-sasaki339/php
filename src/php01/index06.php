<?php
for ($i = 0; $i < 4; $i++){
    echo $i;
}

for ($i = 2;$i < 11; $i++){
    echo $i;
    $i++;
    echo "<br />";
}

$i = 0;
while($i < 3){
    echo "i = ". $i. "<br />";
    $i++;
    echo "<br />";
}

$count = 0;
while($count < 20){
    $count++;
    echo $count . "<br />";
}

$i = 0;
while ($i < 10){
    if($i == 5){
        $i++;
        continue;
    }
    echo $i;
    $i++;
}

$i = 0;
do{
    echo $i . "<br />";
    $i++;
}while ($i < 5);

$num = 0;
do{
    echo "\$num = " . $num . "<br />";
    $num++; 
}while($num<3);


for($i = 0;$i <= 50; $i++){
    if($i%3 === 0 && $i%5 === 0){
        echo "FizzBuzz" . "<br />";
    }else if($i%3 === 0){
        echo "Fizz" . "<br />";
    }else if($i%5 === 0){
        echo "Buzz" . "<br />";
    }else{
        echo $i . "<br />";
    }
}

for ($i = 1;$i < 6 ; $i++){
    for($j = 1; $j < 6; $j++){
        echo "●";
    }
    echo "<br />";
}