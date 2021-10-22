<?php
    require_once('libs/Smarty.class.php');

    $smarty = new Smarty();

    function showIndex(Smarty $smarty) {
        $smarty->assign('marca',"SneakerFever");
        $smarty->assign('pagina',"Inicio");
        $smarty->display('templates/header.tpl');
        $smarty->display('templates/nav.tpl');
        $smarty->display('templates/index.tpl');
        $smarty->display('templates/footer.tpl');
    }

    function showTienda(Smarty $smarty) {
        $smarty->assign('marca',"SneakerFever");
        $smarty->assign('pagina',"Tienda");
        $smarty->display('templates/header.tpl');
        $smarty->display('templates/nav.tpl');
        $smarty->display('templates/tienda.tpl');
        $smarty->display('templates/footer.tpl');
    }

    function showContacto(Smarty $smarty) {
        $smarty->assign('marca',"SneakerFever");
        $smarty->assign('pagina',"Contacto");
        $smarty->display('templates/header.tpl');
        $smarty->display('templates/nav.tpl');
        $smarty->display('templates/contacto.tpl');
        $smarty->display('templates/footer.tpl');
    }
?>