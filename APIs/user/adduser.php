

<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Content-Type:application/json");
include('connection.php');
function addUser($formData){ 		
	$firstName=$formData["firstName"];
	$lastName=$formData["lastName"];
	$email=$formData["email"];
	$__password=$formData["__password"];		
	$role=$formData["role"];
    $allUsersSummaryQuery="
		INSERT INTO ".$this->allUsersSummary." 
		SET firstName='".$firstName."', lastName='".$lastName."', email='".$email."', __password='".$__password."', userType='".$role."'";
	if( mysqli_query($this->dbConnect, $allUsersSummaryQuery)) {
		$message = "user created Successfully.";
		$status = 1;			
	} else {
		$message = "User creation failed.";
		$status = 0;			
	}
	$allUsersSummaryResponse = array(
		'status' => $status,
		'status_message' => $message
	);
	echo json_encode($allUsersSummaryResponse);
}

// echo "Connected ", $_POST;
addUser($_POST);
?>
