<!DOCTYPE html>
<html>
<head>
  <title>kms-get</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" href="js/jquery.superbox.css" type="text/css" media="all" />
<script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/colorbox/jquery.colorbox.js"></script>
<link rel="stylesheet" type="text/css" href="js/colorbox/colorbox.css">


<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>







</head>
<body>




<div align="center" style="width:500px; height:500px;  margin: 0px auto; background-color:#FFF; alignment-adjust:central;">


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
 
 <a id="a3" href="kms-get.php?content=<? echo $id_next; ?>" rel="superbox[iframe][700x500]">
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
		<p><a class='iframe' href="http://wikipedia.com">Outside Webpage (Iframe)</a></p>
        
        
<a id="a3" class='group1' href="kms-get.php?content=<? echo $id_next; ?>" rel="superbox[iframe][700x500]">
<?
if (empty($id_next)): 
		echo ""; 
		else:	
		echo $link_back_block_3;	
		endif; 
?>
 </a>
        
        
        


</div>

</div>



</body>
