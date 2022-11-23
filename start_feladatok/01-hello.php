<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Szia Uram!</title>
</head>

<body>
<?php
print "Szia Uram! PHP oklevél érdekel?";
//komment
#ez is komment
/*
ez meg 
több soros 
komment */
?>


<!--
utasítások végén pontosvessző szerepel mindig, ha a kezdő és záró között szerepel php kód, 
akkor az értelmező azt látja, és ami ezen kívül esik, azt nem fogja értelmezni, 
hanem sima szöveget meg fog jeleníteni.

ami szöveg és nem tudja értelmezni a php mint utasítást csak 
idézőjelek közé tudjuk csak kiíratni

A php beágyazott nyelv, ami azt jelenti lehet körülötte bármiféle html tartalom. 
Olyan php fájlt is készíthetünk, amiben csak html van, ilyenkor a php értelmező megnézi a kódot, 
majd zsebre teszi a kezét, mert látja, hogy neki nincsen dolga, ha a html kódban php-t talál, 
akkor viszont értelmezi azt és átfordítja.

El is különítheted a html-től, úgy hogy tegyük a html-el kód elé
arra figyeljünk, hogy az utolsó >< és első össze érjen

Ha csak a kódot olvastatjuk be, akkor az ékezettekkel probléma lesz, 
ezért az utf-8 ipari sztendert kell használunk.

itt találsz kifejezésket amivel tesztelhetsz: 
    https://hu.wikipedia.org/wiki/%C3%81rv%C3%ADzt%C5%B1r%C5%91_t%C3%BCk%C3%B6rf%C3%BAr%C3%B3g%C3%A9p
-->
</body>
</html>