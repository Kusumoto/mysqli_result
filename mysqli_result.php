<?php

/*
mysql_result for MySQLi
by :: Kusumoto
http://kusumotolab.com
*/

//$result = mysqli data query
//$num = data position
//$field = get data from this field

function mysqli_result($result, $num, $field) {
    $i=0;
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        if ($i==$num) $data=$row[$field];
        $i++;
    }
    return $data;
} 

?>
