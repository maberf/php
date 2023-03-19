<!DOCTYPE html>
<html>
<head>
  <?php /*código php no CSS*/
    $txt = isset($_GET["txt"])?$_GET["txt"]:"Texto Genérico";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"14pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
  ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP Trainning</title>
  <style>
    span.texto {
      font-size: <?php echo $tam; ?>; /*código php aninhado*/
      color: <?php echo $cor; ?>;
    }
  </style>
</head>
<body>
<div>
  <?php
        echo "<span class ='texto'>$txt</span>";
  ?>
   <a href="03-formulario.html">Voltar</a>
</div>
</body>
</html>
 