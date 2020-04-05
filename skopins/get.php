<!DOCTYPE html>
<html>
<head>
  <title>Video.js | HTML5 Video Player</title>

  <!-- Chang URLs to wherever Video.js files will be hosted -->
  <link href="video-js.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
$(document).keydown(function(e) {
    switch(e.which) {
        case 37: // left
		  alert( "left pressed" );
        break;

        case 38: // up
		  alert( "up pressed" );
	
		  
        break;

        case 39: // right
		  alert( "left pressed" );
		  $
        break;

        case 40: // down
		  alert( "left pressed" );
        break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});
</script>


</head>
<body>

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

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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

<a onclick="TINY.box.show({url:'get.php?content=<? echo $id_prev; ?>',width:600,height:600})" class="get" id="buttonPrevious"><? 
if (empty($id_prev)): 
		echo ""; 
		else:	
		echo $link_back_block_1;	
		endif; 
?></a>


<a onclick="TINY.box.show({url:'get.php?content=<? echo $id_next; ?>',width:600,height:600})" class="get" id="buttonNext">
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



<p class="data">
<? echo $page_content['text']; ?>
</p>

<p class="lead"></p>
<p class="lead" style="font-size:16px;">skopins.ru, мантры</p>


</div>

</body>
