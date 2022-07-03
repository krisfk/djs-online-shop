<?php
require_once "simple_html_dom.php";
$uid=$_POST['uid'];
$url = "http://store.disney.co.jp/g/g".$uid."/";
//	$url = "https://store.disney.co.jp/g/g4936313854497/";

	$htmlContent = str_get_html(file_get_contents($url));
	$item_stock = trim($htmlContent->find("dl[class=p-product__count__state] dd",0)->plaintext);
	$soon = trim($htmlContent->find("p[class=c-icon-txt_word]",0)->plaintext);

if($soon=='Coming Soon')
{
	echo '○';
}
else {
	echo $item_stock;
}


?>
