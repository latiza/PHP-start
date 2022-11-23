<?php 
/**faktoriális: 1*2*3*4*5 = 120 */
$n=5;
$i=1;
$fakt=1;

do{
    $fakt*=$i;
    $i++;
}while ($i<=$n);
echo "$n!=$fakt";

//5!=120

/**
 * Az $n értéke határozza meg, hogy melyik szám faktoriálisát kérjük. 
 * A számolást úgy végezzük, hogy 1-től a $n-ig összeszorozzuk az összes számot. 
 * Mivel 0 és 1 faktoriálisa is egy, a $fakt változó kezdőértékét 1-re állítjuk. 
 * Elindítunk egy ciklust, amelynek minden végrehatásakor megszorozzuk a 
 * $fakt értékét az 1 kezdőértékű, de végrehajtásonként egyesével növekvő $i-vel. 
 * Az ered-ményt mindig visszatesszük a $fakt változóba.
A ciklust addig folytatjuk, amíg $i nem nagyobb, mint $n.
Mivel $n 0 és 1 értéke esetén is 1 a faktoriális, 
ciklusnak 1-szer minden-képpen le kell futnia, 
ezért alkalmas a hátul tesztelő ciklus.
 */

?>