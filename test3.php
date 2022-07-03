<?php

//$data = array( 'product_id' => 9495, 'cost_price' => 777 );
//$response = Requests::post( get_site_url().'/bulk-update-product', array(), $data );

$curl = curl_init( 'http://www.kayli.me/djs-online-shop/bulk-update-product/' );
curl_setopt( $curl, CURLOPT_POST, true );
curl_setopt( $curl, CURLOPT_POSTFIELDS, array( 'product_id' => 9495, 'cost_price' => 888 ) );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
$response = curl_exec( $curl );
curl_close( $curl );

echo 'update' ?>
