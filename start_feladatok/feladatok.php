<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //kiírja az aktuális fájlod nevét
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
echo '<hr>';

//legyen az első betű piros
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;
echo '<hr>';

// Írj egy egyszerű PHP programot az e-mailek érvényességének ellenőrzésére.

$email = "mail@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
     echo '"' . $email . '" = Valid'."\n";
}
else 
{
     echo '"' . $email . '" = Invalid'."\n";
}
echo '<hr>';

// Jeleníts meg fizetéseket egy táblázatban php-vel

$a=1000;
$b=1200;
$c=1400;
echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=blue>Mr. A fizetése:</td> <td>$a$</font></td></tr> 
<tr> <td><font color=blue> Mr. B fizetése:</td> <td>$b$</font></td></tr>
<tr> <td><font color=blue>Mr. C fizetése:</td> <td>$c$</font></td></tr>
</table>";
echo '<hr>';

/*Írjon egy PHP szkriptet egy weboldal forráskódjának megjelenítésére (pl. "Http://www.lowpower.com/")*/
$all_lines = file('https://www.lowpower.hu/');
    foreach ($all_lines as $line_num => $line)
     {
         echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
     }
echo '<hr>';

//írj egy ciklust amit ezt a kimenetet adja: A01 A02 A03 A04 A05
$d = 'A00';
  for ($n=0; $n<5; $n++)
{
echo ++$d ."\n";
}
echo '<hr>';

    ?>
</body>
</html>
