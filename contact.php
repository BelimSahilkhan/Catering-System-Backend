
<?php 
require_once("./config/config.php");
require_once('./includes/header.php');
require_once('./includes/navbar.php');
// send data or stored data in contact us tables 
if(isset($_POST["contact_us"]))
{
    date_default_timezone_set("Asia/Calcutta");
    $fnm=$_POST["fname"];
    $lnm=$_POST["lname"];
    $em=$_POST["email"];
    $phone=$_POST["phone"];
    $sub=$_POST["subject"];
    $msg=$_POST["message"];
    $date_time=date("d/m/Y H:i:s");
    $insert="insert into tbl_contact(firstname,lastname,email,phone,subject_id,message,contact_date_time) values('$fnm','$lnm','$em','$phone','$sub','$msg','$date_time')";
    $exe=mysqli_query($con,$insert);
    echo "<script>
    
    alert('Thanks for contact with us we will contact with you Soon')
    window.location='contact.php';
    
    </script>";
}
?>
    <!-- Register page -->

    <div class="container bg-white border border-1 mt-5 p-4">
        <a href="" class="ms-5 p-5"><b>Contact with Us</b></a>
    </div>
    <div class="container bg-white border border-1 mt-2 p-4 col-md-7">

        <div class="row">
            <div class="col-md-5">
                <h5 class="text-center">Contact with Us</h5>
                <img src="https://media.tenor.com/p0G_bmA2vSYAAAAd/login.gif" class="w-75 ms-3">
            </div>
            <div class="col-md-7">
                <form method="post">
                <div class="row">
                <div class="form-group mt-3 col-md-6">
                        <input type="text" name="fname" placeholder="FirstName *" class="form-control" required>
                    </div>

                    <div class="form-group mt-3 col-md-6">
                        <input type="text" name="lname" placeholder="LastName *" class="form-control" required>
                    </div>

                </div>    
                    <div class="input-group mt-3">
                        <input type="email" name="email" placeholder="Email *" class="form-control" required>
                    </div>
                    
               
                    <div class="input-group mt-3">
                        <input type="text" name="phone" placeholder="Phone *" class="form-control" required>
                    </div>

                    
                    <div class="input-group mt-3">
                        <select name="subject" placeholder="Subject *" class="form-control" required>
                          <option value="">-select subject-</option>
                          <?php
                          $select="select * from tbl_subject";
                          $exe=mysqli_query($con,$select);
                          while($fetch=mysqli_fetch_array($exe))
                          {
                          ?>
                          <option value="<?php echo $fetch["subject_id"]; ?>"><?php echo $fetch["subjectname"]; ?></value>
                          <?php 
                          }
                          ?>
                        </select>
                    </div>



                    
                    <div class="input-group mt-3">
                        <textarea name="message" placeholder="Message *" class="form-control" required></textarea>
                    </div>
                    
                    <div class="input-group mt-3">
                        <input type="submit" name="contact_us" value="Send" class="btn btn-sm btn-dark text-white">
                        
                        <input type="reset" name="reset" value="Reset" class="btn btn-sm btn-danger text-white ms-3">
                       
                    </div>

                </form>
            </div>

        </div>
     
    </div>

    <?php 
require_once('./includes/footer.php');
?>