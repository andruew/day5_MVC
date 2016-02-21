<?php

function renderTemplate ($temaplatePath, $data = array() ) {
    ob_start();
    include TEMPLATE_PATH . $temaplatePath;
    return ob_get_clean();
}