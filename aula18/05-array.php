<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP Trainning</title>
</head>
<body>
<div>
    <pre>
    <?php
        $cad= array( "nome"=>"Dienefer",
                   "idade"=>23,
                   "peso"=>65.3);
    //acrescenta elemento
        $cad["vegana"] = true;
        print_r($cad);
    //varre os elementoe e imprime   
        foreach($cad as $k => $c) {
            echo "Campo $k contem $c</br>";
        }
    ?>   
    </pre>
</div>
</body>
</html>
 