<!-- !!! dbNFS !!!-->




<?

	function db_connect()
	{
		$host1 = "mysql.hostinger.lv";
		$user1 = "u787109428_sko"; 
		$pswd1 = "passvass2014";
		$db1 = "u787109428_sko";
		
		
		$host = "norris.beget.ru";
		$user = "lva04ykg_skopins"; 
		$pswd = "lvalva2014";
		$db = "lva04ykg_skopins";
		
		$connection = mysql_connect ($host, $user, $pswd);
		
		mysql_set_charset("utf8");
		
		if(!$connection || !mysql_select_db($db, $connection))
			{
				return false; 
			}
			return $connection;	
	}
	
	


	function db_result_to_array($result) {
		$res_array = array (); 
		$count = 0; 
		while($row = mysql_fetch_array($result))
		{
				$res_array[$count] = $row;
				$count++; 
		}
		return $res_array;
	}

	function get_menu() 
	{
		db_connect ();
		$query = "SELECT * FROM pages";
		$result = mysql_query($query); 
		$result = db_result_to_array($result);
		return $result; 
	}
	
	
	function page_data($title)
	{
		db_connect();
		$query = sprintf("SELECT * FROM pages WHERE pages.title_url = '%s' ",
								mysql_real_escape_string($title));
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);

		return $row;
	}
	
	

	
	
	function get_content() 
	{
		db_connect ();
		$query = "SELECT * FROM content";
		$result = mysql_query($query); 
		$result = db_result_to_array($result);
		return $result; 
	}
	
	function get_content_filter($title) 
	{
		db_connect ();
	$query = sprintf("SELECT * FROM content WHERE content.id_cat1 = '%s' ",
								mysql_real_escape_string($title));
		$result = mysql_query($query); 
		$result = db_result_to_array($result);
		return $result; 
	}

	
	
	function page_content($title)
	{
		db_connect();
		$query = sprintf("SELECT * FROM content WHERE content.id = '%s' ",
								mysql_real_escape_string($title));
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);

		return $row;
	}
	
	
	function next_page() // временная мера переключение между стихами; нужно, чтобы из БД находил запись и переходил на следуюю брал ид, и его возвращал; 
	{
		$id = $_GET['content'];
		$id2 = $id+1; 
		return $id2;
	}
		
		
	function prev_page() // временная мера переключение между стихами; 
	
	{
		$id = $_GET['content'];
		$id2 = $id-1; 
		return $id2;
	}
	
	
	
	function get_next_page($id_cat, $id_rec) 
	{
	db_connect ();
	$query = sprintf("SELECT * FROM content 
											  WHERE content.id > $id_rec 
											  AND content.id_cat1 = $id_cat
											  ORDER BY id ASC
											  LIMIT 1");
		$result = mysql_query($query); 
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	
	function get_prev_page($id_cat, $id_rec) 
	{
	db_connect ();
	$query = sprintf("SELECT * FROM content 
											  WHERE content.id < $id_rec 
											  AND content.id_cat1 = $id_cat
											  ORDER BY id DESC
											  LIMIT 1");
		$result = mysql_query($query); 
		$row = mysql_fetch_array($result);
		return $row;
	}
	
	

function printmode()
{
    db_connect();
    $query = "SELECT * FROM content";
    $result = mysql_query($query);
    $result = db_result_to_array($result);
    return $result;
}
	
	
//$id=$_GET['id'];
//$id = $currentid;

//$prevquery= "SELECT * FROM inventory WHERE id < $currentid ORDER BY id DESC LIMIT 1"; 
//$prevresult = mysql_query($prevquery);

//$nextquery= "SELECT * FROM inventory WHERE id > $currentid ORDER BY id ASC LIMIT 1"; 
// $nextresult = mysql_query($nextquery);

		

?>