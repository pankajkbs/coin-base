<?php
require 'php-binance-api.php';
require 'binance-api-single.php';

$api = new Binance\API("vmPUZE6mv9SD5VNHk4HlWFsOr6aKE2zvsw0MuIgwCIPy6utIco14y7Ju91duEh8A","NhqPtmdSJYdKjVHjA7PZj4Mge3R5YNiP1e3UZjInClVN65XAbvqqM6A7H5fATj0j");

// Get latest price of a symbol
$ticker = $api->prices();
$data1 = $ticker['ETHBTC'];
$data2 = $ticker['LTCBTC'];
$data3 = $ticker['XRPBTC'];

$data = array();
$data[] = (object) array('key' => 'ETH/BTC','value' => $data1);
$data[] = (object) array('key' => 'LTC/BTC' ,'value' => $data2);
$data[] = (object) array('key' => 'XRP/BTC' ,'value' => $data3);

echo json_encode($data);
