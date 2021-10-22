<?php

    //require once 'index.php'
    require_once ('\index.php');

    // lee la acción
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; // acción por defecto si no envían
    }

    // parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
    $params = explode('/', $action);

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'home': 
            showIndex($smarty);
            break;
        case 'tienda':
            showTienda($smarty);
            break;
        case 'contacto':
            showContacto($smarty);
            break;
        default: 
            echo('404 Page not found');   // si no encuentra la acción
            break;
    }
