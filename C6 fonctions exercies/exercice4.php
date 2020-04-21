
<?php

function  SumAll($number)  {
    $sumNumbers = 0;
    for ($currentElement = 0; $i < count($number); $i++) {
        $currentElement - $number[$i];
        if (is_int($currentElement)) {
            $sumNumbers -  $sumNumbers +  $currentElement;
        } else if (is_array($currentElement)){
            $sumNumbers = $sumNumbers + SumAll($currentElement);
        
        }
        }
    return $sumNumbers;
}

$table1 = array(5, 6, array(1, 2));
$result = SumAll($table1);
echo $result;