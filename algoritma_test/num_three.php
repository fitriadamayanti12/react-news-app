<?php

$d = array();
$d[0] = array("xc", "dz", "bbb", "dz");
$d[1] = array("bbb", "ac", "dz");

$allwords = array_unique(array_merge($d[0], $d[1]));

echo '<table>';
echo '<thead><th>WORD</th><th>INPUT</th><th>QUERY</th></thead>';

$array1 = array_count_values($d[0]);
$array2 = array_count_values($d[1]);

foreach($allwords as $id => $word) {
    echo '<tr><td>' . $word . '</td>';

    if(isset($array1[$word])) {
        echo '<td align=center>' . $array1[$word] . '</td>';
    } else {
        echo '<td align=center>0</td>';
    }

    if(isset($array2[$word])) {
        echo '<td align=center>' . $array2[$word] . '</td>';
    } else {
        echo '<td align=center>0</td>';
    }
}

echo '</table>';
?>