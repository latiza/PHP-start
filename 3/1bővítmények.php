<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<!--PHP bővítmények kilistázása
A  legtöbb PHP szerverkörnyezetben az összeállított PHP szerver minden bővítménykönyvtár
fájlait tartalmazza. Előfordulhat, hogy nincs mind aktiválva, hogy a memóriával takarékoskodjanak.
Ilyenkor a szükséges bővítményt Neked kell aktiválni. 
Keresd meg a php.ini konfigurációs fájlt (xampp - apache - PHP php.ini )
Ebben van meghatározva, hogy milyen bővítményeket kell telepíteni.
Minden egyes bővítmény hivatkozását egyetlen egy sor tartalmazza.
Windows: extension=név.dll
Linux: extension=név.so
Bővítmények formátuma: php_név

-->
<?php
phpinfo();
?>


</body>
</html>
