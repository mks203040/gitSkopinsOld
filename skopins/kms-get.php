<!DOCTYPE html>
<html>
<head>
  <title>kms-get</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<link rel="stylesheet" type="text/css" href="style/div-style.css">
<link rel="stylesheet" type="text/css" href="style/css-main.css">


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/kms-jquery-keyboard.js"></script>



</head>
<body>
<div  style="width:500px; height:500px;  margin: 0px auto; background-color:#FFF; alignment-adjust:central;">


<?
include('db_fns.php'); 
if(empty($_GET['view']))
{$view = 'index';} else {$view = $_GET['view'];}
$page_data = page_data($view);
if(empty($_GET['content']))
{$content = '';} else {$content = $_GET['content'];}
$page_content = page_content($content);
function my123() {$var = "</br> super "; return $var;}
?>

<?
$id_cat = 5;
$id_rec = $_GET['content'];
$test = get_next_page($id_cat, $id_rec);
$id_next = $test['id'];
$test2 = get_prev_page($id_cat, $id_rec);
$id_prev = $test2['id'];
// echo $id_prev; 
// echo $id_next;
?>

<?  
//если пустой массив, то ... удаляем кнопку назад; 
$link_back_block_1 = '<<< ПРОШЛЫЙ СТИХ <<< ';
$link_back_block_2 = '';
$link_back_block_3 = '>>> СЛЕДУЮЩИЙ СТИХ >>>';
 ?>
 
<a id="a1" href="kms-get.php?content=<? echo $id_prev; ?>"><? 
if (empty($id_prev)): 
		echo ""; 
		else:	
		echo $link_back_block_1;	
		endif; 
?></a>
<a id="a2" href="kms-get.php?content=<? echo $id_next; ?>">
<?
if (empty($id_next)): 
		echo ""; 
		else:	
		echo $link_back_block_3;	
		endif; 
?>
 </a>
</br>
<div class='get_content'>
<h1><? echo $page_content['id']; ?>. <? echo $page_content['title']; ?></h1> 
<p class="lead"><? echo $page_content['comment']; ?></p>
<p class="data"> <? echo $page_content['text']; ?></p>
<p class="lead" style="font-size:16px;">skopins.ru, мантры</p>
<a id="a3" class='iframe' href="kms-get.php?content=1" >start me</a>
        
        
        


</div>

</div>



</body>
