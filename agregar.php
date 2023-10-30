<?php

include("config.php");

if (isset($_POST['agregar'])) {
    // recuperar datos del formulario
    $id_producto = $_POST['id_producto'];
    $id_cliente = $_POST['id_cliente'];
    $cantidad = $_POST['cantidad'];
    $precio_unitario = $_POST['precio_unitario']; // Corregido el nombre de la variable
    $subtotal = $_POST['subtotal']; // Corregido el nombre de la variable
    $descuento = $_POST['descuento'];
    $impuesto = $_POST['impuesto'];

    // query
    $sql = "INSERT INTO pedido(id_producto, id_cliente, cantidad, precio_unitario, subtotal, descuento, impuesto) 
            VALUES('$id_producto', '$id_cliente', '$cantidad', '$precio_unitario', '$subtotal', '$descuento', '$impuesto')";
    $query = mysqli_query($db, $sql);

    // Comprueba si la consulta se guardó correctamente
    if ($query)
        header('Location: ./index.php?estado=Exitoso');
    else
        header('Location: ./index.php?estado=Error');
} else
    die("Acceso prohibido....");
?>