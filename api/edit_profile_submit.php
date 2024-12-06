<?php
require("../includes/database_connect.php");

$email = $_POST['email'];
$name = $_POST['name'];
$address = $_POST['address'];
$reason_for_contacting = $_POST['reason_for_contacting'];


$sql = "UPDATE `user` SET `name`='$name',`address`='$address',`reason_for_contacting`='$reason_for_contacting' WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Your profile has been updated successfully!");
echo json_encode($response);

mysqli_close($conn);

echo '<script>window.location="../dashboard.php"</script>';