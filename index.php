<?php
    require_once('libs/Smarty.class.php');

    $smarty = new Smarty();
    
    $smarty->assign('marca',"SneakerFever");

    $smarty->display('templates/header.tpl');
    $smarty->display('templates/nav.tpl');

    function showIndex(Smarty $smarty) {
        $smarty->assign('pagina',"Inicio");
        $smarty->display('templates/index.tpl');
    }

    function showTienda(Smarty $smarty) {
        $smarty->assign('pagina',"Tienda");
        $smarty->display('templates/tienda.tpl');
    }

    function showContacto(Smarty $smarty) {
        $smarty->assign('pagina',"Contacto");
        $smarty->display('templates/contacto.tpl');
    }

    $smarty->display('templates/footer.tpl');
?>