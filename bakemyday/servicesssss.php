<?php

    $dsn = 'mysql:localhost;dbname=bakemyday';
    $username = 'localhost';
    $password = '';
try{
    $db = new PDO($dsn, $username, $password);
    }
catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
$page=$db->prepare("SELECT * FROM products");
$page->execute();

foreach ($page->fetchAll(PDO::FETCH_ASSOC) as $row) {

//echo a row
//is working
}
while ($row = $page->fetch(PDO::FETCH_ASSOC)){
   // do something awesome with row
} 

    if(!isset($category)) {
        $category = $_GET['category'];
        if (!isset($category)) {
            $category = 1;
        }
    }

    $query = "SELECT * FROM subject
              WHERE category = $category";
    $Products = $db->query($query);

    $subject_name = $Subject['subject'];

    $query = 'SELECT * FROM subject
              ORDER BY subjectID';
    $subject = $db->query($query);

    $query = "SELECT * FROM content
              ORDER BY author";
    $content = $db->query($query);
?><!DOCTYPE html>
<html>
<head>
	<title>Bake My Day</title>
	<link rel="stylesheet" href="css/stle.css">
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/project7.js"></script>

</head>
<body>
	<ul id="navbar">
		<li>
			<a href="index.php">Home</a>
		</li>
		<li>	
			<a href="gallery.php">Gallery</a>
		</li>
		<li>
			<a href="services.php">Services</a>
		</li>
	    <li>
	    	<a href="contact.php">Contact</a>
	    </li>
	    <li>
	    	<a href="buyHappiness.php">Buy Happiness</a>
	    </li>
	</ul>
<div id="wrapper">
<div id="logo"></div>
<h1>Welcome to Bake My Day!</h1>

</p>
</div>
</body>
</html>
