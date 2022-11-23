<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Kiíratási parancsok</h2>
<p>A PHP-echo arra való, hogy kiírja a megadott karakterláncot (stringet) a terminálra. Az echóhoz nagyon hasonló a print parancs. Mindkettőt arra használjuk, hogy kiírjuk az adatokat a képernyőre. Csak néhány apró különbség van köztük. Az echo parancsnak nincs visszatérési értéke, a print visszatérési értéke pedig 1. Az echónak több paramétere is lehet (habár az ilyen felhasználás viszonylag ritka), a print azonban csak egy argumentummal boldogul. Az echo egy kicsit gyorsabb, mint a print.</p>
<?php print("Hello"); ?>

<h3>Írj egy programot, ami két dátum közötti különbséget számolja ki</h3>

<?php
$sdate = "1981-11-04";
$edate = "2021-09-04";

$date_diff = abs(strtotime($edate) - strtotime($sdate));

$years = floor($date_diff / (365*60*60*24));
$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf ("%d év, %d hónap, %d nap", $years, $months, $days);
printf ("\n");
?>

<p>A printf () függvény formázott karakterláncot ad ki.
    A %d esetében a d betű jelenti a decimális számot.
</p>
</body>
</html>
