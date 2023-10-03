<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "Practica 1"; 
        ?>
    </title>
        
</head>
<body>
    <?php
        $nombre = "Kurt";
        $apellido = "Cagle";
        $edad = 40;
        $fecha = new DateTime();
        $fecha->setDate(1983, 12, 5);
        $telefonos = "6543456 - 933332211";
        $direccion = "Carrer de turin, 15";
        $email = "kurt.cagle@example.com";
        $trabaja = true;
        $mide = 1.67;
    ?>

    <h1>
        <?php echo "Descrivint a ".$nombre." ".$apellido; ?>
    </h1>

    <h2>
        <?php echo "Les dades de ".$nombre." son:" ; ?>
    </h2>
   
    <ul>
        <li>Es diu: <?php echo $nombre; ?></li>
        <li>Te <?php echo $edad; ?> anys</li>
        <li>Va nexixer l'any: <strong><?php echo $fecha->format('Y-m-d'); ?></strong></li>
        <li>El seus telèfons són: <?php echo $telefonos; ?></li>
        <li>Viu <a href="tel:+"></a> <?php echo $direccion; ?></li>
        <li>El seu email és: <?php echo $email; ?></li>
        <li>Treballa: <?php echo $trabaja ? "Sí" : "No"; ?></li>
        <li>I midei <?php echo $mide; ?> metros</li>
    </ul>

    <?php
        // Definimos una constante IVA con un valor específico (por ejemplo, 21%)
        define('IVA', 0.21);

        // Declaramos un array de objetos de cursos
        $cursos = [
            [
                'ID' => 1,
                'NOM' => 'PHP',
                'DESC' => 'Introducció a PHP',
                'PREU' => 15.5
            ],
            [
                'ID' => 2,
                'NOM' => 'Laravel',
                'DESC' => 'Laravel per experts',
                'PREU' => 30
            ],
            [
                'ID' => 3,
                'NOM' => 'Django',
                'DESC' => 'Dominant Django',
                'PREU' => 10
            ]
        ];

        $longitud = count($cursos);
    ?>

    <?php echo "<h1>Llista de cursos</h1>"; ?>
    <?php echo "<h2>Numero de cursos apuntats: ".$longitud."</h2>" ; ?>
    <div style="border: 1px solid black;">
        <?php
            // Recorremos el array de cursos con un bucle for
            for ($i = 0; $i < count($cursos); $i++) {
                echo "<div style='border: 1px solid black; '>";
                echo "<h3>".$cursos[$i]['NOM'] . "</h3><br>";
                echo "<p>".$cursos[$i]['DESC'] . "</p><br>";
                
                // Calculamos el precio con IVA
                $preuSenseIVA = $cursos[$i]['PREU'];
                $preuAmbIVA = $preuSenseIVA + ($preuSenseIVA * IVA);
                echo "<p>El preu del libre amb IVA: ".$preuAmbIVA . "</p><br>";
                echo "</div>";
            }    
        ?>
    </div>
</body>
</html>