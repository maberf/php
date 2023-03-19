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
        <table border="1"><tr>
    <?php
        $c= range(5,15,2);
        foreach ($c as $v) {
            echo "<td> $v ";
        }
    ?>
        </table>
    </pre>
</div>
</body>
</html>
 