<?php

ini_set("display_errors", "On"); // 設定是否顯示錯誤( On=顯示, Off=隱藏 )


require __DIR__ . '/../../../vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
  'https://www.djs.com.hk',
  'ck_de8ae56fb0542de4713462233af0d4a727fce173',
  'cs_792f6090a1f222378942329064bfa10e386b3f4a',
  [
    'version' => 'wc/v3',
  ]
);


// simple
// $data = [
//     'name' => 'Premium Quality',
//     'type' => 'simple',
//     'regular_price' => '21.99',
//     'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
//     'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
//     'categories' => [
//         [
//             'id' => 9
//         ],
//         [
//             'id' => 14
//         ]
//     ],
//     'manage_stock' => false,
//     'images' => [
//         [
//             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
//         ],
//         [
//             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
//         ]
//     ]
// ];

// $woocommerce->post('products', $data);



//variation


// $prod_data = [
// 	'name'        => 'A great product',
// 	'type'        => 'variable',
// 	'description' => 'A very meaningful product description',
// 	'images'      => [
// 		[
// 			'src'      => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg',
// 			'position' => 0,
// 		],
// 	],
// 	'categories'  => [
// 		[
// 			'id' => 3,
// 		],
// 	],
//     // 'manage_stock' => true,
//     // 'stock_quantity' => 9999,
// 	'attributes'  => [
// 		[
// 			'id'        => 3,
//             'manage_stock' => false,
// 			'variation' => true,
// 			'visible'   => true,
// 			'options'   => [ 'S', 'M', 'L' ],
// 		],
// 	],
// ];

// $woocommerce->post( 'products', $prod_data );

$woocommerce->products->create( 
    array( 
        'title' => 'Premium Quality', 
        'type' => 'variable', 
        'sku' => 'code',
        'regular_price' => '29.98',
        'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
        'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
        'images' => array(
                array(
                    'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg',
                    'position' => 0
                
                ),
                array(
                    'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg',
                    'position' => 1
                )
         ),
         'attributes' => array( 
            array( 
                'name'=>'color',
                'slug'=>'color',
                'position'=>'0',
                'visible'=>'true',
                'variation'=>'true',
                'options'=>array('red','black')
            ) 
         ),
         'variations' => array(
            array(
                'sku' => 'codered',
                'regular_price' => '29.98',
                'attributes' => array( 
                    array( 
                        'name'=>'color',
                        'options'=>'red'
                    )
                    
                ) 
            ),
            array(
                'sku' => 'codeblack',
                'regular_price' => '29.98',
                'attributes' => array( 
                    array( 
                        'name'=>'color',
                        'options'=>'black'
                    )
                ) 
            )
        )
            
    ) 

);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mobile upload product</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo get_site_url();?>/product-upload.css">

</head>

<body>

    <h1>djs product upload by mobile</h1>
    <div class="container">

    </div>
</body>

</html>



<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="files_upload[]" id="file_upload" accept=".jpg" multiple>
    <input type="submit" value="submit">
</form>
<?php





if(!empty($_FILES))
{

    $total = count($_FILES['files_upload']['name']);

    // echo $total;
    // print_r($_FILES);
    // print_r()
    // if($_FILES["files_upload"]['size'])
    // {
            $wordpress_upload_dir = wp_upload_dir();


            // $new_file_path = $wordpress_upload_dir['path'] . '/' . $_FILES["file_upload"]["name"];

            //     $i=0;
            // while( file_exists( $new_file_path ) ) {
            //     $i++;
            //     $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $_FILES["file_upload"]["name"];
            // }
            
            // if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $new_file_path)) {

            //     $upload_id = wp_insert_attachment( array(
            //     'guid'           => $new_file_path, 
            //     'post_mime_type' => 'image/*',
            //     //$_FILES["file_upload"]["tmp_name"],
            //     'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["file_upload"]["name"] ),
            //     'post_content'   => '',
            //     'post_status'    => 'inherit'
            // ), $new_file_path );
            // require_once( ABSPATH . 'wp-admin/includes/image.php' );

            // wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );
            // //  conclude Image

            // update_field( 'conclude_image', $upload_id, $school_id );
            
            // // conclusion_content
        
            // } else {
            //     echo "Sorry, there was an error uploading your file.";
            // }        
    // }

    // echo $new_file_path;
}


?>