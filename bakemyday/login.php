<?php
include_once('database.php');
include_once('functions.php');
   

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
    $cat = validEmail($email); 
	if(isset($cat)) {
		level($cat);
    } else "Not working";
	}

?>
