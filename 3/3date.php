<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP pontos idő, dátum és óra</h1>
    <a href="https://www.w3schools.com/php/php_ref_date.asp" target="_blank">hasznosságok</a>
<ul></ul>
    <li>Első az időzóna meghatározás: date_default_timezone_set("Europe/Budapest");</li>
    <li>A legegyszerűbb a date() függvény.</li>
    <li>Használhatjuk még a gmdate() vagy a time() függvényt is.</li>
    <li>A date() függvénytől, a gmdate() függvény annyiban különbözik, hogy GMT (greenwich időpont szrinti) időt írja ki.
Vagyis figyelembe veszi az időzónákat, de ez legtöbbször nem szükséges.</li>
    <li>A time() függvény sokszor hasznos, azaz gyakran, ezt használjuk a PHP szkriptekben.
Megadja az Unix-időbélyeg (1 Január 1970 00:00:00 GMT) -óta eltelt idő, másodperceinek számát.</li>
</ul>


    <?php
date_default_timezone_set("Europe/Budapest");
$maidatum = date ("m" ,time()) . "-hó " . date("d" ,time()) . ". napja ";

echo "<h3 style='color:blue'>"; //figyeld meg az idéző jeleket!
echo $maidatum;
echo " van ma!</h3>";
?>
<br>
<h2>Példák</h2>
<h3>Jelenítsük meg a dátumot és pontos időt év.hónap.nap óra:perc:másodperc formátumban.</h3>
<?php
	echo date("Y.m.d H:i:s");
    //Y az év 4 számjeggyel
    //y év 2 számjeggyel
    //m év hónapja 2 számjeggyel, 0 kezdéssel
    //H a nap órája 24 órás formában
    //h a nap órája 12 órás formában
    //s egész perc óta eltelt másodpercek száma, 0val
    //S dátumok angol sorszámmutatója th

?>
<h3>irassuk ki, hogy a jelenlegi hét hányadik hete az évnek</h3>
<?php
	echo "A jelenlegi hét az év " . date("W. ") . " hete." ;
    ?>
<h3>Dátum kiíratás magyarul :</h3>

<?php
	$honapok = Array( "", "január" , "február"  , "március"   ,
	                      "április", "május"    , "június"    ,
	                      "július" , "augusztus", "szeptember",
	                      "október", "november" , "december"    );

	$napok   = Array( "vasárnap" , "hétfő" , "kedd",  "szerda",
	                  "csütörtök", "péntek", "szombat"          );

	$ho   =  $honapok[date("n")];//n az év hónapja, kezdő 0 nélkül
	$nap  =  $napok[date("w")];//a hét napja, egyetlen számként

	echo "Ma " . date("Y. ") . $ho . date(" d.") . ", $nap van.";
    ?>

    <h3>Mondjuk meg, mennyi az idő most New Yorkban!</h3>
<p>Az időzónák kezelése a date_default_timezone_set()  függvénnyel</p>
    <?php
        date_default_timezone_set('America/New_York');

        echo "New Yorkban a pontos idő most " . 
                       date("G") . " óra " . date("i") . " perc." ;
//G a nap órája 24 órás formátumban
        date_default_timezone_set('Europe/Budapest');
    ?>

    <h3>hányadika lesz 100 nap múlva</h3>
    <?php
        $szaznapmulva = time() + 100*24*60*60;
        echo "100 nap múlva ".date("Y.m.d.", $szaznapmulva)." lesz." ;
    ?>
    <h3>Adjuk meg, hogy a mai nap hányadik napja a XXI. évszázadnak</h3>
	<p>A feladat megoldásához dámutot kell "csinálnunk" 2000. december 31-ből, mint az előző évszázad utolsó napjából, majd ezt követően meg kell mondanunk, éppen ma hányadik nap zajlik azóta.</p>
    
    <?php
        $evszazadkezdet = mktime(0, 0, 0, 12, 31, 2000);
        $evszazadnapok  = (int)((time() - $evszazadkezdet) / (24*60*60));

        echo "A mai nap a XXI. évszázad $evszazadnapok. napja.";
    ?>

    <h3>Hány éves aki pl 1987.áprillis 11-én született </h3>
    
<br>
<?php
$date_of_birth = "1987-04-11";
// jelenlegi dátum és a szülinap közötti különbség számítása
$interval = date_diff(date_create(), date_create($date_of_birth));
// kor kiíratása
echo $interval->format("Te most  %Y éves, %M hónapos, %d napos vagy");
?>
<br>
<br>
	
</body>
</html>
