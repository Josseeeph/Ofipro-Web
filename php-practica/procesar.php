<?php
    echo "<h2>¡Cotización recibida con éxito!</h2>";
    echo "<hr>";

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $servicio = $_POST["servicio"];
    $detalle = $_POST["detalle"];

    echo "<p><strong>Cliente:</strong> " . $nombre . "</p>";
    echo "<p><strong>Correo electrónico:</strong> " . $correo . "</p>";
    echo "<p><strong>Servicio requerido:</strong> " . $servicio . "</p>";
    echo "<p><strong>Detalle del trabajo:</strong> " . $detalle . "</p>";
?>