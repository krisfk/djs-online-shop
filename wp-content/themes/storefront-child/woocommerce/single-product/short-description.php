<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  Automattic
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

?>



<?php

$show_covid = get_field('show-covid');
if ($show_covid === NULL || $show_covid) {
?>

	<div class="show-covid">
	<b>「訂貨」 **疫情關係 運輸偶有延遲 預2-3weeks</b>
	</div>

<?php
}

?>
<br>
<div class="woocommerce-product-details__short-description">
	<?php
	echo $short_description;
	// WPCS: XSS ok. ?>
</div>

<script type="text/javascript">
	$(function(){
		if($('.woocommerce-product-details__short-description p').html()=='.')
		{
			$('.woocommerce-product-details__short-description').fadeOut(0);
		}
	})
</script>
<div class="" style="margin-top:20px;">
	<span style="font-weight:bold;">下單前請先細閱：</span> <br> <br>

<span style="color:#d5418d;font-weight:bold;">訂貨程序：</span> <br>
・網站內選購貨品>Checkout >入數付款確認<br>
・可以credit card / FPS / Online Ebanking / ATM<br>
・訂貨後>到貨wts通知 >門市取貨 /順豐到付<br>
・如缺貨 全數退回<br><br>

<span style="color:#d5418d;font-weight:bold;">注意：</span><br>
因日圓浮動或日本不定期on sale，網站顯示的貨物價錢有機會隨時變動<br><br>

<!--  -->
<span style="color:#d5418d;font-weight:bold;">門市地址:</span><br>
・觀塘巧明街105號 好運大廈8樓C3<br>
・Tue - Fri 4-8pm / Sat-Sun 3-7pm <br>
・任何查詢可聯絡 Wts: 94444920<br><br>

<span style="color:#d5418d;font-weight:bold;">😘溫提：</span><br>
・疫情期間到貨期不穩定 請理解見諒 急單接唔到 🙏🏻<br>
・到貨後超過2星期未取貨並沒通知DJS/貨品會取消或需再訂

<!-- <span style="color:#d5418d;font-weight:bold;">取貨方式：</span> <br><br>

[1] 順豐到付 站/櫃/便利店/上門<br>
請提供地址 + 收件人姓名<br><br>

[2] 小屋取貨 存貨期3星期🙌🏼🙌🏼<br>
❇️來前請通知方便執定貨及確認開放<br><br>

💛小屋逄星期3-6開 周一例休<br>
🎪觀塘巧明街105號 好運大廈8樓C3<br>
💛星期2/3/4/5 ｜ 4-8pm<br>
💛星期6/日 ｜ 3-7pm<br><br>

😘😘溫提：如超過3星期未取貨並沒通知DJS/貨品會取消或需再訂 -->
</div>
