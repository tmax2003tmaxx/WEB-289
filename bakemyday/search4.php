<!DOCTYPE html>
<html>
<head>
    <title>Bake My Day</title>
    <link rel="stylesheet" href="css/stle.css">
    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="js/project7.js"></script>

</head>
<body><ul id="navbar">
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

    <form id="author" method="post" action="search4.php?go">
        <h3>by Author</h3>
        <p>Display's a list of Authors</p>
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
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
echo "<h1 id='Subjects'>" . " Authors " . "</h1>";
  //-create  while loop and loop through result set
  while($row=mysql_fetch_array($result)){
          $productName  =$row['productName'];
          $description  =$row['description'];
          $price=$row['price'];
          $productID=$row['productID'];
  //-display the result of the array

  echo "<ul>\n";
  echo "<li>" . '<a href="somefile3.php?authorfn='.$row['productName'].'&authorln='.$row['description'].'">'.$row['productName'].' '. $row['price'] .'</a>'   ."" . " </a></li>\n";
  
  
  echo "</ul>";
  }
  }
  else{
  echo  "<h5>Please take a step back and enter an Author</h5>";
  }
  }
  


?>    </div>
</div></body></html>