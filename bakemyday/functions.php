<?php

function validEmail($email) {	
global $db;	
$query = 'SELECT * FROM members
                  WHERE email = :email';
$statement1 = $db->prepare($query);
$statement1->bindValue(':email', $email);
$statement1->execute();
$category = $statement1->fetch();
$statement1->closeCursor();
return $category; 

}

function level($cat) {
global $db;	 
if ($cat['userLevel'] == "A") {
	echo "Welcome " . $cat['email'] . " you are logged in as Admin";
	} elseif($cat['userLevel'] == "M") {
	echo "Welcome " . $cat['email'] . " you are logged in as Member";
	} else {
		echo "Invalid Email";
		}
	}
?>