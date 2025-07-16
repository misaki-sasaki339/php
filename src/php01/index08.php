<?php
$people = array('Taro', 'Jiro', 'Saburo');
var_dump($people);
echo $people[0];

$people = array(
    'people1' => 'Taro',
    'people2' => 'Jiro',
    'people3' => 'Saburo'
);
var_dump($people);

$people = [
    'people1' => 'Taro',
    'people2' => 'Jiro'
];

$people = [
[   "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
],
[
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
],
[
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
],
];
echo $people[0]["last_name"];

$people = array('Taro','Jiro','Saburo');
foreach ($people as $person){
    echo $person;
    echo '<br />';
}

$people = array(
    'people1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);
foreach($people as $person => $name){
    print $person . "は" . $name . "です" . '<br />';
}

$people = [
[   "name" => "Taro",
    "age" => 25,
    "sex" => "men"
],
[   "name" => "Jiro",
    "age" => 20,
    "sex" => "men"
],
[   "name" => "Hanako",
    "age" => 16,
    "sex" => "women"
],
];

foreach($people as $person){
    print $person["name"] . '(' . $person["age"] . "歳" . $person["sex"] . ')' . '<br />';
}


$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
