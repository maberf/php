<?php

function f($v, $n) {
    if ($n <= 0) return 1;
    else
    return $v[$n-1] * f($v, $n-2) + 1;
}
$a = array(0,1,2,3);
print (f($a, 4));
// respostas 6, 7, 0, 5 e null - 7 e null não são.

?>