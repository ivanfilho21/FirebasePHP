<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

define('ROOT', __DIR__.'/');

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

//$factory = (new Factory())->withDatabaseUri('https://teste-d2153-firebaseio.com');
$factory = (new Factory())->withServiceAccount(ROOT.'secretkey/teste-d2153-credentials.json');

$database = $factory->createDatabase();

$reference = $database->getReference('things');
echo $reference->getKey() .': ' .$reference->getValue();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="actionBar">
		<h1>MyApp</h1>
	</div>

	<div class="fab">
		+
	</div>
</body>
</html>