<?php
    require "adminheader.php";
?>


<!DOCTYPE html>
<html lang="en">
<title>Complainant Sign up</title>
<head>
  
    </head>

<body>

<br>
    <div class="container">

        <div class="row">
            <div class="col-lg-"></div>
            <div class="card">
                 <div class="card-body">            

            
                <div id="iu">

            	   <form class="form-group">
                    <h4 class"loginheader" align="left">Sign up</h4>

                    
            	
            	       <div class="row">
            		      <div class="col-lg-6">
            			     
            			     <b>Reference Number*</b>
            			     <input type="text" name="rnumber" class=form-control placeholder="Enter your reference number...">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                            <b>First Name</b>
                            <input type="text" name="fname" class=form-control placeholder="Enter your first name...">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                            <b>Last Name</b>
                            <input type="text" name="lname" class=form-control placeholder="Enter your last name...">
                            </div>
                        </div>

                            
                        <div class="row">
                        <div class="col-lg-6">
                                 <b>Password*</b>
                             <input type="password" name="password" class=form-control placeholder="Enter a password...">
                            </div>
                            
                            <div class="col-lg-6">
                            <b>Confirm Password*</b>
                            <input type="password" name="cpassword" class=form-control placeholder="Re-enter password...">
                            </div>
                        </div>
                           
                        <div class="row">
                            <div class="col-lg-6">
                            <br>
                           <button  type="submit" id="sendsignup" class="btn btn-primary" formation="/homeitrack.php">
                            <a href= "homeitrack.php" style="color:white;text-decoration:none"> Submit</a>
                           </button>


                           <button  type="cancel" id="sendsignup" class="btn btn-primary" formation="/homeitrack.php">
                            <a href= "index.php" style="color:white;text-decoration:none"> Cancel</a>
                           </button>
                       </div>


                            
                     


                           

                           
                           </div>

                    
                             
                        </div>



        
                  </form>

            </div>
</body>
</html>

<?php
	require "viewingfooter.php";
?>
