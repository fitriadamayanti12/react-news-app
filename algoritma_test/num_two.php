<?php 
function LongestWordLength($str)
{
     
    $n = strlen($str);
    $res = 0; $curr_len = 0;
     
    for ($i = 0; $i < $n; $i++)
    {
         
        if ($str[$i] != ' ')
            $curr_len++;

        else
        {
            $res = max($res, $curr_len);
            $curr_len = 0;
        }
    }
 
    return max($res, $curr_len);
}

$string = "Saya sangat senang mengerjakan soal algoritma";
$words  = explode(' ', $string);

$longestWordLength = 0;
$longestWord = '';

foreach ($words as $word) {
   if (strlen($word) > $longestWordLength) {
      $longestWordLength = strlen($word);
      $longestWord = $word;
   }
}

echo "Sentence : ".$string;
echo "<h3>Kata terpanjang:</h3>";
echo $longestWord;
echo " : ". (LongestWordLength($string)) ." character";
?>