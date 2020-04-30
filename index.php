<!DOCTYPE html>
<html lang="pt-br">
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
        

        require_once "app/controller/WindowController.php";
             
            $window= new WindowController("Alerta",true);
            $window->alteraTamanho("20 x 30");

            echo "<pre>";
            var_dump($window);
        ?>
    
    </div>
    </div>
</div>
    
</body>
</html>