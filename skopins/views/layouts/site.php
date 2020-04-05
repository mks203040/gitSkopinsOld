<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><? echo $page_data['title']; ?></title>

<!--
 print_r($view); 
 print_r(page_data($view)); 
 echo $view;
-->

<?php include_once "analyticstracking.php"; ?>

<meta name="keywords" content="<? echo $page_data['keywords']; ?>" />
<meta name="description" content="<? echo $page_data['description']; ?>" />
<link rel="stylesheet" type="text/css" href="style/div-style.css">
<link rel="stylesheet" type="text/css" href="style/css-main.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/kms-jquery-keyboard.js"></script>
<script type="text/javascript" src="js/tinybox.js"></script>






</head>
<body>



<div class="top">


  
<div style="margin-left: 330px;
margin-top: 0px;
padding-top: 90;
padding-left: 60; ">


<!--
 <form style="margin-top:10px; margin-right: 20px;"  action="../pages/index.html" id="recover" >            
        <input type="text" name="login" placeholder="Найти стихотворение..." class="loginUsername">    
    </form>
-->

<!--
<a href="index.php?view=index" class="menu-up">МАНТРЫ</a> 
<a href="index.php?view=news" class="menu-up ">СТИХИ</a> 
<a href="index.php?view=video" class="menu-up  menu-hover">ЛИРИКА</a>
<a href="#" class="menu-up">ДЕТСКИЕ СКАЗКИ</a>
<a href="#" class="menu-up">ПЕСНИ</a>
<a href="#" class="menu-up">ТВОРЧЕСКИЙ КОЛЕКТИВ</a>
 -->
 
  
<?
$menu = get_menu();
foreach($menu as $item):?>

<a href="index.php?view=
<?=$item['title_url'];?>&content=1" 



class="menu-up <? if ($view == $item['title_url']) 
echo "menu-hover"?> "> <?=$item['title'];?> </a>

<? endforeach; ?>

<?

?>

</div>

</div>

<?
include($_SERVER['DOCUMENT_ROOT'].'/skopins/views/pages/'.$view.'.php'); 
?>




<p class="data" style=" color:#FFF">
WWW.SKOPINS.RU
</p>






</body>
</html>