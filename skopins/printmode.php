<? 
include('db_fns.php');
$print = printmode(); 
echo "<pre>"; 

echo "</pre>"; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Режим печати</title>
</head>
<body>

<? foreach ($print as $item): ?>
</br></br><span style=" font-weight:700;"><? echo $item['3']; ?></span></br>
<span style="font-style:italic;"><? echo $item['4']; ?> </span></br>
<span style="font-style:italic;"><? echo $item['0']; ?> </span></br></br>
<span><? echo $item['5']; ?> </span></br>
<? endforeach; ?>

</body>
</html>