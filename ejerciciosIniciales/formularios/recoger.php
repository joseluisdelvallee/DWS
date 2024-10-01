<?php

    //print_r($_POST);
    //echo '<br />';

    /*
    foreach ($_POST as $indice => $valor) {
        echo $indice.': '.$valor.'<br>';
    }
    */

    // Recoger datos a variables
    if(!empty($_POST['nombre'])) {
        echo 'Nombre: '.$_POST['nombre'].'<br />';
    }

    if(!empty($_POST['apellidos'])) {
        echo 'Apellidos: '.$_POST['apellidos'].'<br />';
    }

    if(isset($_POST['sexo'])) {
        echo 'Sexo: '.$_POST['sexo'].'<br />';
    }
    
    if(!empty($_POST['nomDesastre'])) {
        echo 'Nombre Desastre: '.$_POST['nomDesastre'].'<br />';
    }

    if(isset($_POST['tipo'])){
        echo 'Tipo: '.$_POST['tipo'].'<br />';
    }

    if(!empty($_POST['descripcion'])) {
        echo 'Descripcion: '.$_POST['descripcion'].'<br />';
    }

    if(isset($_POST['notificaciones'])) {
        echo 'Notificaciones: ';
        foreach ($_POST['notificaciones'] as $notif) {
            echo $notif.' ';
        }
        echo '<br />';
    }
?>