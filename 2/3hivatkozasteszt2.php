<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>A hivatkozási események tesztelése a PHP-ban</title>
</head>
<body>
<h1>Eseményvezérlés a PHP-ben</h1>
<p>Mivel a php szerveroldali nyelv, nem rendelheted hozzá közvetlenül a böngészőben bekövetkező eseményekhez. Ettől függetlenül viszont a PHP weblapjaidat a weblapon bekövetkező konkrét eseményekhez csatoltahod, és így a böngésző egy adott esemény alapján egy adott weblapot kérhet le.</p>
<p>Ezt megteheted úgy, hogy: <br>
- egy php weblapra mutató hivatkozást hozol létre; <br>
- egy űrlap létrehozásával, amely átadja az adatokat egy weblapnak.</p>
<p>Html5-ben sima ügy:</p>
<a href="https://www.w3schools.com/php/php_exercises.asp">Kattints ide!</a>
<p>így kis mennyiségű adatot adhatsz át, az url után változó - érték párokat ágyazhatsz be, amik a webszervernek átadásra kerülnek:</p>
<a href="aruhazam.php?tartalom=vásárlás">Termékek vásárlása</a><br>
<p>A böngésző elküldi a tartalom és az áruház kombinációját a webszervenek az új lapra vonatkozó GET kérés részeként. <br>
     Ha több adatot kell elküldened, azokat && jellel kell elválasztanod. <br> pl: href="aruhazam.php?tartalom=vásárlás&&termékazonosító=10"<br>
    Ez a hivakozás két változó / érték párt küld el a webszervernek a GET metódussal: <br>
tartalom = vásárlás;<br>
termékazonosító = 10;</p>
<p>A GET metódussal átadott adatértéket a speciális $_GET[] tömb változóval kérheted le a PHP-kódodban. <br>
A PHP- szerver a kliensböngészőből a GET metódusban átadott összes változó/érték párral tölti fel a $_GET[] tömbváltozót. Ezután már elérheted ezeket a tömbváltozókat a PHP-programkódban.<br> 
</p>
<a href="hivteszt.html">Adat átadás hivatkozásból GET metódussal egy PHP programnak</a>


<h2>Köszönjük, hogy ellátogattál hozzánk!</h2>
<?php
$tartalom = $_GET['tartalom'];
echo "<h3>Most épp a $tartalom szakaszban vagy</h3>\n";
?>

</body>
</html>
