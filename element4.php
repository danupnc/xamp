




 <?php
echo '<b>'.("            WEB page GARLA_EUGENIU").'<b>'.'<b>'.'<b>'."<br
echo ("            22.12.2019      ").'<b>'.'<hr>';
echo ("            autor: Garla Eugeniu").'<b>'.'<b>'.'<br>'.'<hr>';
include 'test.php';

echo ("<hr>");
for ($i=1;$i<=2;$i++){};
?>


<?php
require_once 'meniu.php';
?>

<?php

require "connectBD.php";

?>

 <!DOCTYPE html>
 <html>
 <head>
 <title> SITE MODEL </title>
 <link rel="stylesheet" type="text/css" href="style1.css"
 </head>
 <body bgcolor="green"> 
 <?php
 echo $meniu;

 $sql ="SELECT * FROM garla";
 $result =mysqli_query($connect_BD, $sql);

 echo ("Lista PASSWORD din tabelul Bazei de Date")."<b>".'<b>'.'<br>';
 echo ("**************************************")."<b>".'<b>'.'<br>';

 while ($row =$result->fetch_assoc()){
 
 echo (" password : ");
 echo $row["password"].'<b>'.'<br>';
 }

 echo ("<hr>");echo ("<hr>");echo ("<hr>");

 echo ("Rezultatul operatiilor efectuate : ").'<br>'.'<br>';
 
require "style.css";

echo ("<hr>");echo ("<hr>");echo ("<hr>");echo ("<hr>");
?>


 
 </body>
 </html>







