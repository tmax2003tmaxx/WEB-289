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

    // if(!isset($category_id)) {
    //     $category_id = $_GET['category_id'];
    //     if (!isset($category_id)) {
    //         $category_id = 1;
    //     }
    // }

    $query = "SELECT * FROM products";
    $Products = $db->query($query);

    $category_id = $Products['category'];

    $query = 'SELECT * FROM products
              ORDER BY category';
    $subject = $db->query($query);

?>
<!DOCTYPE html>
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
<h1>Welcome to Bake My Day!

    <form id="author" method="post" action="services.php?go">
        <h3>Click for a list of Products</h3>
        <input type="submit" name="submit" value="Search">
    </form>
</h1>
<?php
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  //connect  to the database
  $db=mysql_connect  ("127.0.0.1", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("bakemyday");
  //-query  the database table
      $sql = "SELECT * FROM products";
  // $sql="SELECT   authorfn, authorln FROM content order by authorln";
  //-run  the query against the mysql query function
  $result=mysql_query($sql);
echo "<h1>" . "Products" . "</h1>";
  //-create  while loop and loop through result set
  while($row=mysql_fetch_array($result)){
          $productName  =$row['productName'];
          $description  =$row['description'];
          $price=$row['price'];
          $productID=$row['productID'];
  //-display the result of the array

  echo "<h4>" .$row['productName'] . '  $'. $row['price']   ."" . "</h4>\n";
  

  }
  }
  else{
  echo  "<h5>Please take a step back and enter an Author</h5>";
  }
  }
  ?>

</div>
</body>
</html>
