<?php

require_once('./wp-load.php');

// $args = array(
// 	'post_type' => 'product',
// 	'post_status' => 'publish',
// 	'posts_per_page' => 1 ,
// 	'orderby'=> 'menu_order',
// 	'order' => 'ASC',
// );

// $products = new WP_Query( $args );
// $products->the_post();
// $smallest_menu_order =  get_post_field( 'menu_order', get_the_ID());

// echo 2;


//echo $products->found_posts;

//echo do_shortcode('[products id="all" orderby="menu_order"]');

//
//$min = $wpdb->get_var('SELECT MIN(menu_order) AS min FROM '.$wpdb->prefix.'postmeta AS pm, " .$wpdb->prefix.'posts AS po WHERE pm.post_id = po.ID AND po.post_status = "publish" AND po.post_type = "products");
//echo $min;

//echo 9099;
ini_set("display_errors", "On"); // 設定是否顯示錯誤( On=顯示, Off=隱藏 )

// 

// Load Composer autoloader.
// @link https://github.com/brightnucleus/jasper-client/blob/master/tests/bootstrap.php#L55-L59
// $autoloader = dirname( __FILE__ ) . '/vendor/autoload.php';
// if ( is_readable( $autoloader ) ) {
// 	require_once $autoloader;
// }

// use Automattic\WooCommerce\Client;


//WC_API_Client
//http://www.kayli.me/djs-online-shop/wc-api/v3/products?filter[limit]=-1
$woocommerce = new Client(
	'http://www.kayli.me/djs-online-shop/',
	'ck_5652ff4d3946a2318721aaff55cc71b0d35841c2',
	'cs_4faf2b6d95dfa1e1655790bb266a4f2fcbb19cfe',
	[
		'wp_api'  => true,
		'version' => 'wc/v3',
	]
);

// $products = $woocommerce->get('products',array('per_page'=>20,'show_in_rest'=>true));
//echo sizeof($products);
//print_r($products);
//
// $data = [
//     'name' => 'Color',
//     'slug' => 'pa_color',
//     'type' => 'select',
//     'order_by' => 'menu_order',
//     'has_archives' => true
// ];

//print_r($woocommerce->get('products/attributes/'));


$prod_data = [
	'name'          => 'A great product',
	'type'          => 'simple',
	'regular_price' => '15.00',
	'description'   => 'A very meaningful product description',
	'images'        => [
		[
			'src'      => 'https://shop.local/path/to/image.jpg',
			'position' => 0,
		],
	],
	'categories'    => [
		[
			'id' => 1,
		],
	],
];

$woocommerce->post( 'products', $prod_data );



 ?>