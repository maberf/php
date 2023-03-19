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
        echo"1-";
        //notação com uso de arrows
        $v = array(0=>"C",1=>"A",2=>"D",3=>"B");
        print_r($v);
        echo"</br>1-Vetor tem ".count($v). " elementos.</br>";
        echo"2-";
        array_push($v,"X"); //insere no final, igual $v[] = "X";
        print_r($v);
        echo"</br>2-Vetor tem ".count($v). " elementos.</br>";
        echo"3-";
        array_pop($v); //retira "X" do final;
        print_r($v);
        echo"</br>3- Vetor tem ".count($v). " elementos.</br>";
        echo"4-";
        array_unshift($v,"X"); //insere "X" no início 
        print_r($v);
        echo"</br>5-";
        array_shift($v); //retira "X" do início
        print_r($v);
        echo"</br>6-";
        asort($v); //ordenação associativa em ordem crescente pelos valores, não muda índice
        print_r($v);
        echo"</br>7-";
        arsort($v); //ordenação associativa em ordem reversa pelos valores, não muda índice
        print_r($v);
        echo"</br>8-";
        sort($v); //ordena em ordem crescente, muda índice
        print_r($v);
        echo"</br>9-";
        rsort($v); //ordena em ordem reversa, muda índice
        print_r($v);
        echo"</br>10-";
        krsort($v); //ordenação por chave (índice) em ordem reversa
        print_r($v);
        echo"</br>11-";
        ksort($v); //ordenação por chave (índice) em ordem crescente
        print_r($v);
    ?>
</div>
</body>
</html>
