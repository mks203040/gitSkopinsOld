<?

include_once "analyticstracking.php";

include('db_fns.php'); 

if(empty($_GET['view']))
{$view = 'index';} else {$view = $_GET['view'];}

$page_data = page_data($view);


if(empty($_GET['content']))
{$content = '';} else {$content = $_GET['content'];}

$page_content = page_content($content);


include($_SERVER['DOCUMENT_ROOT'].'/skopins/views/layouts/site.php'); 

function my123() {$var = "</br> super "; return $var;}

?>