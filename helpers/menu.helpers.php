<?php

function getMenu() {

    $menu = array (

        'Главное' => array (
            'contoller' => 'goods',
            'action' => 'displayList'
        ),

        'Про нас' => array (
            'contoller' => 'pages',
            'action' => 'displayAboutUs'
        ),

        'Список товаров' => array (
            'contoller' => 'goods',
            'action' => 'displayList'
        )
    );

    foreach ( $menu as &$item ) {
        $item['url'] = getUrl($item['contoller'], $item['action']);
    }

    unset($item);

    ob_start();
    include TEMPLATE_PATH . 'helpers\menu.ctp';
    $html = ob_get_clean();

    return $html;
}

function getUrl($controller, $action, $data = array()) {
    $url = "http://localhost/academy/eshop/?controller={$controller}&action={$action}";
    return $url;
}