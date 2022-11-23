<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Sztringkezelő függvények</h2>
<a href="https://ms.sapientia.ro/~lszabo/webtechnologia/dok/php/ref.strings.html"target="_blank">Katt ide a felsorolásért</a>

<p>A sztringkezelő függvények az eredeti sztring értéket nem módosítják 
    - egyszerűen csak egy új sztringértéket adnak vissza. 
    Ha az eredményt a programunkban használni szeretnénk, 
    akkor azt egy másik változóhoz kell renderelnünk. <br>
$újérték = trim($adat); <br>
trim: levágás, minden térközt eltávolít egy sztring elejéről és végéről. </p>

<h3>amiket érdemes megjegyezni:</h3>

   <details>
        <summary>htmlspecialchars()</summary>
    minden HTML cimkét, amely be van ágyazva egy sztringbe, HTML kódokká konvertál
    </details>
       
    <details>
        <summary> strip_tags()</summary>
        mindenféle html és php címkét eltávolít a sztringből
       </details>
    <details><summary>ynl2br()</summary>
az új sor karaktereket <br> címkévé alakítja
</details>
    <details><summary>strtolower</summary>kisbetűssé alakítja a sztringet</details>
    <details><summary>strtupper</summary>nagybetűsít</details>
    <details><summary>ucfirst</summary>a sztring első betűjét nagybetűsre alakítja</details>
    <details><summary>strim</summary>
    minden térközkaraktert eltávolít a sztring végéről de a chop is ugyanezt tudja</details>
    <details><summary>ltrim</summary>minden térközkaraktert eltávolít a string elejéről</details>
<a href="elemzesibemenet.html" target="_blank">Példa az str_getcsv() függvény használatára</a>

<h1>Példák</h1>
<h3>A STRLEN() függvény, UTF-8 kódolásnál</h3>
<p>Gyakorlatban legtöbbször, űrlapok vagy adatlapok szövegmezőibe írt karakterlánc 
    hosszának megállapítására használjuk.
Ha űrlapot vagy adatlapot készítünk, előre meghatározhatjuk, hogy az egyes adatmezőkbe
 hány karaktert kell minimum vagy maximum beírni.
Adatbázisban tárolásra kerülő adatok ellenőrzése során is hasznos lehet.</p>

<?php
$keresztnev = "Lucifer"; $vezeteknev = "Morningstar";
$teljes_nev = $vezeteknev. " " .$keresztnev;
$sztringhossz = strlen ($teljes_nev);
echo "A teljes név, karakterláncának hossza (száma): <b>$sztringhossz</b>";
?>
<br>
<?php
$dokument = "mi mi mi";
$dokument_hossz = strlen ($dokument);
echo "A teljes dokumentum, karakterláncának hossza: $dokument_hossz ";
?>

<h3>A STRSTR() függvény</h3>

<p>Egy adott szövegrészből megállapítani, hogy az általunk megadott karakterlánc 
    (betű, szó, szóköz) létezik-e? Ha igen, akkor az első előfordulási helytól, 
    milyen karakterlánc követi? ( Betű, szó, vagy mondatrész ). 
    A megadott karakterlánc tetszőleges részét adja vissza.
Az általunk megadott karakter, vagy szövegrész első előfordulásától kezdve, 
írja ki, a további karakterláncot.</p>

<?php
$szoveg = "Ez egy teszt szöveg, melyben tetszés szerint keresgélünk.";
$ez_utan="szöveg";
$kovetkezo = strstr ($szoveg, $ez_utan);
echo "A megadott szó, és az azt követő szövegrész:<br />$kovetkezo";
?>
<br>
<h3>A STRPOS() függvény</h3>

<p>
Egy adott szövegrészből megállapítani, hogy a keresett karakterlánc 
(betű vagy szó) létezik-e benne. Ha igen, akkor a függvény meghatározza, 
hogy a karaktersorozatban, hányadik helyet foglalja el.
A függvény nullával ( 0 ) kezdi a sorszámozást.
Lehet egy szó, vagy hosszabb szövegrész, függvényünk az ott található 
karakterláncot részeire bontja, azaz karakterenként (betűkként és szóközökként) 
tömbindex formájában tárolja.
</p>
<p>Keressük meg a Lucifer Morningstar névben az "o" betű pozícióját:</p>
<?php
$vezeteknev = "Lucifer"; $keresztnev = "Morningstar";
$teljes_nev = $vezeteknev. " " .$keresztnev;
$betu_helye = strpos ($teljes_nev, "o");
echo "A keresett betű poziciója: <b>$betu_helye</b>";
?>
<br>

<h3>A substr() függvény</h3>
<p>Szöveg, egy meghatározott részének kiválasztása</p>
<?php
$adat="abcdef";
echo substr($adat, 1). "<br>";     // bcdef
echo substr($adat, 1, 3). "<br>";  // bcd
echo substr('abcdef', 0, 4). "<br>";  // abcd
echo substr('abcdef', 0, 8). "<br>";  // abcdef
echo substr('abcdef', -1). "<br>"; // f 
echo substr("abcdef", -3); // defa

//Egy speciális karakterre elérése
//Így is elérhetjük "szögletes zárójelek közé írjuk, a pozíció számot"
$string = 'abcdef';
echo $string[0]. "<br />"; // a
echo $string[3]. "<br />";  // d
echo $string[strlen($string)-1]. "<br />";  // f
?>
<br>
<h3>Az implode() függvény</h3>
<p>Tömb összefűzése egy string-be megadott elválasztóval.</p>


<br>
</body>
</html>
