<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="5style.css">
</head>

<body>
    <h2>Aritmetikai operátorok</h2>
    <?php
    $érték1 = 10;
    $érték2 = 20;
    $eredmény = $érték1 + $érték2;
    echo "Az eredmény $eredmény\n";
    $lebegőpontos1 = 3.14159;
    $lebegőpontos2 = 2.3e10;
    $lebegőpontos3 = 5E-10;
    ?>

    <h2>aritmetikai rövidítések</h2>

    <?php
    $számláló= 10;
    echo $számláló = $számláló +1;
    
    echo $számláló +=1;
    echo "<br>";
    $összeg=10;
    echo $összeg *=1.10;
    echo "<br>";
    $adókulcs=1.27;
    echo $összeg=$összeg*$adókulcs;
    echo "<br>";
    echo $összeg*=$adókulcs;
    echo "<br>";
    echo $számláló++;
    ?>

<h2>logikai operátorok</h2>
<table>
    <tr><th>Operátor</th>
<th>jelentés</th></tr>
<tr><td>and</td><td>logikai és</td></tr>
<tr><td>&&</td><td>logikai és</td></tr>
<tr><td>or</td><td>logikai vagy</td></tr>
<tr><td>||</td><td>logikai vagy</td></tr>
<tr><td>xor</td><td>logikai kizáró vagy</td></tr>
<tr><td>!</td><td>logikai nem</td></tr>
</table>

<?php
if (($kor>50) and ($nem=="N")) 
?>

<h2>sztringoperátorok</h2>
<p>php-ben a pont az összefűzési operátor:</p>

<?php
$sztring1="Ez ";
$sztring2="egy teszt";
echo $eredmény=$sztring1 . $sztring2; 
?>

</body>

</html>
