<meta charset="UTF-8"/>
<html>
<head>
    <title>Hello!</title>
</head>
<body>
<?php

echo "HELLO WORLD!<br/>\n";
echo "안녕 세상!<br/>\n";

$score = array(1, 2, 3);
$score[10] = 0;
$s = $score[0];
echo $score[0]++;
echo $s;
sort($score);

for ($x = 0; $x <= 10; $x++) {
    for ($y = 0; $y <= $x; $y++) {
        echo "*";
    }
    echo "<br/>\n";
}
?>

</body>
</html>
