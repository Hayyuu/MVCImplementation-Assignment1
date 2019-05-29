<?php
class regController{

	function create(){

	if(!empty($firstname)||!empty($lastname)||!empty($username)||!empty($email)||!empty($password)){
		$dbname="mydb";
		$dbpassword="";
		$dbusername="root";
		$host="localhost";
	
		$conn = new mysqli($host, $dbusername, $dbpassword,$dbname);

// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	else{
		$stmnt=$conn->prepare("select email from register where email=? Limit 1");
		$stmnt->bind_param("s",$email);
		$stmnt->execute();
		$stmnt->bind_result($email);
		$stmnt->store_result();
		$rnum=$stmnt->num_rows;
		if($rnum==0){
			$stmnt->close();
			$insert="insert into register(firstName,lastName,userName,email,password) values (?,?,?,?,?)";
			$stmnt=$conn->prepare($insert);
			$stmnt->bind_param("sssss",$firstname,$lastname,$username,$email,$password);
			$stmnt->execute();
			return True;
		}
		else{
	   		return False;
		} 
	
	$stmnt->close();
	$conn->close();
}
}

}
}

?>