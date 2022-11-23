<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHP-függvény létrehozása</title>
</head>
<body>
    <h1>Hozzunk létre saját függvényeket</h1>

    <p>függvénydefiníciók alap formátuma: <br>
function név(paraméterek){<br>
    függvény kódja <br>
    return érték; <br> 
} 
</p>
<p>Faktoriális értékek számítása:
    <br>5!=1*2*3*4*5=120
</p>
<?php
function faktoriális($érték1) {
    $faktoriális = 1;
    $számláló = 1;
    while ($számláló <= $érték1) {
        $faktoriális *= $számláló;
    $számláló++;
    }
    return $faktoriális;
}
?>
<h1>Faktoriálisok kiszámítása</h1>
<?php
echo "10 faktoriálisa " . faktoriális(10) . "<br>\n";
echo "5 faktoriálisa " . faktoriális(5) . "<br>\n";
?>

<?php echo "szia!";?>

</body>
</html>
