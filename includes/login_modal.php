<div class="header sticky-top">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="index.php">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">
                <?php
                //Check if user is loging or not
                if (!isset($_SESSION["user_id"])) {
                ?>
                <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#forgot_password-modal">
                            <i class="fas fa-user"></i>Forgot_Password
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><!--data-toggle="modal" data-target="#signup-modal"-->
                            <i class="fas fa-user"></i>Signup
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <div class='nav-name'>
                        Hi, <?php echo $_SESSION["name"] ?>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="fas fa-user"></i>Dashboard
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fas fa-sign-out-alt"></i>Logout
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>
</div>

<div id="loading">
</div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login-heading">Login with Raman Stationary</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="login-form" class="form" role="form" method="post" action="api/login_submit.php">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <span>
                    <a href="contact.php" ><!--data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">-->Click here</a>
                    to register a new account
                </span>
                <div class="modal-footer">
                <span> Forgot Password?
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#forgot_password-modal">Click here to Reset</a>
</span>
            </div>
        </div>
    </div>
</div>
</div>