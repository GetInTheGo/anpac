<?php
require_once 'config.php'; // The mysql database connection script

$arr = array();
$sth = $dbh->prepare("SELECT * FROM tasks");
$sth->execute();
$results = $sth->fetchAll();

foreach($results as $result) {
	array_push($arr, array(
			'id' => $result->id,
			'name' => $result->name,
			'completed' => (bool)$result->completed, // If not casted, it'll be perceived as a string because of the MySQL Tinyint(1) stuff.
			'priority' => $result->priority
			));
}

// JSON-encode the response
echo $json_response = json_encode($arr);
?>