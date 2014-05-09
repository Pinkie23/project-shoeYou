<?php
<<<<<<< HEAD
session_start();

if (!isset($_SESSION['id'])){
}

$ses_id = $_SESSION['id'];

?>
=======
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
		header("location: index.php");
		exit();
	}
        $session_id=$_SESSION['id'];
?>
>>>>>>> 27dd94b34124f646359dad0c2c07cb60c791fe46
