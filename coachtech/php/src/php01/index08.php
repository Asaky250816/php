<?php
$people = [
    [
    "name" => "Taro",
    "age" => 25,
    "gender" => "men"
],
    [
    "name" => "Jiro",
    "age" => 20,
    "gender" => "men"
],
    [
    "name" => "Hanako",
    "age" => 16,
    "gender" => "women"
]
];

foreach ( $people as $person ) {
    echo $person["name"] ."(" . $person["age"] ."歳". $person["gender"] . ")<br>";
}

$people = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['Hanako', 16, 'women']
];

foreach ($people as $person) {
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
