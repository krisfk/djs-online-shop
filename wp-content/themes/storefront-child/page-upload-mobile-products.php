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


//////////////////////////////////
//variation


// $prod_data = [
// 	'name'        => 'A great product',
// 	'type'        => 'variable',
// 	'description' => 'A very meaningful product description',
//     'short_description' =>'.',
// 	'images'      => [
// 		[
// 			'src'      => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg',
// 			'position' => 0,
// 		],
// 	],
// 	'categories'  => [
// 		[
// 			'id' => 1,
// 		],
// 	],
// 	'attributes'  => [
// 		[
// 			'id'        => 3,
// 			'variation' => true,
// 			'visible'   => true,
// 			'options'   => [ 'S', 'M', 'L' ],
// 		],
// 	],
// ];




// $product = $woocommerce->post( 'products', $prod_data );

// $variation_data = [
// 	'regular_price' => '15.00',
// 	// 'image'         => [
// 	// 	'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg',
// 	// ],
// 	'attributes'    => [
// 		[
// 			'id'     => 3,
// 			'option' => 'L',
// 		],
// 	],
// ];

// // 
// $woocommerce->post( "products/$product->id/variations", $variation_data );


///////////////////////



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


    <?php

if($_POST['submit'])
{
    $product_name=$_POST['product-name'];
    $short_product_description=$_POST['product-description'];

}
?>


    <form action="" method="post" enctype="multipart/form-data">


        <div class="container mt-3">

            <h4 class="text-center">Djs Web Product Upload Via Mobile</h4>

            <div class="mt-4">
                <label class="label-bold" for="product-name">Product Name:</label>
                <input type="text" class="form-control" name="product-name" id="product-name">
            </div>

            <div class="mt-3">
                <div>
                    <label class="label-bold" for="file-upload">Product Images:</label>
                </div>
                <input type="file" name="files_upload[]" id="file-upload" accept=".jpg" multiple>
            </div>

            <div class="mt-3">
                <label class="label-bold" for="product-description">Product Description:(如用default文字留返一點係度)</label>
                <textarea type="text" class="form-control" name="product-description" rows="4" cols="50"
                    id="product-description">.</textarea>
            </div>

            <div class="mt-3">

                <div class="label-bold">Product Type:</div>
                <div class="margin:0.2rem 0 0 0;">
                    <input value="simple" class="form-check-input" type="radio" name="product-type" id="product-type-1"
                        checked>
                    <label class="form-check-label" for="product-type-1">
                        Simple
                    </label>
                    <input value="variable" class="form-check-input" type="radio" name="product-type"
                        id="product-type-2">
                    <label class="form-check-label" for="product-type-2">
                        Variable
                    </label>
                </div>

            </div>

            <div class="mt-3">
                <label class="label-bold" for="product-price">Product Price:</label>
                <input type="text" class="form-control" name="product-price" id="product-price">
            </div>


            <div class="mt-3">
                <input type="submit" value="submit">
            </div>


        </div>

    </form>

</body>

</html>


<!-- 

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="files_upload[]" id="file_upload" accept=".jpg" multiple>
    <input type="submit" value="submit">
</form> -->
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