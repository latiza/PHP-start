<?php
// Személyes (bedrótzott) adatok
$nev         = "Eddie Morro";
$eletkor     = 30;
$foglalkozas = "menő programozó";
$lakhely     = "New York";
$szul_ido    = "1974.07.11."; //dátum típus szövegként értelmezi
$hazas_e     = true; //kis vagy nagybetűvel is írhatod pl TRUE vagy 1
//könnyebb olvashatóság miatt egymás alá rendezheted az idézőjeleket

// Önéletrajz megjelenítése
$kimenet = "<p>A nevem: {$nev}. {$eletkor} éves vagyok. Foglalkozásom: {$foglalkozas}. A város, ahol élek: {$lakhely}.</p>";

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Önéletrajz</title>
</head>

<body>
<?php 
//megjelenítő motor, egy sor esetében kicsit erős kifejezés
print $kimenet; 
?>
</body>
</html>