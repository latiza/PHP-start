<?php
$het_napja = 9;

switch($het_napja) {
	case 1: $nap = "Hétfő";     break;
	case 2: $nap = "Kedd";      break;
	case 3: $nap = "Szerda";    break;
	case 4: $nap = "Csütörtök"; break;
	case 5: $nap = "Péntek";    break;
	case 6: $nap = "Szombat";   break;
	case 7: $nap = "Vasárnap";  break;
	default: $nap = "Nincs ilyen nap";
}

print $nap;
?>
