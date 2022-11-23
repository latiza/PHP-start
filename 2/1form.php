
<?php
 // $diak = $_POST["nev"];
  if ($_POST['nev']) {
    $nev = $_POST['nev'];
 } else {
     $nev = "Nem adtad meg a neved! <br>";
 }
 $napod;
  if (isset($_POST['nap'])) {
   $napod = $_POST['nap'];
} else {
    echo $nap = "Nem adtad meg a napot! <br>";
}
 
  if (isset($_POST['anyag'])) {
     $anyag = $_POST['anyag'];
} else {
    echo $anyag = "Nem választottál tananyagot! <br>";
}
$csop = $_POST["csoport"];

if($csop == 0){ 
    echo "Válassz csoportot<br>";}
    elseif ($csop == 1){
        echo("Az első csoportot választottad.<br>");}
else echo("A második csoportot választottad<br>");
echo "Neved: $nev<br>";

?>

