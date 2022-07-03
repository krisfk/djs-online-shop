<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');


require_once('./wp-load.php');

function cost_to_price($cost)
{
  switch($cost)
  {
    case 108:  return 28;  break;
    case 162:  return 28;  break;
    case 189:  return 28;  break;
    case 216:  return 38;  break;
    case 243:  return 38;  break;
    case 270:  return 45;  break;
    case 302:  return 45;  break;
    case 324:  return 48;  break;
    case 345:  return 48;  break;
    case 351:  return 48;  break;
    case 378:  return 48;  break;
    case 388:  return 55;  break;
    case 405:  return 55;  break;
    case 410:  return 55;  break;
    case 432:  return 55;  break;
    case 459:  return 55;  break;
    case 486:  return 58;  break;
    case 491:  return 58;  break;
    case 513:  return 58;  break;
    case 518:  return 65;  break;
    case 529:  return 65;  break;
    case 540:  return 68;  break;
    case 583:  return 68;  break;
    case 594:  return 68;  break;
    case 604:  return 68;  break;
    case 626:  return 68;  break;
    case 642:  return 68;  break;
    case 648:  return 68;  break;
    case 702:  return 85;  break;
    case 734:  return 85;  break;
    case 756:  return 88;  break;
    case 810:  return 95;  break;
    case 864:  return 98;  break;
    case 880:  return 98;  break;
    case 918:  return 105;  break;
    case 972:  return 108;  break;
    case 1026:  return 108;  break;
    case 1058:  return 115;  break;
    case 1080:  return 115;  break;
    case 1123:  return 125;  break;
    case 1134:  return 125;  break;
    case 1188:  return 125;  break;
    case 1209:  return 135;  break;
    case 1242:  return 135;  break;
    case 1296:  return 135;  break;
    case 1350:  return 140;  break;
    case 1360:  return 140;  break;
    case 1404:  return 140;  break;
    case 1436:  return 145;  break;
    case 1458:  return 145;  break;
    case 1512:  return 150;  break;
    case 1555:  return 160;  break;
    case 1556:  return 160;  break;
    case 1620:  return 160;  break;
    case 1641:  return 160;  break;
    case 1728:  return 170;  break;
    case 1782:  return 170;  break;
    case 1800:  return 178;  break;
    case 1814:  return 178;  break;
    case 1836:  return 182;  break;
    case 1890:  return 182;  break;
    case 1944:  return 188;  break;
    case 1998:  return 190;  break;
    case 2052:  return 198;  break;
    case 2106:  return 210;  break;
    case 2116:  return 210;  break;
    case 2138:  return 210;  break;
    case 2160:  return 210;  break;
    case 2240:  return 218;  break;
    case 2268:  return 218;  break;
    case 2322:  return 228;  break;
    case 2376:  return 228;  break;
    case 2430:  return 238;  break;
    case 2484:  return 238;  break;
    case 2500:  return 238;  break;
    case 2505:  return 238;  break;
    case 2570:  return 238;  break;
    case 2574:  return 248;  break;
    case 2592:  return 248;  break;
    case 2646:  return 248;  break;
    case 2700:  return 260;  break;
    case 2721:  return 268;  break;
    case 2808:  return 278;  break;
    case 2916:  return 278;  break;
    case 2970:  return 295;  break;
    case 3000:  return 288;  break;
    case 3008:  return 288;  break;
    case 3024:  return 288;  break;
    case 3078:  return 288;  break;
    case 3110:  return 298;  break;
    case 3132:  return 298;  break;
    case 3186:  return 298;  break;
    case 3218:  return 298;  break;
    case 3240:  return 288;  break;
    case 3389:  return 320;  break;
    case 3456:  return 320;  break;
    case 3490:  return 328;  break;
    case 3500:  return 338;  break;
    case 3510:  return 338;  break;
    case 3564:  return 338;  break;
    case 3672:  return 348;  break;
    case 3700:  return 348;  break;
    case 3726:  return 368;  break;
    case 3758:  return 368;  break;
    case 3780:  return 368;  break;
    case 3800:  return 375;  break;
    case 3888:  return 375;  break;
    case 3996:  return 378;  break;
    case 4104:  return 378;  break;
    case 4212:  return 378;  break;
    case 4233:  return 388;  break;
    case 4266:  return 388;  break;
    case 4290:  return 388;  break;
    case 4298:  return 388;  break;
    case 4309:  return 388;  break;
    case 4320:  return 388;  break;
    case 4428:  return 438;  break;
    case 4500:  return 428;  break;
    case 4536:  return 428;  break;
    case 4590:  return 428;  break;
    case 4644:  return 448;  break;
    case 4752:  return 448;  break;
    case 4806:  return 448;  break;
    case 4838:  return 448;  break;
    case 4860:  return 448;  break;
    case 4968:  return 448;  break;
    case 5000:  return 506;  break;
    case 5054:  return 506;  break;
    case 5076:  return 506;  break;
    case 5184:  return 517;  break;
    case 5292:  return 488;  break;
    case 5378:  return 536;  break;
    case 5400:  return 538;  break;
    case 5616:  return 560;  break;
    case 5918:  return 590;  break;
    case 5940:  return 592;  break;
    case 6264:  return 625;  break;
    case 6372:  return 636;  break;
    case 6458:  return 644;  break;
    case 6480:  return 646;  break;
    case 6998:  return 698;  break;
    case 7020:  return 700;  break;
    case 7344:  return 733;  break;
    case 7490:  return 745;  break;
    case 7560:  return 754;  break;
    case 7776:  return 776;  break;
    case 8100:  return 788;  break;
    case 8424:  return 841;  break;
    case 8618:  return 860;  break;
    case 8640:  return 862;  break;
    case 8856:  return 884;  break;
    case 9180:  return 916;  break;
    case 9504:  return 948;  break;
    case 9612:  return 960;  break;
    case 9698:  return 968;  break;
    case 9936:  return 992;  break;
    case 10260:  return 1024;  break;
    case 10584:  return 1057;  break;
    case 10778:  return 1076;  break;
    case 10800:  return 1078;  break;
    case 11664:  return 1165;  break;
    case 11880:  return 1186;  break;
    case 12096:  return 1188;  break;
    case 12420:  return 1240;  break;
    case 12960:  return 1296;  break;
    case 14040:  return 1402;  break;
    case 14580:  return 1456;  break;
    case 14700:  return 1468;  break;
    case 14904:  return 1468;  break;
    case 15012:  return 1468;  break;
    case 15120:  return 1510;  break;
    case 15984:  return 1510;  break;
    case 16200:  return 1618;  break;
    case 17258:  return 1618;  break;
    case 17280:  return 1726;  break;
    case 18144:  return 1813;  break;
    case 19440:  return 1942;  break;
    case 19980:  return 1978;  break;
    case 21600:  return 2158;  break;
    case 22680:  return 2158;  break;
    case 23760:  return 2374;  break;
    case 24840:  return 2374;  break;
    case 25920:  return 2590;  break;
    case 27000:  return 2698;  break;
    case 30240:  return 3022;  break;
    case 35000:  return 3022;  break;
    case 36000:  return 3022;  break;
    case 48600:  return 4858;  break;
    case 68040:  return 7450;  break;
    case 74520:  return 7450;  break;
    case 81000:  return 7450;  break;
    case 86400:  return 8638;  break;
    case 89640:  return 8962;  break;
    case 97200:  return 9718;  break;
    case 108000:  return 10798;  break;
    case 118800:  return 11878;  break;
    case 129600:  return 12968;  break;
    case 138240:  return 12968;  break;
    case 162000:  return 16198;  break;
    case 189000:  return 18898;  break;
    case 215000:  return 18898;  break;
    case 237600:  return 23758;  break;
    case 278640:  return 27862;  break;
    case 291600:  return 29158;  break;
    case 419040:  return 41902;  break;
    default: return Math.floor($cost*0.1); break;
  }
}
//
// $args = array(
//     'post_type' => 'product',
//     'post_status' => array( 'publish', 'private'),
//     'posts_per_page' => 1 ,
//     'orderby'=> 'menu_order',
//     'order' => 'ASC'
// );
//
// $products = new WP_Query($args);
//
// if($products->have_posts() )
// {
// 	$products->the_post();
// //  echo the_title();
// 	$smallest_menu_order =  get_post_field('menu_order', get_the_ID());
// }
// else {
// 	// code...
// 	$smallest_menu_order =0;
// }


$smallest_menu_order = 0;


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

</code>


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
        $url = "http://store.disney.co.jp/g/g".$sku_arr[$i]."/";

        $htmlContent = str_get_html(file_get_contents($url));


        $item_name=$htmlContent->find("h1[class=p-product__heading]", 0)->plaintext;



        $first=false;


        //	  $item_stock = trim($htmlContent->find("dl[class=p-product__count__state] dd",0)->plaintext);


        $item_name=$htmlContent->find("h1[class=p-product__heading]", 0)->plaintext;
        $yen_price =$htmlContent->find("p[class=p-product__price]", 0)->plaintext;
        $yen_price=str_replace("円（税込）", "", $yen_price);
        $yen_price=str_replace(",", "", $yen_price);

        $item_image_url_arr=$htmlContent->find("ul[id=thumb] li");


        //	$item_image_url = "http:".$htmlContent->find("ul[id=thumb] li a img",0)->getAttribute('src');




        $item_size = $htmlContent->find("div[class=p-product__detail__text]", 1)->plaintext.' '.$htmlContent->find("div[class=p-product__detail__text]", 2)->plaintext;

        $item_size=str_replace("サイズ ", "", $item_size);
        $item_size=str_replace("高さ約", "", $item_size);
        $item_size=str_replace("高さ約", "", $item_size);
        $item_size=str_replace("幅", "", $item_size);
        $item_size=str_replace("奥行き", "", $item_size);
        $item_size=str_replace("ボックス:", "包裝盒size:", $item_size);
        $item_size=str_replace("本体:", "本体size:", $item_size);

        $item_size=ltrim($item_size);

        $item_size = trim(preg_replace('/\s\s+/', ' ', $item_size));
        $item_size=str_replace(" ", "", $item_size);
		//		$item_size='<div>hi</div>'.$item_size.'<div>hi</div>';

        //	echo $item_size;



        $item_image_url_str="";

        $item_image_arr= array();


        for ($j=0;$j<sizeof($item_image_url_arr);$j++) {
            array_push($item_image_arr, $item_image_url_arr[$j]->find("a img", 0)->getAttribute('data-src'));

        }

        $empty_space= 7-sizeof($item_image_arr);



        $menu_order = $smallest_menu_order+($i+1)*100 - (sizeof($sku_arr)+1)*100 ;
  //      echo $menu_order;
//    $menu_order = $smallest_menu_order;//sizeof($sku_arr);
  echo'<tr>';
        echo '<td>'.$menu_order.'</td>';
        echo '<td>'.$sku_arr[$i].'</td>';
        echo '<td>'.$item_name.'</td>';
        echo '<td>simple</td>';
        echo '<td>'.$yen_price.'</td>';

        echo '<td>'.cost_to_price($yen_price).'</td>';
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
