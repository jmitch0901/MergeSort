<?php

//include_once('MergeSorter.php');
include_once('InsertionSorter.php');

echo "<body style='background:yellow'><h1 style='color:green'>Jon, Josh, and Mitch's Super Awesome Insertion Sort</h1></body>";

$testData = array(9,8,7,6,-10,23,-1,0,0,23,45,4,6,7);

//var_dump($testData);

echo '<hr><h2><b>Before Insertion Sort:<b></b></h2> <hr>';

foreach($testData as $element){
    echo "<h3>" . $element . "</h3>";
}

$insertionSorter = new InsertionSorter();

$insertionSorter->insertionSort($testData);

echo '<hr><h2><b>After Insertion Sort:<b></b></h2> <hr>';

foreach($testData as $element){
    echo "<h3>" . $element . "</h3>";
}







?>