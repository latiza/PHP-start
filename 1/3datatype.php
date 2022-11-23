<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>A PHP-adattípusok tesztelése</title>
</head>
<body>
<h1>PHP-adattípusok</h1>
<ul></ul>
    <li>Integer</li>
    <li>Float</li>
    <li>Boolean</li>
    <li>String</li>
    <li>Array</li>
    <li>Object (objektum) : osztályok példányait tárolja</li>
    <li>Reference (hivatkozás) : összetett adattípus mutatóját tárolja</li>
</ul>
<p>Ugyanúgy mint a js-ben a változók bármilyen típusú adatokat tárolhatnak. A PHP nem alkalamaz szigorú adattípus kezelést. Érdemes a progijaidban minden változó névnél egy adat típushoz ragaszkodnod. </p>
<?php
$név = "Ricsi";
$kor = 100;
$fizetés = 575.25;
echo "<h2>$név adatai</h2>\n";
echo "Kor: $kor<br>\n";
echo "Fizetés: $$fizetés\n";
?>
<h3>Ez a PHP-teszt vége</h3>
<p>Ebben a példában láthatod, hogy simán megadhatsz egy változót közvetlenül az echo utasításban szereplő sztring értékben. <br>
</p>
<h3>idézőjelek használata</h3>
<p>Amikor egy sima szöveget iratunk ki a képernyőre az echo (vagy a print) függvénnyel, mindegy hogy aposztrófok vagy idézőjelek közé tesszük. A kért szöveg megjelenik a képernyőn:</p>

<?php

    echo "Teszt szöveg";
    echo "<br />"; // Sortörés
    echo 'Teszt szöveg';

?>

<p>A fő különbség, hogy az idézőjelek között lévő változókat és speciális karaktereket a PHP megpróbálja értelmezni, és az eredményt kiírni, amíg az aposztrófok között lévőket szövegként kezeli, és nem értelmezi:
</p>
<?php
    echo "Teszt szöveg";
    echo "<br />"; // Sortörés
    echo 'Teszt szöveg';
    echo "<br />"; // Sortörés
    $valtozo = "Teszt";
    echo "A változó értéke: $valtozo.";
    echo "<br />"; // Sortörés
    echo 'A változó értéke: $valtozo.';
?>
<p>Az idézőjelek a $valtozo értékét eredményezték (Teszt), az aposztrófok viszont csak szimpla szövegnek tekintették ($valtozo), vagyis az aposztrófok pontosan azt jelenítik meg, amit gépelünk közéjük.
</p>

<h4>Kivételek</h4>

<p>Az első, ha aposztrófok között szeretnénk aposztrófokat megjeleníteni, akkor ezeket nem írhatjuk simán a kódunkba, hiszen a második aposztróf jelet a PHP a szöveg végének értelmezné, a fennmaradó rész pedig hibákat okozna.</p>

<?php
    //echo 'Teszt 'szöveg''; // Hibás kód, ki is kell kommentelni
?>
<p>A megoldást a backslash (\) karakter jelenti. A fenti kód helyesen:</p>

<?php
    echo 'Teszt \'szöveg\''; // Helyes kód
?>
<p>Szöveg idézőjelek között való megjelenítése:</p>
<?php
    echo "Teszt \"szöveg\"";
?>

<p>PHP kiértékeli, azonban ha szeretnénk, hogy a $ jelet ne változóként értelmezze, akkor itt is használhatjuk a backslash karaktert (\$):</p>
<?php
    $valtozo = "Teszt";
    echo "A változó értéke: \$valtozo."; 
?>

</body>
</html>
