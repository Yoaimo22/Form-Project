<?php
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Class = $_POST['Class'];
	$Gender = $_POST['Gender'];
	$quest = $_POST['quest'];
	$quest2 = $_POST['quest2'];
	$quest3 = $_POST['quest3'];
	$quest4 = $_POST['quest4'];
	$quest5 = $_POST['quest5'];
	$quest6 = $_POST['quest6'];
	$quest7 = $_POST['quest7'];
	$quest8 = $_POST['quest8'];
	$quest9 = $_POST['quest9'];
	$quest10 = $_POST['quest10'];
	// Database connection
	$conn = new mysqli('localhost','id18434844_root','m&2IO[OM+\SvmQD<','id18434844_kuisioner');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die('Connection Failed : '. $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into kuisioner(Name,Email,Class,Gender,quest,quest2,quest3,quest4,quest5,quest6,quest7,quest8,quest9,quest10) 
		values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssssssssss", $Name, $Email, $Class, $Gender, $quest, $quest2, $quest3, $quest4, $quest5, $quest6, $quest7, $quest8, $quest9, $quest10);
		$execval = $stmt->execute();
		echo $execval;
		echo  "successfull Terimakasih Sudah Mengisi...";
		$stmt->close();
		$conn->close();
	}
 ?>