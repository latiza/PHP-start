<?php
header('Content-Type: text/html; charset=utf-8');
require "./whilelibrary.php";
$konyvszam=count($konyvek);
$i=0;
echo "<h1>Könyvek listája</h1><hr>";
while($i<$konyvszam){
    echo $i+1 .". Könyv:",$konyvek[$i]["cim"],"<br/>";
    $i++;
}
echo "<hr/>";
/**A 5. sorban a count() függvénnyel meghatározzuk a tömb elemeinek számát, 
 * majd létrehozunk egy $i nevű o kezdőértékű változót. 
 * A ciklusfej előtt a "<hr/>" jelölő kiírásával biztosítjuk egy vízszintes vonal,
 *  megjelenését.
A ciklusfejben lévő teszt ellenőrzi, hogy $i kisebb-e mint a $konyvszam változó értéke. 
Ha igen, akkor végrehajtódik a ciklusmag, amelyben kiírjuk 
az $i. könyv címét, majd $i értékéhez hozzáadunk 1-et. 
Amikor elérjük a ciklus-véget, a vezérlés újra a fejre kerül, 
ahol már $i új értékét hasonlítjuk össze a tömb elemszámával. 
Így az ismétlés mindaddig tart, amíg az összes elemet ki nem írjuk. */
?>