<?php 
require_once('./includes/header.php');
require_once('./includes/navbar.php');


?>

    <!-- Login page -->

    <div class="container bg-white border border-1 mt-5 p-4">
        <a href="" class="ms-5 p-5"><b>Login here</b></a>
    </div>
    <div class="container bg-white border border-1 mt-2 p-4 col-md-7">

        <div class="row">
            <div class="col-md-5">
                <h5 class="text-center">SignIn here</h5>
                <img src="https://media.tenor.com/p0G_bmA2vSYAAAAd/login.gif" class="w-75 ms-3">
            </div>
            <div class="col-md-7">
                <form method="post">
                    <div class="input-group mt-3">
                        <input type="email" name="email" placeholder="Email *" class="form-control">
                    </div>
                    
                    <div class="input-group mt-3">
                        <input type="password" name="pass" placeholder="Password *" class="form-control">
                    </div>

                    
                    <div class="input-group mt-3">
                        <input type="submit" name="login" value="SignIn" class="btn btn-sm btn-dark text-white">
                        <b class="ms-3"><a href="forgetpassword.php">Forget password ?</a></b>
                    </div>

                    
                    <div class="input-group mt-3">
                          <b class="ms-3">Don't have Account ?<a href="register.php">Create Account</a></b>
                    </div>
                </form>
            </div>

        </div>
     
    </div>

    <?php 
require_once('./includes/footer.php');

?>