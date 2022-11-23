
<?php

require "./whilelibrary.php";
$hossz=count($konyvek);
echo "<h1>Könyvek listája</h1>";
for ($i=0; $i<$hossz; $i++){
	$sorsz=$i+1;
	echo "$sorsz.",$konyvek[$i]["cim"],"<br/>";
}
/**
 * példa ciklusa a ciklusmag minden futásakor a $konyvek tömb 
 * soron következő elemét másolja a $konyv változóba.
Mivel minden tömbelem egy asszociatív tömb, a cikluson belül a 
$konyv változó asszociatív tömb lesz. Mindig a "cim" elemének értékét 
írhatjuk ki.
 */
?>
