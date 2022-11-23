<html>  
<head>  
<title>ShotDev.Com Tutorial</title>  
</head>  
<body>  

<?php  
$date1 = "2021-03-07";
$date2 = "2021-04-01";
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
printf("%d év, %d hónap, %d nap a tavaszi szünetig\n", $years, $months, $days);
?>  


</body>  
</html> 
