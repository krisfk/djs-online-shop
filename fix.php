<?php
include("wp-config.php");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)) {  die('Could not connect: ' . mysqli_error());  }
if (!mysqli_select_db($conn,DB_NAME)) {  die('Could not connect: ' . mysqli_error());  }

$result = mysqli_query($conn, "SELECT term_taxonomy_id FROM ".$table_prefix."term_taxonomy");
while ($row = mysqli_fetch_array($result)) {
  $term_taxonomy_id = $row['term_taxonomy_id'];
  echo "term_taxonomy_id: ".$term_taxonomy_id." count = ";
  $countresult = mysqli_query($conn, "SELECT count(*) FROM ".$table_prefix."term_relationships WHERE term_taxonomy_id = '$term_taxonomy_id'");
  $countarray = mysqli_fetch_array($countresult);
  $count = $countarray[0];
  echo $count."
";
 mysqli_query($conn, "UPDATE ".$table_prefix."term_taxonomy SET count = '$count' WHERE term_taxonomy_id = '$term_taxonomy_id'");
        }

$result = mysqli_query($conn, "SELECT ID FROM ".$table_prefix."posts");
while ($row = mysqli_fetch_array($result)) {
  $post_id = $row['ID'];
  echo "post_id: ".$post_id." count = ";
  $countresult = mysqli_query($conn, "SELECT count(*) FROM ".$table_prefix."comments WHERE comment_post_ID = '$post_id' AND comment_approved = 1");
  $countarray = mysqli_fetch_array($countresult);
  $count = $countarray[0];
  echo $count."
";
  mysqli_query("UPDATE ".$table_prefix."posts SET comment_count = '$count' WHERE ID = '$post_id'");
        }
?>
