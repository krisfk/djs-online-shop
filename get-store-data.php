<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$url='https://shopdisney.disney.co.jp/on/demandware.store/Sites-shopDisneyJapan-Site/ja_JP/Product-ShowQuickView?pid=4936313316827';
$contents = file_get_contents($url);

require_once('./wp-load.php');
function format_cost($cost)
{
//  echo 999;
  $cost_str = (string)$cost; // type casting int to string
  //echo $sum[0]; // 2
  $last_digit=$cost_str[strlen($cost_str)-1]; // 8

  if($last_digit ==1)
  {
    return $cost-1;
  }

  if($last_digit ==2)
  {
    return $cost+3;
  }

  if($last_digit ==3)
  {
    return $cost+2;
  }

  if($last_digit ==4)
  {
    return $cost+1;
  }


  if($last_digit ==6)
  {
    return $cost+2;
  }

  if($last_digit ==7)
  {
    return $cost+1;
  }

  if($last_digit ==9)
  {
    return $cost+1;
  }
  return $cost;
}

function cost_to_price($cost)
{

  $increase_rate = 1.1/1.08;
  // echo $cost.'xx'. 486*$increase_rate;
  switch($cost)
  {
    case floor(108*$increase_rate):  return floor(28*$increase_rate);  break;
    case floor(162*$increase_rate):  return floor(28*$increase_rate);  break;
    case floor(189*$increase_rate):  return floor(28*$increase_rate);  break;
    case floor(216*$increase_rate):  return floor(38*$increase_rate);  break;
    case floor(243*$increase_rate):  return floor(38*$increase_rate);  break;
    case floor(270*$increase_rate):  return floor(45*$increase_rate);  break;
    case floor(302*$increase_rate):  return floor(45*$increase_rate);  break;
    case floor(324*$increase_rate):  return floor(48*$increase_rate);  break;
    case floor(345*$increase_rate):  return floor(48*$increase_rate);  break;
    case floor(351*$increase_rate):  return floor(48*$increase_rate);  break;
    case floor(378*$increase_rate):  return floor(48*$increase_rate);  break;
    case floor(388*$increase_rate):  return floor(55*$increase_rate);  break;
    case floor(405*$increase_rate):  return floor(55*$increase_rate);  break;
    case floor(410*$increase_rate):  return floor(55*$increase_rate);  break;
    case floor(432*$increase_rate):  return floor(55*$increase_rate);  break;
    case floor(459*$increase_rate):  return floor(55*$increase_rate);  break;
    case floor(486*$increase_rate):  return floor(58*$increase_rate);  break;
    case floor(491*$increase_rate):  return floor(58*$increase_rate);  break;
    case floor(513*$increase_rate):  return floor(68*$increase_rate);  break;
    case floor(518*$increase_rate):  return floor(68*$increase_rate);  break;
    case floor(529*$increase_rate):  return floor(68*$increase_rate);  break;
    case floor(540*$increase_rate):  return floor(78*$increase_rate);  break;
    case floor(583*$increase_rate):  return floor(78*$increase_rate);  break;
    case floor(594*$increase_rate):  return floor(78*$increase_rate);  break;
    case floor(604*$increase_rate):  return floor(78*$increase_rate);  break;
    case floor(626*$increase_rate):  return floor(88*$increase_rate);  break;
    case floor(642*$increase_rate):  return floor(88*$increase_rate);  break;
    case floor(648*$increase_rate):  return floor(88*$increase_rate);  break;
    case floor(702*$increase_rate):  return floor(98*$increase_rate);  break;
    case floor(734*$increase_rate):  return floor(98*$increase_rate);  break;
    case floor(756*$increase_rate):  return floor(98*$increase_rate);  break;
    case floor(810*$increase_rate):  return floor(95*$increase_rate);  break;
    case floor(864*$increase_rate):  return floor(98*$increase_rate);  break;
    case floor(880*$increase_rate):  return floor(98*$increase_rate);  break;
    case floor(918*$increase_rate):  return floor(105*$increase_rate);  break;
    case floor(972*$increase_rate):  return floor(108*$increase_rate);  break;
    case floor(1026*$increase_rate):  return floor(108*$increase_rate);  break;
    case floor(1058*$increase_rate):  return floor(115*$increase_rate);  break;
    case floor(1080*$increase_rate):  return floor(115*$increase_rate);  break;
    case floor(1123*$increase_rate):  return floor(125*$increase_rate);  break;
    case floor(1134*$increase_rate):  return floor(125*$increase_rate);  break;
    case floor(1188*$increase_rate):  return floor(125*$increase_rate);  break;
    case floor(1209*$increase_rate):  return floor(135*$increase_rate);  break;
    case floor(1242*$increase_rate):  return floor(135*$increase_rate);  break;
    case floor(1296*$increase_rate):  return floor(135*$increase_rate);  break;
    case floor(1350*$increase_rate):  return floor(140*$increase_rate);  break;
    case floor(1360*$increase_rate):  return floor(140*$increase_rate);  break;
    case floor(1404*$increase_rate):  return floor(140*$increase_rate);  break;
    case floor(1436*$increase_rate):  return floor(145*$increase_rate);  break;
    case floor(1458*$increase_rate):  return floor(145*$increase_rate);  break;
    case floor(1512*$increase_rate):  return floor(155*$increase_rate);  break;
    case floor(1555*$increase_rate):  return floor(160*$increase_rate);  break;
    case floor(1556*$increase_rate):  return floor(160*$increase_rate);  break;
    case floor(1620*$increase_rate):  return floor(160*$increase_rate);  break;
    case floor(1641*$increase_rate):  return floor(160*$increase_rate);  break;
    case floor(1728*$increase_rate):  return floor(178*$increase_rate);  break;
    case floor(1782*$increase_rate):  return floor(178*$increase_rate);  break;
    case floor(1800*$increase_rate):  return floor(180*$increase_rate);  break;
    case floor(1814*$increase_rate):  return floor(180*$increase_rate);  break;
    case floor(1836*$increase_rate):  return floor(182*$increase_rate);  break;
    case floor(1890*$increase_rate):  return floor(182*$increase_rate);  break;
    case floor(1944*$increase_rate):  return floor(188*$increase_rate);  break;
    case floor(1998*$increase_rate):  return floor(190*$increase_rate);  break;
    case floor(2052*$increase_rate):  return floor(198*$increase_rate);  break;
    case floor(2106*$increase_rate):  return floor(210*$increase_rate);  break;
    case floor(2116*$increase_rate):  return floor(210*$increase_rate);  break;
    case floor(2138*$increase_rate):  return floor(210*$increase_rate);  break;
    case floor(2160*$increase_rate):  return floor(210*$increase_rate);  break;
    case floor(2240*$increase_rate):  return floor(218*$increase_rate);  break;
    case floor(2268*$increase_rate):  return floor(218*$increase_rate);  break;
    case floor(2322*$increase_rate):  return floor(228*$increase_rate);  break;
    case floor(2376*$increase_rate):  return floor(228*$increase_rate);  break;
    case floor(2430*$increase_rate):  return floor(238*$increase_rate);  break;
    case floor(2484*$increase_rate):  return floor(238*$increase_rate);  break;
    case floor(2500*$increase_rate):  return floor(238*$increase_rate);  break;
    case floor(2505*$increase_rate):  return floor(238*$increase_rate);  break;
    case floor(2570*$increase_rate):  return floor(238*$increase_rate);  break;
    case floor(2574*$increase_rate):  return floor(248*$increase_rate);  break;
    case floor(2592*$increase_rate):  return floor(248*$increase_rate);  break;
    case floor(2646*$increase_rate):  return floor(248*$increase_rate);  break;
    case floor(2700*$increase_rate):  return floor(260*$increase_rate);  break;
    case floor(2721*$increase_rate):  return floor(268*$increase_rate);  break;
    case floor(2808*$increase_rate):  return floor(278*$increase_rate);  break;
    case floor(2916*$increase_rate):  return floor(278*$increase_rate);  break;
    case floor(2970*$increase_rate):  return floor(295*$increase_rate);  break;
    case floor(3000*$increase_rate):  return floor(288*$increase_rate);  break;
    case floor(3008*$increase_rate):  return floor(288*$increase_rate);  break;
    case floor(3024*$increase_rate):  return floor(288*$increase_rate);  break;
    case floor(3078*$increase_rate):  return floor(288*$increase_rate);  break;
    case floor(3110*$increase_rate):  return floor(298*$increase_rate);  break;
    case floor(3132*$increase_rate):  return floor(298*$increase_rate);  break;
    case floor(3186*$increase_rate):  return floor(298*$increase_rate);  break;
    case floor(3218*$increase_rate):  return floor(298*$increase_rate);  break;
    case floor(3240*$increase_rate):  return floor(288*$increase_rate);  break;
    case floor(3389*$increase_rate):  return floor(320*$increase_rate);  break;
    case floor(3456*$increase_rate):  return floor(320*$increase_rate);  break;
    case floor(3490*$increase_rate):  return floor(328*$increase_rate);  break;
    case floor(3500*$increase_rate):  return floor(338*$increase_rate);  break;
    case floor(3510*$increase_rate):  return floor(338*$increase_rate);  break;
    case floor(3564*$increase_rate):  return floor(338*$increase_rate);  break;
    case floor(3672*$increase_rate):  return floor(348*$increase_rate);  break;
    case floor(3700*$increase_rate):  return floor(348*$increase_rate);  break;
    case floor(3726*$increase_rate):  return floor(368*$increase_rate);  break;
    case floor(3758*$increase_rate):  return floor(368*$increase_rate);  break;
    case floor(3780*$increase_rate):  return floor(368*$increase_rate);  break;
    case floor(3800*$increase_rate):  return floor(375*$increase_rate);  break;
    case floor(3888*$increase_rate):  return floor(375*$increase_rate);  break;
    case floor(3996*$increase_rate):  return floor(378*$increase_rate);  break;
    case floor(4104*$increase_rate):  return floor(378*$increase_rate);  break;
    case floor(4212*$increase_rate):  return floor(378*$increase_rate);  break;
    case floor(4233*$increase_rate):  return floor(388*$increase_rate);  break;
    case floor(4266*$increase_rate):  return floor(388*$increase_rate);  break;
    case floor(4290*$increase_rate):  return floor(388*$increase_rate);  break;
    case floor(4298*$increase_rate):  return floor(388*$increase_rate);  break;
    case floor(4309*$increase_rate):  return floor(388*$increase_rate);  break;
    case floor(4320*$increase_rate):  return floor(388*$increase_rate);  break;
    case floor(4428*$increase_rate):  return floor(438*$increase_rate);  break;
    case floor(4500*$increase_rate):  return floor(428*$increase_rate);  break;
    case floor(4536*$increase_rate):  return floor(428*$increase_rate);  break;
    case floor(4590*$increase_rate):  return floor(428*$increase_rate);  break;
    case floor(4644*$increase_rate):  return floor(448*$increase_rate);  break;
    case floor(4752*$increase_rate):  return floor(448*$increase_rate);  break;
    case floor(4806*$increase_rate):  return floor(448*$increase_rate);  break;
    case floor(4838*$increase_rate):  return floor(448*$increase_rate);  break;
    case floor(4860*$increase_rate):  return floor(448*$increase_rate);  break;
    case floor(4968*$increase_rate):  return floor(448*$increase_rate);  break;
    case floor(5000*$increase_rate):  return floor(506*$increase_rate);  break;
    case floor(5054*$increase_rate):  return floor(506*$increase_rate);  break;
    case floor(5076*$increase_rate):  return floor(506*$increase_rate);  break;
    case floor(5184*$increase_rate):  return floor(517*$increase_rate);  break;
    case floor(5292*$increase_rate):  return floor(488*$increase_rate);  break;
    case floor(5378*$increase_rate):  return floor(536*$increase_rate);  break;
    case floor(5400*$increase_rate):  return floor(538*$increase_rate);  break;
    case floor(5616*$increase_rate):  return floor(560*$increase_rate);  break;
    case floor(5918*$increase_rate):  return floor(590*$increase_rate);  break;
    case floor(5940*$increase_rate):  return floor(592*$increase_rate);  break;
    case floor(6264*$increase_rate):  return floor(625*$increase_rate);  break;
    case floor(6372*$increase_rate):  return floor(636*$increase_rate);  break;
    case floor(6458*$increase_rate):  return floor(644*$increase_rate);  break;
    case floor(6480*$increase_rate):  return floor(646*$increase_rate);  break;
    case floor(6998*$increase_rate):  return floor(698*$increase_rate);  break;
    case floor(7020*$increase_rate):  return floor(700*$increase_rate);  break;
    case floor(7344*$increase_rate):  return floor(733*$increase_rate);  break;
    case floor(7490*$increase_rate):  return floor(745*$increase_rate);  break;
    case floor(7560*$increase_rate):  return floor(754*$increase_rate);  break;
    case floor(7776*$increase_rate):  return floor(776*$increase_rate);  break;
    case floor(8100*$increase_rate):  return floor(788*$increase_rate);  break;
    case floor(8424*$increase_rate):  return floor(841*$increase_rate);  break;
    case floor(8618*$increase_rate):  return floor(860*$increase_rate);  break;
    case floor(8640*$increase_rate):  return floor(862*$increase_rate);  break;
    case floor(8856*$increase_rate):  return floor(884*$increase_rate);  break;
    case floor(9180*$increase_rate):  return floor(916*$increase_rate);  break;
    case floor(9504*$increase_rate):  return floor(948*$increase_rate);  break;
    case floor(9612*$increase_rate):  return floor(960*$increase_rate);  break;
    case floor(9698*$increase_rate):  return floor(968*$increase_rate);  break;
    case floor(9936*$increase_rate):  return floor(992*$increase_rate);  break;
    case floor(10260*$increase_rate):  return floor(1024*$increase_rate);  break;
    case floor(10584*$increase_rate):  return floor(1057*$increase_rate);  break;
    case floor(10778*$increase_rate):  return floor(1076*$increase_rate);  break;
    case floor(10800*$increase_rate):  return floor(1078*$increase_rate);  break;
    case floor(11664*$increase_rate):  return floor(1165*$increase_rate);  break;
    case floor(11880*$increase_rate):  return floor(1186*$increase_rate);  break;
    case floor(12096*$increase_rate):  return floor(1188*$increase_rate);  break;
    case floor(12420*$increase_rate):  return floor(1240*$increase_rate);  break;
    case floor(12960*$increase_rate):  return floor(1296*$increase_rate);  break;
    case floor(14040*$increase_rate):  return floor(1402*$increase_rate);  break;
    case floor(14580*$increase_rate):  return floor(1456*$increase_rate);  break;
    case floor(14700*$increase_rate):  return floor(1468*$increase_rate);  break;
    case floor(14904*$increase_rate):  return floor(1468*$increase_rate);  break;
    case floor(15012*$increase_rate):  return floor(1468*$increase_rate);  break;
    case floor(15120*$increase_rate):  return floor(1510*$increase_rate);  break;
    case floor(15984*$increase_rate):  return floor(1510*$increase_rate);  break;
    case floor(16200*$increase_rate):  return floor(1618*$increase_rate);  break;
    case floor(17258*$increase_rate):  return floor(1618*$increase_rate);  break;
    case floor(17280*$increase_rate):  return floor(1726*$increase_rate);  break;
    case floor(18144*$increase_rate):  return floor(1813*$increase_rate);  break;
    case floor(19440*$increase_rate):  return floor(1942*$increase_rate);  break;
    case floor(19980*$increase_rate):  return floor(1978*$increase_rate);  break;
    case floor(21600*$increase_rate):  return floor(2158*$increase_rate);  break;
    case floor(22680*$increase_rate):  return floor(2158*$increase_rate);  break;
    case floor(23760*$increase_rate):  return floor(2374*$increase_rate);  break;
    case floor(24840*$increase_rate):  return floor(2374*$increase_rate);  break;
    case floor(25920*$increase_rate):  return floor(2590*$increase_rate);  break;
    case floor(27000*$increase_rate):  return floor(2698*$increase_rate);  break;
    case floor(30240*$increase_rate):  return floor(3022*$increase_rate);  break;
    case floor(35000*$increase_rate):  return floor(3022*$increase_rate);  break;
    case floor(36000*$increase_rate):  return floor(3022*$increase_rate);  break;
    case floor(48600*$increase_rate):  return floor(4858*$increase_rate);  break;
    case floor(68040*$increase_rate):  return floor(7450*$increase_rate);  break;
    case floor(74520*$increase_rate):  return floor(7450*$increase_rate);  break;
    case floor(81000*$increase_rate):  return floor(7450*$increase_rate);  break;
    case floor(86400*$increase_rate):  return floor(8638*$increase_rate);  break;
    case floor(89640*$increase_rate):  return floor(8962*$increase_rate);  break;
    case floor(97200*$increase_rate):  return floor(9718*$increase_rate);  break;
    case floor(108000*$increase_rate):  return floor(10798*$increase_rate);  break;
    case floor(118800*$increase_rate):  return floor(11878*$increase_rate);  break;
    case floor(129600*$increase_rate):  return floor(12968*$increase_rate);  break;
    case floor(138240*$increase_rate):  return floor(12968*$increase_rate);  break;
    case floor(162000*$increase_rate):  return floor(16198*$increase_rate);  break;
    case floor(189000*$increase_rate):  return floor(18898*$increase_rate);  break;
    case floor(215000*$increase_rate):  return floor(18898*$increase_rate);  break;
    case floor(237600*$increase_rate):  return floor(23758*$increase_rate);  break;
    case floor(278640*$increase_rate):  return floor(27862*$increase_rate);  break;
    case floor(291600*$increase_rate):  return floor(29158*$increase_rate);  break;
    case floor(419040*$increase_rate):  return floor(41902*$increase_rate);  break;
    default: return floor($cost*$increase_rate*0.1); break;
  }
}
$args = array(
    'post_type' => 'product',
    'post_status' => array( 'publish', 'private'),
    'posts_per_page' => 1 ,
    'orderby'=> 'menu_order',
    'order' => 'ASC'
);

$products = new WP_Query($args);

if($products->have_posts() )
{
	$products->the_post();
//  echo the_title();
	$smallest_menu_order =  get_post_field('menu_order', get_the_ID());
}
else {
	// code...
	$smallest_menu_order =0;
}



require_once "simple_html_dom.php";

?>
<!doctype html>
<html>
<head>

	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

<script type="text/javascript" src="get-store-data.js"></script>



<meta charset="UTF-8">
<title>Get Data(JP Disneystore):</title>
<style type="text/css">
html{
}

table#product-table{
  border-spacing: 0px;
  margin: 0 0 40px 0;
}

table#product-table td {
    padding: 10px;
    vertical-align: top;
    text-align: left;
    white-space: nowrap;
    border-right: 1px solid #000;
    border-bottom: 1px solid #000;
}

table#product-table tr td:first-child{
  border-left: 1px solid #000;

}
table#product-table th{
	background:#000;
color:#fff;
	padding:10px;
}

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
$(function(){


$.ajax({
  method: "GET",
  url: "https://shopdisney.disney.co.jp/on/demandware.store/Sites-shopDisneyJapan-Site/ja_JP/Product-ShowQuickView?pid=4936313316827",
  // data: { name: "John", location: "Boston" }
})
  .done(function( msg ) {
    console.log(msg)
    // alert( "Data Saved: " + msg );
  });
})
</script>

</head>

<body>
<h1>Get Data(JP Disneystore):</h1>

<form method="post" action="get-store-data.php">
<textarea name="ids_str" rows="10" cols="80"><?php if (!empty($_POST['ids_str'])) {
	echo $_POST['ids_str'];
} ?></textarea>
<br>
<input type="submit" name="" value="submit" style="text-decoration:none;color:#000;background-color:#ddd;border:1px solid #ccc;padding:8px;cursor:pointer;">
</form>
<br>
<?php
echo 'smallest_menu_order: '.$smallest_menu_order;
 ?>

<br><br>

 <b>Get products string</b><br>


 <code>

   var str='';

  for(i=0;i<$('.product-grid__tile').length;i++)
  {

  str += $('.product-grid__tile').eq(i).attr('data-pid')+',';

  }

  str = str.substring(0, str.length - 1);


  console.log(str)
</code>
<!--
<code>
  var str2 ='';

  for(i=0;i<$('.grid-item__wrap').size();i++)
  {
      var str = $('.grid-item__wrap').eq(i).attr('href');
      str =str.replace('/g/g','');
      str =str.replace('/','');

      str2+=str+',';
  }
  str2= str2.substring(0, str2.length - 1);

  console.log(str2);

</code>

<br/><br/><b>Get products string(new products)</b><br>

<code>

var str2="";for(i=0;i<$("._goods_item").size();i++){var str=$("._goods_item").eq(i).find("a").attr("href");str2+=(str=(str=str.replace("/g/g","")).replace("/",""))+","}str2=str2.substring(0,str2.length-1),console.log(str2);

</code>



<br/><br/><b>Get products string(new banner)</b><br>

<code>

var str2="";for(i=0;i<$(".l-temp__item").size();i++){var str=$(".l-temp__item").eq(i).find("a").attr("href");str2+=(str=(str=str.replace("/g/g","")).replace("/",""))+","}str2=str2.substring(0,str2.length-1),console.log(str2);

</code> -->


 <br><br>
    <table id="product-table">
    <tr>
    <th>menu_order</th>
    <th>sku</th>
    <th>Name</th>
    <th>Type</th>
<th>cost_price</th>
 <th>regular_price</th>
  <th>post_excerpt</th>
   <th>fifu_image_url</th>
	<th>fifu_image_url_0</th>
	 <th>fifu_image_url_1</th>
	 <th>fifu_image_url_2</th>
	 <th>fifu_image_url_3</th>
	 <th>fifu_image_url_4</th>
	 <th>fifu_image_url_5</th>
	 <th>fifu_image_url_6</th>
	 <th>Categories</th>
	 <th>Tags</th>
   <th>Published</th>
    </tr>
    <?php


//	$url = "http://store.disney.co.jp/g/g".$row['item_store_id']."/";

if (!empty($_POST['ids_str'])) {
	$ids_str = $_POST['ids_str'];
		$sku_arr = explode(",", $ids_str);


    for ($i=0;$i<sizeof($sku_arr);$i++) {
        // $url = "http://store.disney.co.jp/g/g".$sku_arr[$i]."/";
        // $url = "https://shopdisney.disney.co.jp/goods/".$sku_arr[$i].".html";
        // $url= "http://www.djs.com.hk/";
        // echo $url;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://shopdisney.disney.co.jp/on/demandware.store/Sites-shopDisneyJapan-Site/ja_JP/Product-ShowQuickView?pid=".$sku_arr[$i]);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $result = curl_exec($ch);
        echo 111;
        echo $result;
        $result = json_decode($result);
        echo $result;

        $item_name= $result->product->productName;

        $yen_price  = ($result->product->price->list->value) ?  ($result->product->price->list->value) : ($result->product->price->sales->value);
        // echo $price;
        $item_image_url_arr = $result->product->images->large;
// print_r($result);
// echo 1111;
        $item_image_arr= array();

        for ($j=0;$j<sizeof($item_image_url_arr);$j++) {
            array_push($item_image_arr, $item_image_url_arr[$j]->url);
        }

        $item_size =$result->product->descriptionForSize;

        $empty_space= 7-sizeof($item_image_arr);

        $menu_order = $smallest_menu_order+($i+1)*100 - (sizeof($sku_arr)+1)*100 ;



        echo'<tr>';
              echo '<td>'.$menu_order.'</td>';
              echo '<td>'.$sku_arr[$i].'</td>';
              echo '<td>'.$item_name.'</td>';
              echo '<td>simple</td>';
              echo '<td>'.$yen_price.'</td>';

              echo '<td>'.format_cost(cost_to_price($yen_price)).'</td>';
              echo '<td>';

              echo'貨物大小：<br/>';
              echo '&NewLine;'.$item_size.'&NewLine;&NewLine;';


              echo'<br/><br/>訂貨程序：<br/>
      1. 在網站內選購貨品然後Checkout結帳<br/>
      2. 銀行入數，並Whatapps 入數紙到94444920 作付款確認<br/>
      3. 我們替您訂貨 / 留現貨 ＝》到貨Whatapps通知 ＝》門市取貨 / 交收 / 寄貨&NewLine;&NewLine;注意：<br/>
      1. 因日圓浮動或日本不定期on sale，網站顯示的貨物價錢有機會隨時變動，希望大家諒解。<br/>
      2. 我們不能保證日本100%有存貨成功購入，若有缺貨全數退款。';

              echo'</td>';
              //
              // echo '<td>'.$item_name.'</td>';
              // echo '<td>'.$yen_price.'</td>';
              echo '<td>'.$item_image_arr[0].'</td>';

              for ($j=0;$j<sizeof($item_image_arr);$j++) {
                  echo '<td>'.$item_image_arr[$j].'</td>';
              }

              for ($j=0;$j<$empty_space;$j++) {
                  echo '<td></td>';
              }

              echo '<td>Japan Disneystore</td>';

              echo '<td>tags</td>';


              echo '<td>0</td>';

              echo'</tr>';

        // exit();


        // echo $result->action;
        curl_close($ch);

        // $item_image_url_arr=$htmlContent->find("ul[id=thumb] li");


        // descriptionForSize







  //      echo $menu_order;
//    $menu_order = $smallest_menu_order;//sizeof($sku_arr);

    } ?>
</table>


<a href="#" id="xx" style="text-decoration:none;color:#000;background-color:#ddd;border:1px solid #ccc;padding:8px;">Export Table data into Excel</a>

<script type="text/javascript">
$(document).ready(function () {


function exportTableToCSV($table, filename) {

			var $rows = $table.find('tr:has(td),tr:has(th)'),

					// Temporary delimiter characters unlikely to be typed by keyboard
					// This is to avoid accidentally splitting the actual contents
					tmpColDelim = String.fromCharCode(11), // vertical tab character
					tmpRowDelim = String.fromCharCode(0), // null character

					// actual delimiter characters for CSV format
					colDelim = '","',
					rowDelim = '"\r\n"',

					// Grab text from table into CSV formatted string
					csv = '"' + $rows.map(function (i, row) {
							var $row = $(row), $cols = $row.find('td,th');

							return $cols.map(function (j, col) {
									var $col = $(col), text = $col.text();

									return text.replace(/"/g, '""'); // escape double quotes

							}).get().join(tmpColDelim);

					}).get().join(tmpRowDelim)
							.split(tmpRowDelim).join(rowDelim)
							.split(tmpColDelim).join(colDelim) + '"',



					// Data URI
					csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

					console.log(csv);

				if (window.navigator.msSaveBlob) { // IE 10+
					//alert('IE' + csv);
					window.navigator.msSaveOrOpenBlob(new Blob([csv], {type: "text/plain;charset=utf-8;"}), "csvname.csv")
				}
				else {
					$(this).attr({ 'download': filename, 'href': csvData, 'target': '_blank' });
				}
	}

	// This must be a hyperlink
	$("#xx").on('click', function (event) {

			exportTableToCSV.apply(this, [$('#product-table'), 'export.csv']);

			// IF CSV, don't do event.preventDefault() or return false
			// We actually need this to be a typical hyperlink
	});

});

</script>
<?php
}
 ?>
</body>
</html>
