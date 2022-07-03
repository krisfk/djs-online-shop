
<meta name="viewport" content="width=device-width, initial-scale=1">



<h1>DJS Create ShortCut</h1>
<h2>http://www.djs.com.hk/go/_______</h2>
<br/>
<form action="create-link.php" method="post">
folder name:<br/><input type="text" name="foldername"><br><br>
redirect url:<br/><input type="text" name="redirecturl"><br><br>
<input type="submit">
</form>


<?php


$foldername = $_POST['foldername'];
$redirecturl= $_POST['redirecturl'];

if($foldername)
{
	mkdir('./go/'.$foldername, 0777, true);
	$fh = fopen('./go/'.$foldername.'/index.html', 'w') or die("can't open file");
	fwrite($fh, '<!doctype html>');
	fwrite($fh, "<html>");
	fwrite($fh, '<meta charset="UTF-8">');
	fwrite($fh, '<title>Untitled Document</title>');
	fwrite($fh, '<script type="text/javascript">');
	fwrite($fh,  "window.location='".$redirecturl."';");
	fwrite($fh, '</script>');
	fwrite($fh, '</head>');
	fwrite($fh, '<body>');
	fwrite($fh, '</body>');
	fwrite($fh, '</html>');
	fclose($fh);

echo "<b>http://www.djs.com.hk/go/".$foldername." is created!!</b><br/><br/>Redirect to <b>".$redirecturl."</b>";
}
//mkdir('./go/test1', 0777, true);



?>
