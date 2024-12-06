<?php
require("../includes/database_connect.php");

$name = $_POST['name'];
$reason_for_contacting = $_POST['reason_for_contacting'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);
$address = $_POST['address'];
$address2 = $_POST['address2'];
$city  = $_POST['city'];
$state  = $_POST['state'];
$zip  = $_POST['zip'];


$sql = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
	$response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}
$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
	$response = array("success" => false, "message" => "This email id is already registered with us!");
    echo json_encode($response);
    return;
}

$sql = "INSERT INTO user (email,password,name,reason_for_contacting,address,address2,city,state,zip) VALUES ('$email','$password','$name','$reason_for_contacting','$address','$address2','$city','$state','$zip')";
$result = mysqli_query($conn, $sql);
if (!$result) {
	$response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
	return;
}

$response = array("success" => true, "message" => "Your account has been created successfully!");
echo json_encode($response);
echo '<script>window.location="../index.php"</script>';
//echo "<h3>data stored in a database successfully."
				//. " Please browse your localhost php my admin"
				//. " to view the updated data</h3>";

				
				
				
//echo "Your account has been created successfully!";
?>

Click <a href="../index.php">here</a> to continue.
<?php
mysqli_close($conn);