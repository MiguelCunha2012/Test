<?php
$sequence1 = [1, 3, 5, 7];
$nextElement1 = end($sequence2) + 2;
echo "O próximo elemento da sequência é $nextElement1.";

$sequence2 = [2, 4, 8, 16, 32, 64];
$nextElement2 = end($sequence2) * 2;
echo "O próximo elemento da sequência é $nextElement2.";


$sequence3 = [0, 1, 4, 9, 16, 25, 36];
$nextElement3 = (sqrt(end($sequence3)) + 1) ** 2;
echo "O próximo elemento da sequência é $nextElement3.";


$sequence4 = [4, 16, 36, 64];
$nextElement4 = (sqrt(end($sequence4)) + 2) ** 2;
echo "O próximo elemento da sequência é $nextElement4.";


$sequence5 = [1, 1, 2, 3, 5, 8];
$nextElement5 = $sequence5[count($sequence5) - 1] + $sequence5[count($sequence5) - 2];
echo "O próximo elemento da sequência é $nextElement5.";


$sequence6 = [2, 10, 12, 16, 17, 18, 19];
$nextElement6 = end($sequence6) + 1;
echo "O próximo elemento da sequência é $nextElement6.";


?>

