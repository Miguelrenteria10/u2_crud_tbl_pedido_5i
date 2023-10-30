<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['editar_datos'])) {
    // ambil data dari form
    $editar_Id_pedido = $_POST['editar_Id_pedido'];
    $editar_id_producto = $_POST['editar_id_producto'];
    $editar_id_cliente = $_POST['editar_id_cliente'];
    $editar_cantidad = $_POST['editar_cantidad'];
    $editar_precio_unidad = $_POST['editar_precio_unidad'];
    $editar_subtotal = $_POST['editar_subtotal'];
    $editar_descuento = $_POST['editar_descuento'];
    $editar_impuesto = $_POST['editar_impuesto'];

    // query
    $sql = "UPDATE pedido SET id_producto='$editar_id_producto', id_cliente='$editar_id_cliente', cantidad='$editar_cantidad', precio_unitario='$editar_precio_unidad', subtotal='$editar_subtotal', descuento='$editar_descuento', impuesto='$editar_impuesto' WHERE id_pedido = '$editar_Id_pedido'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?editar=Exitoso');
    else
        header('Location: ./index.php?editar=Error');
} else
    die("Acceso prohibido....");
