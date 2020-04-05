<table class='s1'>




<td class="left">

<!--<div  class="menuleft">
<h3 class="menu-left-header"><strong><? echo $page_data['title']; ?></strong></h3>
<a href="#" class="menu-hover-left">все мантры (1023)</a><br />
<a href="#">филосовские мантры (22)</a><br />
<a href="#" class="menu-left-hover">мантры о боге (108)</a><br />
<a href="#">истина (98)</a><br />
<a href="#">смысл жизни (104)</a><br />
<a href="#"></a><br />
<a href="#"></a><br />
<a href="#"></a><br />
</div>-->

</td>
<td class="right">

<div class="header-c">

<p class="lead"><? echo $page_data['title']; ?></p>
</div>

<table class="next">
<tr>

<td width="900" class="menutext">
	
 
 <article class="base"> <?
$menu = get_content_filter($_GET['view']);
foreach($menu as $item):?>


<a onclick="TINY.box.show({url:'get.php?content=<?=$item['id'];?>',width:600,height:600})" class="get"> 

<?=$item['title'];?> </a><br/>

<? endforeach; ?>

</article>










</td>

<!--<td width="300" class="menutext">
<a href="#">...</a><br  /></td>

<td width="300" class="menutext">
<a href="#">...</a><br  /></td>-->




</tr>
</table>
</table>