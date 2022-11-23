<?php 
    $kimenet="<table style=\"border:2px solid black\">\n";
    /*ha nem adjuk meg $kimentet hibát jelez a böngésző. A táblázat formázásánál vagy váltogatni kell az idézőjel aposztróf kombót, vagy \ védő karaktereket szükséges használni, a megfelelő megjelenés végett.*/
    for($sor=1;$sor<=10;$sor++){
        $kimenet.="\t<tr>\n";
        for($oszlop=1;$oszlop<=10;$oszlop++){
            $kimenet.="\t\t<td>".($sor*$oszlop)."</td>\n";
        }
        $kimenet.="\t</tr>";/*a \t azt jelenti egy tabbal beljebb, ami igazából abban segít, hogy a html kimenetnélegy olvashatóbb kódot eredményez, kettővel pedig azt jelenti 2 db tabbal beljebb*/
    }
    $kimenet.="</table>\n";/*a .= a meglévőhöz hozzáfűz
elválaszthatod a kódod, úgy hogy csak a kiíratást rakod a body-ba a többit külön a documentum tetejére, csak arra kell figyelni, hogy a doctype >< egy sorba kerüljön, különbe régebbi edge böngészők eltörik az oldalt. Nem kötelező így használni, csak ha Neked így könnyebb. */
    ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    print $kimenet;
    ?>
    <br>
<h2>Ternáris vagy conditional operátor</h2>


<?php
$num=550;
    print "A(z):{$num}\n";
    print($num % 2 == 0 ) ?"páros":"páratlan";
    ?>
<hr>
    <h2>A hét napja</h2>

    <?php
    $hét_napja=2;

    switch($hét_napja){
        case 1:$nap="hétfő"; break;
        case 2:$nap="kedd"; break;
        case 3:$nap="szerda"; break;
        case 4:$nap="csütörtök"; break;
        case 5:$nap="péntek"; break;
        case 6:$nap="szombat"; break;
        case 7:$nap="vasánap"; break;
        default:$nap="Rossz napot adtál meg!";
    }
    print$nap;

    /*A switch case === egyenlőségjjel vizsgál!
    5=="5" ez igaz
    5==="5" ez viszont hamis, mert típust is vizsgál */
    ?>

    <h2>Asszociatív tömb</h2>
    <?php
    $szemely=array(
        "nev" => "Lucifer Morningstar",
        "kora" => 8000,
        "foglalkozas" => "ördög"
    );
    print $szemely["kora"];
    /*felcímkézzük az elemeket, és a címkékkel hivatkozhatunk rájuk */
    ?>
</body>
</html>
