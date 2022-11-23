<?php 

require "./whilelibrary.php";
echo "<h1>Első könyv adatai</h1>";
$konyv=$konyvek[0];
echo "<table>";
foreach($konyv as $cimke=>$adat){
    echo "<tr><td><b>$cimke:</b></td> <td><b>$adat</b></td></tr>";
}
echo "</table><hr/>";

/**
 * a 0. könyv asszociatív tömbjét a $konyv változóba teszi, 
 * majd a foreach ciklussal végighalad a tömb elemein. 
 * A kulcs neve mindig a $cimke, a hozzá tartotó érték pedig 
 * az $adat változóba kerül. A programocs-ka HTML-táblázatba 
 * illesztve jeleníti meg az asszociatív tömb adatait.
 */
?>