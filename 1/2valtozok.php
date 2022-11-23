<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Változók deklarálása a PHP-ben</h3>
    <ul>
        <li>a php-ben a változók neve előtt $ jel áll</li>
        <li>betűvel vagy aláhúzás jellel kell kezdened</li>
        <li>csak betűket, számokat vagy aláhúzás jeleket tartalmazhatnak</li>
        <li>a változó neve nem tartalmazhat szóközöket és más speciális karaktereket</li>
        <li>kis és nagybetűket megkülönbözeteti (mint a js-ben) erre figyelni kell nagyon, mert sok hiba forrása lehet!!!</li>
        <li>a forráskódban látható példában, a teszt nem ugyanaz mint a Teszt</li>
        <br>
    </ul>
    <?php 
    $teszt;
    $Teszt;
    $Teszt1;
    $_másik_teszt;
    $érték1 =10;
    $érték2 =20;
    echo $érték = "$érték1 + $érték2";
    ?>
    <p>A változókat csak egyszerűen használjuk, nem kell eléjük let vagy const;<br> viszont első alkalommal mindenképen egy assign (értékadás) utasításban kell használnod, így a változóhoz hozzárendelve egy érték. <br>
     Ha elfelejted a php figyelmeztető üzenettel jelez a böngészőben.
    </p><br>
    <?php 
    echo $teszt = "Ez egy teszt string, aminek ne felejsd le a végéről a pontosvesszőt.";
    ?>
    
</body>
</html>
