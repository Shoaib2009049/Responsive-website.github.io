<?php
session_start();
require "includes/database_connect.php";

if (!isset($_SESSION["user_id"])) {
    header("location: index.php");
    die();
}
$user_id = $_SESSION['user_id'];

$sql_1 = "SELECT * FROM user WHERE id = $user_id";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$user = mysqli_fetch_assoc($result_1);
if (!$user) {
    echo "Something went wrong!";
    return;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Raman Satationary</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/dashboard.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/login_modal.php";
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Dashboard
            </li>
        </ol>
    </nav>

    <div class="my-profile page-container">
        <h1>My Profile</h1>
        <div class="row">
            <div class="col-md-3 profile-img-container">
                <i class="fas fa-user profile-img"></i>
               
            </div>
            <div class="col-md-9">
                <div class="row no-gutters justify-content-between align-items-end">
                    <div class="profile">
                        <div class="name"><?= $user['name'] ?></div>
                        <div class="email"><?= $user['email'] ?></div>
                        <div class="address"><?= $user['address'] ?></div>
                        <div class="reason_for_contacting"><?= $user['reason_for_contacting'] ?></div>
                    </div>
                    <div class="edit">
                       <!-- <div class="edit-profile">Edit Profile</div>-->
                       <div class="edit-profile" data-toggle="modal" data-target="#edit-profile-modal">Edit Profile</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    
    ?>

<div class="modal fade" id="edit-profile-modal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-heading"> Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="edit-profile-form" class="form" role="form" method="post" action="api/edit_profile_submit.php">
                <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="name" value="<?= $user['name'] ?>"  placeholder=" Name" maxlength="30" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="address" value="<?= $user['address'] ?>" placeholder="Address" maxlength="100" minlength="40" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>" readonly  placeholder="Email" required> <!-- Email has been disabled to be edited, because it is used by us for authentification -->
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-university"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="reason_for_contacting" value="<?= $user['reason_for_contacting'] ?>" placeholder="reason_for_contacting" maxlength="150" required>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">EDIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    
    <script type="text/javascript" src="js/dashboard.js"></script>
   <script type="text/javascript" src="js/common.js"></script>
</body>

</html>
