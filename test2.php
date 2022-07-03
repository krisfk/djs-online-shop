<?php
ini_set("display_errors", "On"); // 設定是否顯示錯誤( On=顯示, Off=隱藏 )

use WC_API_Client;
use WC_API_Client_Exception;
$options = array(
    'debug'           => true,
    'return_as_array' => false,
    'validate_url'    => false,
    'timeout'         => 30,
    'ssl_verify'      => false,
);
try {
    $client = new WC_API_Client(
        'http://www.kayli.me/djs-online-shop/',
				'ck_5652ff4d3946a2318721aaff55cc71b0d35841c2',
				'cs_4faf2b6d95dfa1e1655790bb266a4f2fcbb19cfe',
        $options
    );
    // index
    //print_r($client->index->get());

    // For other endpoints, see example.php

} catch (WC_API_Client_Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    echo $e->getCode() . PHP_EOL;
    if ($e instanceof WC_API_Client_HTTP_Exception) {
        print_r($e->get_request());
        print_r($e->get_response());
    }
}
 ?>
