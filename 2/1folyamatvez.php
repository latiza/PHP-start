<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>if utasítás</h1>
    <p>if (feltétel) <br>
            futtatandó PHP utasítás</p>
            
    <?php 
    $kor=22;
    if ($kor>21){
        echo "Ideje, hogy legyen benne spiritusz az élethez!";
    }
    ?>
<h1>PHP összehasonlító operátorai</h1>
<table>
    <thead><tr><th>Operátor</th><th>Tulajdonság</th></tr></thead>
    <tr><td>==</td><td>ugyanazzal az értékkel egyenlők</td></tr>
    <tr><td>===</td><td>ugyanazzal az értékkel egyenlő, és egyforma adattípusúak</td></tr>
    <tr><td>!=</td><td>nem ugyanazzal az értékkel egyenlő</td></tr>
<tr><td><></td><td>nem ugyanazzal az értékkel egyenlő</td></tr>
<tr><td>!==</td><td>ugyanazzal az értékkel egyenlőek, vagy nem egyforma adattípusúak</td></tr>
<tr><td><</td><td>kisebb mint</td></tr>
<tr><td><=</td><td>kisebb egyenlő</td></tr>
<tr><td>></td><td>nagyobb mint</td></tr>
<tr><td>>=</td><td>nagyobb vagy egyenlő mint</td></tr>
</table>
<p>több utasítás csoportba foglalása:</p>
<?php 
$ár=7000;
if ($ár>5000){
    $adó = $ár*.05;
    $szállítás=1000;
    echo $végösszeg=$ár+$adó+$szállítás;
}
?>
<hr>

    <h1>else</h1>
<p>if (feltétel){ <br>
TRUE érték esetén futtatandó PHP utasítások <br>
}else{ <br>
False érték esetén futtatandó PHP utasítások <br>
}
</p>
    <hr>
    <h1>elseif</h1>
<p>
if (feltétel 1){ <br>
akkor futtatandó PHP utasítások, ha a feltétel 1 értéke TRUE <br>
} elseif (feltétel 2){ <br>
akkor futtatandó PHP utasítások, ha a feltétel 2 értéke TRUE
}

</p>

    <?php
    $szám = rand(1, 100);
    if ($szám > 50) {
        echo "<h2>A(z) $szám érték túl nagy!</h2>\n";
    } elseif ($szám > 25) {
        echo "<h2>A(z) $szám érték túl közepes!</h2>\n";
    } else {
        echo "<h2>A(z) $szám érték túl kicsi!</h2>\n";
    }
    ?>
    <hr>
    <h1>switch</h1>
<p>
switch (feltétel){ <br>
case érték1; <br>
utasítás1; <br>
break;<br>
case érték2; <br>
utasítás2; <br>
break; <br>
default: <br>
utasítás3; <br>
}
</p>
    <hr>
    <h1>while</h1>
<?php 
$család=array("Ricsi","Barbi","Kati","Juci");
echo "A családom egyik tagja $család[0]<br>\n";
echo "A családom egyik tagja $család[1]<br>\n";
echo "A családom egyik tagja $család[2]<br>\n";
echo "A családom egyik tagja $család[3]<br>\n";
?>
<br>

    <?php
$csapat = array("John", "Paul", "George", "Ringo");
$számláló = 0;
while ($számláló < 4) {
  echo "A Beatles egyik tagja
            $csapat[$számláló]<br>\n";
  $számláló++;
}
?>
    <hr>
    <h1>for</h1>
<p>
    for(utasítás1; feltétel; utasítás2){<br>
PHP-utasítások <br>
    }
</p> <br>
<?php
$csapat = array("Amenadiel", "Uriel", "Michael", "Lucifer");
for ($számláló=0; $számláló<4;$számláló++) {
  echo "Az angyalok egyik tagja
            $csapat[$számláló]<br>\n";
}
?>

<p>egyszerű példa</p>
<?php
for ($i = 0; $i < 10; $i++) { //Kezdőérték: 0; amíg $i kisebb, mint 10, növeljük eggyel
        echo $i . ' '; // Kiírja az aktuális $i értékét
}
?>
<p>Több kifejezéses konstrukcióra példa:</p>
<?php
for ( $j = 10, $i = 1 ; $i < 10; $j++, $i++) { //Kezdőértékek felvétele: $j és $i; amíg $i kisebb, mint 10, növeljük eggyel a $j-t és az $i-t is
        echo '$i: '. $i . ' $j: ' . $j . ' '; // Kiírja az aktuális $i és $j értékét
}
?>
    <hr>
    <h1>foreach</h1>

    <?php
$kedvencek = array("gyümölcs"=>"banán","zöldség"=>"répa","hús"
     =>"marhasült");
foreach($kedvencek as $kaja => $típus) {
    echo "$kaja - $típus<br>\n";
}
?>
</body>
</html>
