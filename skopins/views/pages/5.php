<table class='s1'>




<td class="left">

<!--
<div class="menuleft">
<h3 class="menu-left-header"><strong><? echo $page_data['title']; ?></strong></h3>
<a href="#" class="menu-hover-left">все мантры (1023)</a><br />
<a href="#">филосовские мантры (22)</a><br />
<a href="#" class="menu-left-hover">мантры о боге (108)</a><br />
<a href="#">истина (98)</a><br />
<a href="#">смысл жизни (104)</a><br />
<a href="#"></a><br />
<a href="#"></a><br />
<a href="#"></a><br />

-->

<div class="menu-a1">
<h3 class="menu-left-header"><strong><? echo $page_data['title']; ?></strong></h3>
 <?
$menu = get_content_filter($_GET['view']);
foreach($menu as $item):?>


<a href="index.php?view=5&content=<?=$item['id'];?>#l<?=$item['id'];?>" class="get" name="l<?=$item['id'];?>"   > 
<?=$item['id'];?>. <?=$item['title'];?> </a><br/>
<? endforeach; ?>
 <!--часть1end-->
 
 
 <a href="index.php?view=5&content=1#end" name="end" class="get" >Конец</a>


<br/>
</div>


</td>
<td class="right">

<!--

мантры из книги соло света

<div class="header-c">
<p class="lead"><? echo $page_data['title']; ?> ИЗ КНИГИ "СОЛО СВЕТА, АВТОРА SKOPINS, </br> (ИЗДАННОЙ В 2012 ГОДУ")</p>
</div>
-->

<table class="next">
<tr>

<td width="900" class="menutext">


<div class="menu-a2">

<? include('kms-div-get.php'); ?>
 
 
</div>
 



</td>





</tr>
</table>
</table>