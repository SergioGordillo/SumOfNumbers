<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Básico 1 Formularios de PHP</title>
    <!-- Teniendo dos input de type number, recógelos vía POST, súmalos y muestra el resultado -->
</head>
<body>

    <?php
        if(isset($_POST['enviar'])){

            $numero1=$_POST['num1'];
            $numero2=$_POST['num2'];

            $suma=$numero1+$numero2; 

        }




    ?>





    <form method="post">
        <label for="num1">Inserta el primer  número</label>
        <input type="number" id="num1" name="num1"/>

        <label for="num1">Inserta el segundo número</label>
        <input type="number" id="num2" name="num2"/>

        <input type="submit" name="enviar" value="sumar"/>
    </form>

    <p>
        <?php

            if(isset($_POST['enviar'])){
                echo $suma; 
            }


        ?>


    </p>
    
</body>
</html>