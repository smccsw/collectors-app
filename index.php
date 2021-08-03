<?php

require_once 'functions.php';

$db = new PDO('mysql:host=db; dbname=teams', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM `f1teams`;');
$query->execute();

$teamsData = $query->fetchAll();


?>

<html lang="en">
<head>
    <title>Collector's App</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="collectorsApp.css">
</head>


<header>
    <h1>CollectZone</h1>
    <h2>2020 F1 Teams</h2>
</header>


<body>

<?php echo createTeamInfo($teamsData); ?>

</body>











