<?php
    echo "<h2>Cita reservada en Óptica Mirasol</h2>";

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $consulta = $_POST["consulta"];

    echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
    echo "<p><strong>Correo:</strong> " . $correo . "</p>";
    echo "<p><strong>Consulta:</strong> " . $consulta . "</p>";

    echo "<h3>Nuestros servicios:</h3>";
    
    $servicios = [
        "Examen de vista - Bs 50",
        "Armazón clásico - Bs 180",
        "Lentes de sol - Bs 120"
    ];

    echo "<ul>";
    foreach ($servicios as $servicio) {
        echo "<li>" . $servicio . "</li>";
    }
    echo "</ul>";

    echo "<hr>";
    echo "<p>Te atiende Jose Montes Fabrica</p>";
?>