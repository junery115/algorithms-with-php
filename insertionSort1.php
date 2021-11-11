<?php
    function sortByInsertion($arr){
        for($i=1; $i< count($arr); $i++){
            $currentVal = $arr[$i];
             $j = $i -1;

            while($j >= 0 && $arr[$j] > $currentVal){
                $arr[$j+1] = $arr[$j];
                $j--;
            }
            $arr[$j+1] = $currentVal;
        }
        return $arr;

    }
 
$test_array = array(3,0,2,5, -1, 4,1);
$result = sortByInsertion($test_array);
 
foreach($result as $re){
    print($re);
    echo '<br />';
}