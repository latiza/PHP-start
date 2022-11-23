<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHP OOP-teszt</title>
</head>
<body>
<h1>Objektumorientált PHP-kód tesztelése</h1>
<?php
class Termék {
    public $leírás;
    public $ár;
    public $készlet;
    public $akciós;
/**A választott osztálynévnek egyedinek kell lennie/**
 * 3 láthatósági kulcsszó:
 * public
 * private
 * protected
 *
public function __construct(type $ = null)
{
    $this-> = $;
} */ 
    public function termékVásárlás($mennyiség) {
        $this->készlet -= $mennyiség;
    }
}
        /**A $this változó egy különleges azonosító, ami az osztály aktuális objektumára hivatkozik. Ebben a feladatban a $készlet tulajdonságra mutat, és ez esetben amikor hivatkozunk a készlet változóra elhagyjuk a dollár jelet, ezzel tudatjuk a php-vel, hogy a $készlet tulajdonságára hivatkozunk, ami az osztály objektumban található, és nem pedig magára az osztályra. */
    

$termék1 = new Termék("Répa", 400, 10, false);//példányosítás
/**ez egy $termék1 nevű objektumot hoz létre a Termék osztály felhasználásával, amikor egy objektumot példányosítasz, az adott osztály nyilvános tagjait közvetlenül érheted el a kódodban: */
    $termék1->leírás = "Répa";
    $termék1->ár = 150;
    $termék1->készlet = 10;
    $termék1->akciós = false;
    /*ezzel beállításra kerültek az objektum egyes tuljdonságainak értékei és itt is a "->" szimbólumot használjuk, hogy a php tudtára adjuk, hogy itt kifejezetten a $termék1 objektum tulajdonságaira hivatkozunk */
echo "<p>$termék1->leírás hozzáadva</p>\n";


$termék2 = new Termék("Padlizsán", 200, 5, true);
$termék2->leírás = "Padlizsán";
$termék2->ár = 200;
$termék2->készlet = 5;
$termék2->akciós = true;
echo "<p>$termék2->leírás hozzáadva</p>\n";

echo "<p>4 répa megvásárlása...</p>\n";
$termék1->termékVásárlás(4); /*ezzel meghívhatjuk az osztályobjektum termékVásárlás() metódusát, és átadhatjuk neki itt pl. a 4-es értéket. 
A termékVásárlás() metódus módosítja az objektum $készlet tulajdonságát.*/
echo "<p>$termék1->leírás fennmaradó készlete:
        $termék1->készlet</p>\n";
echo "<p>$termék2->leírás készlete továbbra is
        $termék2->készlet</p>\n";
    
?>
</body>
</html>
