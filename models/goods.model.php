<?php

function getList() {
    $goods = array (
        array(
            'title' => 'Printer',
            'price' => '200',
            'image' => 'http://ecx.images-amazon.com/images/I/814TfHH1m0L._SL1500_.jpg'
        ),
        array(
            'title' => 'Xerox',
            'price' => '400',
            'image' => 'http://ecx.images-amazon.com/images/I/814TfHH1m0L._SL1500_.jpg'
        ),
        array(
            'title' => 'Laptop',
            'price' => '150',
            'image' => 'http://www.riskmanagementmonitor.com/wp-content/uploads/2014/12/Laptop1.jpg'
        ),
        array(
            'title' => 'Keyboard',
            'price' => '20',
            'image' => 'http://d0od.wpengine.netdna-cdn.com/wp-content/uploads/2012/08/chromebox-keyboard.jpg'
        )
    );

    return $goods;
}