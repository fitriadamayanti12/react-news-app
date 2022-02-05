<?php
 
function difference($arr, $n)
{
     
    // Initialize sums of diagonals
    $d1 = 0; $d2 = 0;
 
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j < $n; $j++)
        {
             
            // finding sum of
            // primary diagonal
            if ($i == $j)
                $d1 += $arr[$i][$j];
 
            if ($i == $n - $j - 1)
                $d2 += $arr[$i][$j];
        }
    }
 
    return abs($d1 - $d2);
}
 
// Driver Code
{
    $n = 3;
 
    $arr = array(array(1, 2, 0),
                 array(4, 5, 6),
                 array(7, 8, 9));
 
    echo difference($arr, $n);
    return 0;
}

?>