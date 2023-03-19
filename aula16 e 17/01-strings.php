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
  $prod ="leite";
  $preco = 4.5;
  printf("1- O %s custa R$ %.2f", $prod, $preco);

  $x[0] = 4;
  $x[1] = 3;
  $x[2] = 8;
  echo "</br>2.1- "; //número do item e quebra de linha
  print_r($x);
  echo "</br>2.2- ";
  var_dump($x);
  echo "</br>2.3- ";
  var_export($x);

  $t = "Aqui temos um texto gigante em PHP que vai mostrar o funcionamento da função wordwrap.";
  $r = wordwrap($t, 40, "</br>\n", false); //quebra em número de caracteres, </br> é visual, \n quebra no código fonte. true quebra no número exato de caracteres, false quebra por palavras.
  echo "<br>3- $r";

  $txt ="CDF estudando!";
  $tam =strlen($txt);
  echo "<br>4- $tam";

  $nome ="      José da Silva   ";
  //retira espaços inúteis -errados- antes e depois do nome
  $nomeaj =trim($nome);
  $tnome = strlen($nome);
  $tnomeaj = strlen($nomeaj);
  echo "<br>5- $nomeaj, tamanho antes = $tnome, tamanho depois = $tnomeaj";

  $nome ="      José da Silva   ";
  //retira espaços antes -left- do nome
  $nomeaj =ltrim($nome);
  $tnome = strlen($nome);
  $tnomeaj = strlen($nomeaj);
  echo "<br>6- $nomeaj, tamanho antes = $tnome, tamanho depois = $tnomeaj";

  $nome ="      José da Silva   ";
  //retira espaços depois -right- do nome
  $nomeaj =rtrim($nome);
  $tnome = strlen($nome);
  $tnomeaj = strlen($nomeaj);
  echo "<br>7- $nomeaj, tamanho antes = $tnome, tamanho depois = $tnomeaj";

  $frase = "Estou estudando PHP.";
  //opção 0 - quantidade de palavras
  $cont0 = str_word_count($frase,0);
  echo "<br>8.1- $cont0";
  //opção 1 - vetor com cada palavra um elemento
  $cont1 = str_word_count($frase,1);
  echo "<br>8.2- ";
  print_r($cont1);
  //opção 2 - vetor com posição de cada palavra
  $cont2 = str_word_count($frase,2);
  echo "<br>8.3- ";
  print_r($cont2);

  $site = "Estou estudando PHP";
  //sintaxe mais moderna do str_word_count opção 1
  $vetor = explode(" ", $site);
  echo "<br>9- ";
  print_r($vetor);

  $nome = "creuza";
  //joga cada letra num índice
  $vetor = str_split($nome);
  echo "<br>10- ";
  print_r($vetor);

  $vetor1[0] = "Estou";
  $vetor1[1] = "estudando";
  $vetor1[2] = "PHP";
  //opera ao contrário do explode
  $texto1 = implode(" ", $vetor1);
  echo "<br>11- ";
  print_r($texto1);

  $vetor2[0] = "Estou";
  $vetor2[1] = "estudando";
  $vetor2[2] = "PHP";
  //opera como o implode
  $texto2 = join(" ", $vetor2);
  echo "<br>12- ";
  print_r($texto2);

  $letra = chr(67);
  echo "<br>13.1- Letra de código 67 é $letra";
  $cod =ord("C");
  echo "<br>13.2- Código da letra C é $cod";

?>   
    
</div>
</body>
</html>
 