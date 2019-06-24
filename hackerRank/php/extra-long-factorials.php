<?php

// Complete the extraLongFactorials function below.
function extraLongFactorials($n) {
    if($n <= 1) return 1;
    return bcmul($n, extraLongFactorials($n-1) );
}