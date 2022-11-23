<?php
$kimenet = "<table style=\"border:solid 2px black\">";
for ($sor=1; $sor<=10; $sor++) {
	$kimenet.= "\t<tr>\n";
	for ($oszlop=1; $oszlop<=10; $oszlop++) {
		$kimenet.= "\t\t<td>".($sor*$oszlop)."</td>\n";
	}
	$kimenet.= "\t</tr>\n";
}
$kimenet.= "</table>\n";
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Szorzótábla</title>
</head>

<body>
<?php print $kimenet; ?>
</body>
</html>