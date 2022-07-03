<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">

<?php
 if ( is_product() ) {
    global $post, $product;
    echo '<meta property="og:image" content="'.get_the_post_thumbnail_url( $post->ID, 'shop_thumbnail' ).'">';
 }
 ?>

 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90572225-1"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'UA-90572225-1');
 </script>

 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script> -->


</head>

<body <?php body_class(); ?>>

<img style="display:none;" src="https://www.djs.com.hk/wp-content/uploads/2019/09/esc-icon2.png">
<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		do_action( 'storefront_header' );
		?>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

  <script type="text/javascript">

  $(window).load(function(){

    setTimeout(function(){


        $("ol.flex-control-nav.flex-control-thumbs img").each(function(){

          if($(this).attr('data-large_image_width')==4830)
          {
            $(this).hide();
          }


        });



    },500);

  });


  </script>


	<?php // do_action('apply_header_images'); ?>


	<?php
// if(is_front_page())
// {
	// echo do_shortcode( '[instagram-feed followcolor=#d5418d showfollow=false cols=6 colsmobile=4 num=33 showcaption=false imageres=full carouselarrows=true width=100 widthunit=% imagepadding=0 showheader=true layout=carousel carouselrows=1]');

// }
?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
