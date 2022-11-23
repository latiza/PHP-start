<?php
$het_napjai = array("", "hétfő", "kedd", "szerda", "csütörtök", "péntek", "szombat", "vasárnap");
print date("Y. m. d., ").$het_napjai[date("N")];
?>