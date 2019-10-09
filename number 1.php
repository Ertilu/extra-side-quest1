<?php 

function spliceString($string, $start, $end = 0) {  
    $end = $end != 0 ? $end : strlen($string);
    return substr($string, $start, $end);
}

$string1 = 'programit';
$output1 = [spliceString($string1, 0, 3), spliceString($string1, 3, 4), spliceString($string1, 7)];
$output2 = [spliceString($string1, 0, 7), spliceString($string1, 7)];

$string2 = 'programmerit';
$output3 = [spliceString($string2, 0, 3), spliceString($string2, 3, 4), spliceString($string2, 7)];
$output4 = [spliceString($string2, 0, 7), spliceString($string2, 7)];
$output5 = [spliceString($string2, 0, 10), spliceString($string2, 10)];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Splice String</title>
</head>
<body>
    <h1><?= implode(', ', $output1); ?></h1>
    <h1><?= implode(', ', $output2); ?></h1>
    <h1><?= implode(', ', $output3); ?></h1>
    <h1><?= implode(', ', $output4); ?></h1>
    <h1><?= implode(', ', $output5); ?></h1>
</body>
</html>