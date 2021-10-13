<?php
require_once('libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->assign('marca',"SneakerFever");
$smarty->display('templates/header.tpl');
$smarty->display('templates/footer.tpl');


?>