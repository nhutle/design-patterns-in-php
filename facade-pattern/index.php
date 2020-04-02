<?php

require __DIR__ . '/../vendor/autoload.php';

$_GET['productId'] = 2;
$productId = $_GET['productId'];
$order = new OrderFacade($productId);
$order->generateOrder();