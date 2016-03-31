<?php

/* including settings */
include 'config.php';

/* including function */
include 'libs.php';

$controller = 'goods';
if( isset( $_GET['controller'] ) ) {
    $controller = $_GET['controller'];
}
/* test commit */
$action = 'displayList';
if( isset( $_GET['action']) ) {
    $action = $_GET['action'];
}

$controllerPath = CONTROLLERS_PATH . $controller . '.controller.php';

if ( ! file_exists( $controllerPath ) ) {
    die('Contoller wasnt found');
}

include $controllerPath;

$content = call_user_func($action, $_GET);

/* including required helpers */
include 'helpers/menu.helpers.php';

$data = array (
    'siteTitle' => SITE_TITLE,
    'menu' => getMenu(),
    'content' => $content
);

/* including main template */
include 'templates/index.ctp';