<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/* -- Gdax classes,files included ---*/
require_once('vendor/autoload.php');
use Hellovoid\Gdax\Configuration;
use Hellovoid\Gdax\Client;

/* -- Binance files included ---*/
require 'binance/php-binance-api.php';
require 'binance/binance-api-single.php';


/* ---- Gdax Api ------*/
$configuration = Configuration::apiKey('b3b502a8d8c7a04165c2b596f69eabf2', 'TeKeFbyW2eWRsFfmvanpTKHuDfJElnTKOtOsWcyY/WW9euzPD2sFL8P93aHA2yP+DTa3vGQibtKnnOOUnw0eJQ==', '28poy485704aeoiqqwli85b3xr');
$client = Client::create($configuration);
$price = $client->getProductLast24HrStats('LTC-BTC');
$data1 = $price['last'];

/* ------- Binance Api -----*/
$api = new Binance\API("vmPUZE6mv9SD5VNHk4HlWFsOr6aKE2zvsw0MuIgwCIPy6utIco14y7Ju91duEh8A","NhqPtmdSJYdKjVHjA7PZj4Mge3R5YNiP1e3UZjInClVN65XAbvqqM6A7H5fATj0j");
$ticker = $api->prices();
$data2 = $ticker['LTCBTC'];
$data3 = $data1/$data2 * 100;

$data = array();
$data = (object) array('key1'=> 'LTC/BTC GDAX', 'value1' => $data1 ,'key2'=> 'LTC/BTC GDAX', 'value2' => $data2 , 'key3'=> 'diff', 'value3' => $data3);

//print_r($data);
echo json_encode($data);

?>

