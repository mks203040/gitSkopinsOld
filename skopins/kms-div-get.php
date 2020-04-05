<?
$id_cat = 5;
$id_rec = $_GET['content'];
$test = get_next_page($id_cat, $id_rec);
$id_next = $test['id'];
$test2 = get_prev_page($id_cat, $id_rec);
$id_prev = $test2['id'];
// echo $id_prev; 
// echo $id_next;

// случайный стих номер
$rand = rand(1, 1094); 

//если пустой массив, то ... удаляем кнопку назад; 
$link_back_block_1 = '<img src="images/btn02.png" /> ';
$link_back_block_2 = '<img src="images/btn03.png" /> ';
$link_back_block_3 = '<img src="images/btn01.png" />';
 ?>
 


<table style="width:100%">
  <tr>
    <td style="width:65px; height:60px; text-align:center; ">
    

<a id="a1" href="index.php?view=5&content=<? echo $id_prev; ?>#l<? echo $id_prev; ?>"><? 
if (empty($id_prev)): 
		echo ""; 
		else:	
		echo $link_back_block_1;	
		endif; 
?></a>

 
    
    </td>
    <td  style=" text-align:center; vertical-align: auto; ">
    
    <h1><? echo $page_content['title']; ?></h1> 
<p class="lead"><? echo $page_content['comment']; ?></p>


    </td>		
   
   
    <td  style=" text-align:center;  width:65px;">

<a id="a2" href="index.php?view=5&content=<? echo $id_next; ?>#l<? echo $id_next; ?>">
<?
if (empty($id_next)): 
		echo ""; 
		else:	
		echo $link_back_block_3;	
		endif; 
?>


    </td>
    
  </tr>
</table>



<p class="lead" style=" margin-top:-10px;" ><? echo $page_content['id']; ?></p>

<!--
<h5>"Совет: Нажмите на клавиатуре: пробел, лево, право..."</h5>
-->

<p class="data"> <? echo $page_content['text']; ?></p>

   
        
<a id="a3" href="index.php?view=5&content=<? echo $rand; ?>#l<? echo $id_next; ?>">
<?
if (empty($id_next)): 
		echo ""; 
		else:	
		echo $link_back_block_2;	
		endif; 
?> </a>

<h4>Совет: </br> "Нажми пробел и получи СЛУЧАЙНЫЙ СТИХ."</h4>




</body>
