<?php
include_once('database.php');
include_once('functions1.php');
   

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'display_form';
    }
}
if ($action == 'display_form') {
include_once('buyHappiness.php');
}
elseif ($action == 'validate_email') {
    $email = $_GET['email'];
    $fName = $_GET['fName'];
    $cat = login($email,$fName); 
	if(isset($cat)) {
		level($cat);
    } else "Not working";
	}

?>
