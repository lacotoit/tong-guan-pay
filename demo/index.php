<?php

require __DIR__.'/../vendor/autoload.php';

//$config = [
//    'account' => '',
//    'key' => '',
//    'mode' => 'dev'
//];

$config = [
    'account' => '',
    'key' => '',
    'mode' => 'normal'
];

$pay = new \Lihq1403\TongGuanPay\Pay($config);

//$payMoney = '0.01';
//$lowOrderId = date('YmdHis');
//$notify_url = '';
//
//$response = $pay->qr($payMoney, $lowOrderId, $notify_url);
//echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

//$lowOrderId = '20190517095914';
//$response = $pay->find($lowOrderId);
//echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

//$lowOrderId = '20190517095914';
//$upOrderId = '91129204701658222592';
//$response = $pay->reverse($lowOrderId, $upOrderId);
//echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);