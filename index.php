<?php
require_once('libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->assign('marca',"SneakerFeverr");
$smarty->display('templates/header.tpl');
$smarty->display('templates/nav.tpl');
$smarty->display('templates/footer.tpl');


?>