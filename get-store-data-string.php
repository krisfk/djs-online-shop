<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <b>sku</b> <br>
    <code>for(i=0;i<$('.product-grid__tile').length;i++)
{
console.log($('.product-grid__tile').eq(i).attr('data-pid'))
}</code> <br><br>
<b>product name</b> <br>
<code>
  for(i=0;i<$('.product__tile_name .product__tile_link').length;i++)
  {
  console.log($('.product__tile_name .product__tile_link').eq(i).html())
  }
</code><br><br>

<b>price</b><br>
<code>
for(i=0;i<$('.price .value').length;i++)
{
console.log($('.price .value').eq(i).attr('content'))
}
</code>
<br><br>

<code>
SELECT * FROM `wp_posts` as post INNER JOIN wp_term_relationships rs ON rs.object_id = post.ID WHERE `post_type` = "product" AND `post_status` = "publish" AND rs.term_taxonomy_id ='23' AND post.post_date < '2021-01-01' ORDER BY post_title
</code>

<br><br>
<b>delete store product</b> <br>
<code>
  DELETE FROM `wp_posts` WHERE id IN ( SELECT * FROM ( SELECT id FROM `wp_posts` as post INNER JOIN wp_term_relationships rs ON rs.object_id = post.ID WHERE `post_type` = "product" AND `post_status` = "publish" AND rs.term_taxonomy_id ='23' AND post.post_date < '2021-01-01' ORDER BY post_title)AS p)
</code>

  </body>
</html>
