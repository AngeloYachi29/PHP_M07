<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "Practica 3"; 
        ?>
    </title>
       
</head>
<body>
    <?php
        // Declarar un array para representar las mesas del restaurante
        $mesas = array(); 

        // Inicializar las mesas 
        for ($i = 0; $i < 10; $i++) 
        $mesas[$i] = rand(0, 5);
    ?>
    <ul>
        <?php
            echo "<h3>Les taules del restaurant:</h3>";
            // Mostrar el estado actual de las mesas en la terminal
            for ($i = 0; $i < 10; $i++) {
                if ($mesas[$i] == 0) {
        ?>    
                    <li> <?php echo "La taula $i està buida.";?> </li><br>
        <?php
                } elseif ($mesas[$i] == 5) {
        ?>
                    <li> <?php echo "La taula $i està plena.";?> </li><br>
        <?php
                } else {
        ?>
                    <li> <?php echo "La taula $i té " . $mesas[$i] . " comensals.";?> </li><br>
        <?php
                }
            }
        ?>
    </ul>

    <ul>
        <?php
            echo "<h3>Les habitacio del hotel:</h3>";
            // Inicializar la matriz para representar las habitaciones del hotel
            $hotel = array();

            // Crear el hotel con 5 plantas y 10 habitaciones por planta
            for ($planta = 0; $planta < 5; $planta++) {
                for ($habitacion = 1; $habitacion <= 10; $habitacion++) {
                    
                    $hotel[$planta][$habitacion] = rand(0, 4);;
                }
            }

            // Función para mostrar el estado actual del hotel
            function mostrarEstadoHotel($hotel) {
                for ($planta = 0; $planta < 5; $planta++) {
                    for ($habitacion = 1; $habitacion <= 10; $habitacion++) {
                        $clientes = $hotel[$planta][$habitacion];
                        echo "<li>Planta $planta, Habitación $habitacion: $clientes clientes </li><br>" ;
                    }
                }
            }
            // Mostrar el estado del hotel
            mostrarEstadoHotel($hotel);

        ?>
    </ul>
</body>
</html>