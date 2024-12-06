<?php
session_start();
require("../includes/database_connect.php");
$email = $_POST['email'];
$new_password = $_POST['new_password'];
$new_password = sha1($new_password);


// to check new password=confirm password

$email = $_POST['email'];

if($_POST['new_password'] == $_POST['confirm_password']){



     $new_password = sha1($_POST['new_password']);

     $sql = "UPDATE `user` SET `password`='$new_password'  WHERE email='$email'" ;

     $result = mysqli_query($conn, $sql);



    if (!$result) {

        $response = array("success" => false, "message" => "Something went wrong!");

        echo json_encode($response); 

        return;

    }

    else{

        $response = array("success" => true, "message" => "Your password has been updated successfully!");

        echo json_encode($response);

    }

     

}  

else{

    $response = array("success" => false, "message" => "Passwords do not match!");

    echo json_encode($response); 

}




mysqli_close($conn);

echo '<script>window.location="../index.php"</script>';  

