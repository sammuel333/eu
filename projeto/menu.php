<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    echo "<a href='inicio.php' style='color:gray;text-decoration:none;font-weight:bold;'>HOME</a>";
    echo "<b><font color='gray'> | </font></b>";
    echo "<a href='clientes.php' style='color:gray;text-decoration:none;font-weight:bold;'>clientes</a>";
    echo "<b><font color='gray'> | </font></b>";
    echo "<a href='salgados.php' style='color:gray;text-decoration:none;font-weight:bold;'>salgados</a>";
    echo "<b><font color='gray'> | </font></b>";
    echo "<a href='pedidos.php' style='color:gray;text-decoration:none;font-weight:bold;'>pedidos</a>";
?>