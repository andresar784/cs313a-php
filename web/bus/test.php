<?php
	$txt1 = "Learn PHP";
	$txt2 = "W3Schools.com";
	$x = 5;
	$y = 4;

	echo "<h2>" . $txt1 . "</h2>";
	echo "Study PHP at " . $txt2 . "<br>";
	echo $x + $y;
	/* try
		{	
			$dbUrl = getenv('DATABASE_URL');

			$dbOpts = parse_url($dbUrl);

			$dbHost = $dbOpts["host"];
			$dbPort = $dbOpts["port"];
			$dbUser = $dbOpts["user"];
			$dbPassword = $dbOpts["pass"];
			$dbName = ltrim($dbOpts["path"],'/');

			$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
			$statement = $db->prepare("SELECT id, place_name FROM place";
			$statement->execute();
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				<p>
					$row['id'] . $row['place_name'];
				</p>
		}

			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $ex)
		{
		echo 'Error!: ' . $ex->getMessage();
		die();
		} */
	
	
?>