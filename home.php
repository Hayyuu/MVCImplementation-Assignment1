<?php
require_once('regController.php');
require_once('regModel.php');


@$op=$_REQUEST['OP'];

$regController=new regController();

switch ($op) {
	case 'create':
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		if($regController->create($firstname,$lastname,$lastname,$username,$email,$password)){
			header("Location:success.php");
		}
		break;
	
	default:
		# code...
		break;
}

?>