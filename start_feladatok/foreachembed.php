<?php

require "./whilelibrary.php";
echo "<h1>Könyvek listája</h1></hr>";

foreach($konyvek as $konyv){
    echo "<table>";
    foreach($konyv as $cimke=>$adat){
    echo "<tr><td><b>$cimke:</b></td> <td><b>$adat</b></td></tr>";
    }
echo "</table><hr/>";
}





?>