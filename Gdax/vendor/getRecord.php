<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('autoload.php');
use Hellovoid\Gdax\Configuration;
use Hellovoid\Gdax\Client;

$configuration = Configuration::apiKey('b3b502a8d8c7a04165c2b596f69eabf2', 'TeKeFbyW2eWRsFfmvanpTKHuDfJElnTKOtOsWcyY/WW9euzPD2sFL8P93aHA2yP+DTa3vGQibtKnnOOUnw0eJQ==', '28poy485704aeoiqqwli85b3xr');
$client = Client::create($configuration);
//echo '<pre>';
//print_r($client->getAccounts());
//echo '<pre>';
//print_r($client->getCurrencies());
//echo "<br/>"."24 hours status:";
//echo "<pre>";
$price1 = $client->getProductLast24HrStats('ETH-BTC');
$price2 = $client->getProductLast24HrStats('LTC-BTC');
$price3 = $client->getProductLast24HrStats('BTC-USD');

$data1 = $price1['last'];
$data2 = $price2['last'];
$data3 = $price3['last'];

$data = array();
$data[] = (object) array('key'=> 'ETH/BTC', 'value' => $data1);
$data[] = (object) array('key'=> 'LTC/BTC', 'value' => $data2);
$data[] = (object) array('key'=> 'BTC/USD', 'value' => $data3);
//print_r($data);
echo json_encode($data);

?>
