<?php

$arr = array();
$inp1 = file("Array.txt");
foreach ($inp1 as $line){
    array_push($arr, $line);  
}
$unique = array_unique($arr);
$dup = array_diff_assoc($arr,$unique);
$ct = 0;
foreach ($dup as $hasval){
    $ct+=1;
}
echo "Total number of duplicate elements found in the array is: ".$ct;

echo "<br><br>";


//2
$arr2 = array();
$inp2 = file("Array2.txt");
foreach ($inp2 as $line){
    array_push($arr2,$line);
}
$freq = array_count_values($arr2);
foreach ($freq as $value =>$count){
    echo $value." cccurs ".$count." times <br>";
}

echo "<br><br>";

//3
$arr3 = array();
$inp3 = file("Array3.txt");
foreach ($inp3 as $line){
    array_push($arr3,$line);
}
$odd = array();
$even = array();
foreach($arr3 as $val){
    if($val % 2 == 0){
        $even[] = $val;
    }
    else {
        $odd[] = $val;
    }
}

echo "The Even elements are:<br>";
    foreach($odd as $val){
        echo $val." ";
    }

echo "<br>The Odd elements are:<br>";
    foreach($even as $val){
        echo $val." ";
    }


?>