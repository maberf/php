<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP Trainning</title>
</head>
<body>
<div>
<?php
  $nome ="UiLsoN UEliNton"; //só ASCII
  $nome2 =strtolower($nome);
  echo "14- Nome é $nome2";

  $nome ="UiLsoN UEliNton";
  $nome3 =strtoupper($nome);
  echo "</br>15- Nome é $nome3";

  $nome4 =ucfirst($nome2); //nome todo já em minúscula
  echo "</br>16- Nome é $nome4";

  $nome5 =ucwords($nome2); //nome todo já em minúscula
  echo "</br>17- Nome é $nome5";

  $nome6 =strrev($nome2); //nome todo já em minúscula
  echo "</br>18- Nome é $nome6";

  $frase1 = "Estou estudando PHP.";
  $pos1 = strpos($frase1, "PHP"); //case sensitive
  echo "<br>19- String PHP encontrada na posição $pos1";

  $frase2 = "Estou estudando PHP.";
  $pos2 = stripos($frase2, "php"); // não é case sensitive
  echo "<br>20- String php encontrada na posição $pos2";

  $frase3 = "Estou estudando PHP e muito PHP.";
  $cont = substr_count($frase3, "PHP");
  echo "<br>21- PHP encontrado $cont vezes";

  $site = "Padaria do Portuga";
  //fatiamentos de string - substrings
  $sub0 = substr($site,0,7);
  echo "<br>22.1- $sub0";
  $sub1 = substr($site,7);
  echo "<br>22.2- $sub1";
  $sub2 = substr($site,-7);
  echo "<br>22.3- $sub2";
  $sub3 = substr($site,-7,3);
  echo "<br>22.3- $sub3";

  $nome ="Suelen";
  //completa com espaços
  $nomeaj =str_pad($nome,30," ",STR_PAD_LEFT);
  echo "<br>23- A $nomeaj é funkeira!";

  $txt = str_repeat("PHP",3);
  echo "<br>24- O texto gerado foi $txt.";

  $frase4 = "Estou estudando Java.";
  //só replace é case sensitive, ireplace não
  $frase4aj = str_ireplace("java","PHP",$frase4);
  echo "<br>25- $frase4aj";

?>   
</div>
</body>
</html>
 