<?php
	require_once('bd.php');
	$db = DB::init();
	$statement = $db->prepare("SELECT id, place_name FROM place");
	$statement->execute();
	$place_name = array();
	while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
		$place_name[$row['id']] = $row['place_name'];
	}
	var_dump($place_name);
	echo $place_name[1];
		
				
				
				
				/* echo $row['id'] . " " . $row['place_name'] . '<br/>';}
				
		foreach ($db->query('SELECT id, place_name FROM place') as $row)
				$id = $row['id'];
				$place_name = $row['place_name'];
				
				
		echo $place_name; */
		
				

?>
	
	