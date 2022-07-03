<?php

session_start();

if($_POST['member_id'])
{
  $_SESSION['member_id']=$_POST['member_id'];
  $_SESSION['points']=$_POST['points'];
  $_SESSION['full_name']=$_POST['full_name'];
}

if($_POST['use_pts'])
{
  $_SESSION['use_pts']=$_POST['use_pts'];
}

if($_POST['cancel_pts'])
{
  $_SESSION["use_pts"]='';
}

if($_POST['token'])
{
  $_SESSION["token"]=$_POST['token'];
}


if($_POST['logout'])
{
  session_destroy();
}



?>
