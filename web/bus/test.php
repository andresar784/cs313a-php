<?php
	require_once('bd.php');
	$db = DB::init();
	$statement = $db->prepare("SELECT id, place_name FROM place";
	$statement->execute();
	while($row = $statement->fetch(PDO::FETCH_ASSOC))
	{	
		<p>
		$row['id'] . $row['place_name'];
		</p>
	}
	
?>