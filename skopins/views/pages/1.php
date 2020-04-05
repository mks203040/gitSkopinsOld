<table class='s2' style="height:450px">




<td class="
">

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



<table class="next">
<tr>

<td width="900" class="menutext">
<a href="https://soundcloud.com/skopins-ru">НЕ ОТКРЫВАЕТСЯ ПЕСНЯ, ЖМИ СЮДА..</a>

<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/47293568&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
    
 <?
$menu = get_content_filter($_GET['view']);
foreach($menu as $item):?>
<a onclick="TINY.box.show({url:'get.php?content=<?=$item['id'];?>',width:600,height:600})" class="get"> 
<?=$item['title'];?> </a><br/>
<? endforeach; ?>`
</td>



</tr>
</table>
</table>