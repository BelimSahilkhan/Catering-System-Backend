
<?php 
require_once('./includes/header.php');
require_once('./includes/navbar.php');


?>
    <!-- Register page -->

    <div class="container bg-white border border-1 mt-5 p-4">
        <a href="" class="ms-5 p-5"><b>Register here</b></a>
    </div>
    <div class="container bg-white border border-1 mt-2 p-4 col-md-7">

        <div class="row">
            <div class="col-md-5">
                <h5 class="text-center">Register here</h5>
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
                        <input type="password" name="cpass" placeholder="Confirmed Password *" class="form-control">
                    </div>


                    
                    <div class="input-group mt-3">
                        <input type="text" name="phone" placeholder="Phone *" class="form-control">
                    </div>

                    
                    <div class="input-group mt-3">
                        <textarea name="address" placeholder="Address *" class="form-control"></textarea>
                    </div>
                    
                    <div class="input-group mt-3">
                        <input type="submit" name="register" value="SignUp" class="btn btn-sm btn-dark text-white">
                        
                        <input type="reset" name="reset" value="Reset" class="btn btn-sm btn-danger text-white ms-3">
                       
                    </div>

                    
                    <div class="input-group mt-3">
                          <b class="ms-3">Already have an Account ?<a href="login.php">Login here</a></b>
                    </div>
                </form>
            </div>

        </div>
     
    </div>

    <?php 
require_once('./includes/footer.php');
?>