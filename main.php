<?php

class Tree{
    public $id;
    public $type;
    public $numberOfFruits;
    public function __construct($id, $type, $numberOfFruits){
        $this->id = $id;
        $this->type = $type;
        $this->numberOfFruits = $numberOfFruits;
    }
}

$fruitTrees = [];

for($i=1; $i<=10; $i++){
    $objectName = "appleTree" . $i;
    $$objectName = new Tree($id = uniqid(), $type = 'apple', $numberOfFruits = rand(40, 50));
    array_push($fruitTrees, $$objectName);
}

for($i=1; $i<=15; $i++){
    $objectName = "pearTree" . $i;
    $$objectName = new Tree($id = uniqid(), $type = 'pear', $numberOfFruits = rand(0, 20));
    array_push($fruitTrees, $$objectName);
}

$countOfApples = 0;
$countOfPears = 0;

foreach($fruitTrees as $fruitTree){
    pickTheFruits($fruitTree);
}

function pickTheFruits($obj){
    if($obj->type == 'apple'){
        global $countOfApples;
        $countOfApples += $obj->numberOfFruits;
        $obj->numberOfFruits = 0;
    }else if($obj->type == 'pear'){
        global $countOfPears;
        $countOfPears += $obj->numberOfFruits;
        $obj->numberOfFruits = 0;
    }
}

echo 'Количество собранных яблок: ' . $countOfApples . PHP_EOL;
echo 'Количество собранных груш: ' . $countOfPears;