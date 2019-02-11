<?php
	
	$statement = $db->prepare("SELECT id, place_name FROM places";
	$statement->execute();
	while($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
	echo $row['id'] . $row['place_name']
	}
?>