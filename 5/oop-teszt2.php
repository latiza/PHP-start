<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHP OOP-teszt</title>
</head>
<body>
<h1>A PHP objektumorientált beállító és lekérdező metódusainak tesztelése</h1>
<!--PHP-ben állapot módosító metódus a __set() használatával egyetlen metódusdefinícióval az osztály összes tulajdonságának értékét be tudod állítani:
public function __set($név, $érték) {
    $this->$név = $érték; 
amint látod az állapotmódosító metódus két paramétert használ:
annak a tulajdonságanak a nevét, amit be szeretnél állítani
és azt az értéket, amelyet szeretnél hozzá rendelni a tulajdonsághoz-->
<?php
class Termék {
    private $leírás;
    private $ár;
    private $készlet;
    private $akciós;
/**
 * Ellenőrizzük, hogy a $ár tulajdonság be van e állítva, és ha igen, akkor ellenőrizzük, hogy ez az érték kisebb e mint 0;
 * ha ez az érték kisebb mint 0 akkor a megadott árat a megadott árérték helyett 0-ra állítjuk;
 * természetesen a készlet sem lehet kisebb mint 0;
 */
    public function __set($név, $érték) {
        if ($név == "ár" && $érték < 0) {
            echo "<p>A beállított ár érvénytelen</p>\n";
            $this->ár = 0;
        } elseif ($név == "készlet" && $érték < 0) {
            echo "<p>A beállított készlet érvénytelen: $érték</p>\n";
        } else {
            $this->$név = $érték;
        }
    }
/**
 * lekérdező metódus: __get() 
 * az osztályban definiált privát tulajdonságokhoz férhetünk hozzá vele, vagyis lekérik a tulajdonság értékét
 */
    public function __get($név) {
        return $this->$név;
    }

    public function termékVásárlás($mennyiség) {
        if ($this->készlet >= $mennyiség) {
            $this->készlet -= $mennyiség;
        } else {
            echo "<p>Sajnos a kért készlet érvénytelen:
                $mennyiség</p>\n";
            echo "<p>Csak $this->készlet
                maradt</p>\n";
        }
    }
}

$termék1 = new Termék("Répa", 400, 10, false);
$termék1->leírás = "Répa";/*itt már nem kell meghívni a __set()metódust, elég egy egyszerű értékadó utasítással definiálni
A PHP automatikusan tudja, hogy meg kell keresnie az osztályhoz tartozó definiált ___set() állapotmódosító metódust, és a megfelelő tulajdonság és név és érték átadásával futtatja. 
Annak ellenére, hogy a $leírás tulajdonság láthatósága a private értékre van állítva, az állapotmódosító metódus definiálásával lehetővé tudod tenni, hogy külső programok értéket rendeljenek a tulajdonsághoz. 
*/
$termék1->ár = 150;
$termék1->készlet = 5;
$termék1->akciós = false;

echo "<p>$termék1->készlet $termék1->leírás hozzáadva</p>\n";

echo "<p>4 répa megvásárlása...</p>\n";
$termék1->termékVásárlás(4);
echo "<p>$termék1->leírás készlete most már $termék1->készlet</p>\n";

echo "<p>Megpróbáljuk -1-re állítani a répa készletét:</p>\n";
$termék1->készlet = -1;

echo "<p>Most megpróbálunk megvásárolni 10 répát...</p>\n";
$termék1->termékVásárlás(10);
echo "<p>$termék1->leírás készlete most már $termék1->készlet</p>\n";
?>
</body>
</html>
