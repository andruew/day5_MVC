<?php

function displayList ($data) {

    include MODELS_PATH . 'goods.model.php';

    $data = array(
        'products' => getList()
    );

    return renderTemplate ('goods\list.ctp', $data);

}