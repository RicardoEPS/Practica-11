<!DOCTYPE hmtl>
<html lang="es">
    <head>
        <title>Prática 11 Php</title>
    </head>
    <body>
        <?php
            //Ricardo Enrique Pérez Sánchez
            //Usando variables en PHP
            echo "<h1>Variables</h1>";
            $Nombre = 'Ricardo Enrique';   //Declaracion de variables ------ $ Variables de tipo Cadena cuando tiene '' o ""
            $Apellidos = 'Pérez Sánchez';   //Declaracion de variables se pueden utilizar '' o "" ----- Tipo Cadena
            $Edad = 20;     //Tipo Entero
            $Salario = 12345.50;    //Tipo Decimal
            $FechaDeNacimiento = '01/07/1996';
            $Estatus = true;    //Tipo Booleano

            echo $Nombre."<br>";
            echo $Apellidos."<br>";
            echo 'Nombre Completo: '.$Nombre.' '.$Apellidos."<br>"; // Concatenacion de Texto y variables
            echo 'Tu Edad Es: '.$Edad."<br>";
            echo 'Tu Salario Es: '.$Salario."<br>";

        ?>
        <h1>OPERADORES ARITMÉTICOS</h1>
        <?php
            $a = 5;
            $b = 3;
            $Suma = $a + $b;
            $Resta = $a - $b;
            $Multiplicacion = $a * $b;
            $Division = $a / $b;
            echo 'Vaiable a = '.$a.' && '.'Variable b = '.$b."<br>";
            echo 'Suma: '.$Suma."<br>";
            echo 'Resta: '.$Resta."<br>";
            echo 'Multiplicacion: '.$Multiplicacion."<br>";
            echo 'Division: '.$Division."<br>"."<br>";
            echo 'La Suma de: '.$a.' + '.$b.' Es: '.$Suma."<br>";
            echo 'La Resta de: '.$a.' + '.$b.' Es: '.$Resta."<br>";
            echo 'La Multiplicacion de: '.$a.' + '.$b.' Es: '.$Multiplicacion."<br>";
            echo 'La Division de: '.$a.' + '.$b.' Es: '.$Division."<br>";
        ?>
    </body>
</html>