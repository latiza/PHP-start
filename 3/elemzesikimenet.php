<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>A sztringelemzési teszt eredményei</title>
</head>
</body>
<h1>A keresőszavak eredményei</h1>
<?php
$keresés = $_POST['keresés'];//tömbváltozóval lekéri a szavak listáját
$szavak = str_getcsv($keresés);
/**az str_getcsv() függvény elemzi a sztringet, 
 * és felosztja a szavakat egy tömbváltozóra */
foreach ($szavak as $szó) {
   $kifejezés = trim($szó);
   /**a trimmel minden fölös szóköz és tabulátor karaktert el tudsz távolítani,
    * amit esetleg véletlenül megad a felhasználó az űrlapon,
    mert van olyan aki írás közbe rákönyököl a space billentyűre
    és nem túl jó adatbázisba bevinni egyenesen a semmit.
    */
   echo "<p>Keresőszó: '$kifejezés'</p>\n";
}
?>
</body>
</html>