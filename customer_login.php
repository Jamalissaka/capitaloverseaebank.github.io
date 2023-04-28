<?php
ob_start();
session_start();
if(isset($_SESSION['customer_login'])){
	
	header('location:customer_profile.php') ;
	
}


 ?>
<html>
<head>
<link rel="shortcut icon" href="img/looo.ico">

    <title>Capital Bank Overseas || Login Page</title>
  
    <link rel="stylesheet" type="text/css" href="css/customer_login.css" />
    
    </head>
    <body>
        
	 <?php include'header.php' ?>
        <!--<div class="login_container">
            
            <form method="post"> 
                
      <br>
        <div class="formspace">
		<p class="formspace2">
    
        <div class="form">
            
        <label class="login">LOGIN</label>
        <div class="input_field">  
           
        <label class="userdetail">Customer ID</label><br>
        <input class="customer_id" type="text" name="customer_id" required /><br>
        <label class="userdetail">Password</label><br>
        <input class="password" type="password" name="password" required/><br>
        <input class="login-btn" type="submit" name="login-btn" value="LOGIN"/><br>
        <a href="cust_forgetpass.php" class="help"><label class="label_help" >FORGET PASSWORD ?</label></a>
            <img class="userloginimg" src="img/home-logo-hi.png" height="90px" width="90px">
        </div>
                </div>
							</div>  </div>
            </form>-->

            <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/loo.jpeg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <div class="login_container">
        <form method="post">
          

          <div class="divider d-flex align-items-center my-4">
            <h1 class="text-center fw-bold mx-3 mb-0">Capital Overseas Bank</h1>
          </div>
          <div class="input_field"> 

          <!-- Email input -->
          <div class="form-outline mb-4">

            <input class="customer_id  form-control-lg" type="text"  name="customer_id"
              placeholder="Customer ID" required/ >
          </div> 

          <!-- Password input -->
          <div class="form-outline mb-3">

            <input class="password form-control-lg" type="password" name="password"
              placeholder="Enter password" required/ >
          </div> 

          <!--<label class="userdetail">Customer ID</label><br>
        <input class="customer_id" type="text" name="customer_id" required /><br>
        <label class="userdetail">Password</label><br>
        <input class="password" type="password" name="password" required/><br>
        <input class="login-btn" type="submit" name="login-btn" value="LOGIN"/><br>
        <a href="cust_forgetpass.php" class="help"><label class="label_help" >FORGET PASSWORD ?</label></a>
            <img class="userloginimg" src="img/home-logo-hi.png" height="90px" width="90px">
        </div> -->

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->

            <a href="cust_forgetpass.php" class="text-body">Forgot password?</a>
            
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
          <input class="login-btn" type="submit" name="login-btn" value="LOGIN"/><br>

            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="customer_reg_form.php"
                class="link-danger">Register</a></p>
          </div>
</div>

        </form>
</div>
      </div>
    </div>
  </div>
 
    

    
</section>
        <br>
        
        <?php include 'footer.php' ?>
    </body>
</html> 

<?php include 'customer_login_process.php'?>

