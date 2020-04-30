<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página em PHP</title>
</head>
<body>
<div class="container">
    <div class="row">
    <div class="clo-12"><h1>Titulo</h1></div>
    <div>
        <?php

        require_once "controller/WindowController.php";
            $window[1]= new WindowController("Alerta");

            echo "<pre>";
            var_dump($window[1]);

        ?>
    
    </div>
    </div>
</div>
    
</body>
</html>