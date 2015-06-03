<?php

try{
	$govid = @$_POST["authid"];
	$dbh = new PDO('mysql:host=localhost;dbname=branchC',"root","");
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$prep = $dbh->prepare('SELECT * FROM branchmembers');
	$prep->execute();
	while($row = $prep->fetch(PDO::FETCH_OBJ)){
		
	}
}catch(PDOException $e){
	echo "Error : ".$e->getMessage();
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>