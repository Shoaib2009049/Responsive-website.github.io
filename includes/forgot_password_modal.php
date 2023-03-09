<div class="modal fade" id="forgot_password-modal" tabindex="-1" role="dialog" aria-labelledby="forgot_password-heading" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="forgot_password-heading">Forgot Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="forgot_password-form" class="form" role="form" method="post" action="api/forgot_password_submit.php">
                <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
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
                        <input type="password" class="form-control" name="new_password" placeholder="New_Password" minlength="6" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm_Password" minlength="6" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Confirm</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <span>Already have an account?
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>  
                </span>
                </div>
        </div>
    </div>
</div>