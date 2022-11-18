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

$data = [
    'name' => 'Premium Quality',
    'type' => 'simple',
    'regular_price' => '21.99',
    'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
    'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
    'categories' => [
        [
            'id' => 9
        ],
        [
            'id' => 14
        ]
    ],
    'images' => [
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
        ],
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
        ]
    ]
];

$woocommerce->post('products', $data);

?>


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