<?php 
session_start();
if($_SESSION['customer_login'] != true)
{
	
	 header('location:customer_login.php');

}	

?>

<html>
    <head>
    <link rel="shortcut icon" href="img/wallet_icon_131123.ico">

    <link rel="stylesheet" type="text/css" href="css/customer_profile_header.css" />
    <style>
    #home, #logout{

        background-color: #2c71b0;
        border:none;
        padding:5px;
        width:70px;
        color:white;
        cursor:pointer;
        box-shadow:2px 2px 6px rgba(5, 21, 71,0.9);
        transition-duration: 0.6s;
        font-family: ui-sans-serif ;
    }

    #home:hover, #logout:hover{

        padding:10px;
        

    }
    .center {
  text-align: center;
  border: 1px #6666ff;
}
	</style>
	</head>
    
<body id="customer_profile">
    		
			
	<?php	
		include 'db_connect.php';
		
		$customer_id=$_SESSION['customer_Id'];
		$sql="SELECT * FROM bank_customers WHERE Customer_ID='$customer_id'";
		$result=$conn->query($sql);
		if($result->num_rows > 0)
		$row = $result->fetch_assoc();

	?>
       <div class="head center">
            
            <div class="customer_details">
	
			
				  </div>
             <div class="welcome">

             <h1>Welcome </h1> <span> <?php echo $_SESSION['Username']; ?></span><h6 class="lstlogin">Last login : <?php echo $row['Last_Login'] ?> </h6>
                  </div>
            <a class="cust_home" href="customer_profile.php"><input type="button" name="home" value="Home" id="home"></a>
            <a class="cust_logout" href="customer_logout.php"><input type="button" name="logout_btn" value="Sigout" id="logout"></a>
        
        </div>
        
        <!-- <br>
        <marquee class="warning"><p>Please Change your password regularly</p></marquee> 
        <br> -->
        <div class="profile_nav ">
        <div class="center about px-4 py-5">
            
        <button >            <a href="customer_profile_myacc.php"><div class="link1 my-3"></div>

   <img width="60" height="60" src="img/employee_account_business_time_clock_icon_124657.png" alt="animal"></a>
   <br>My Account</button>
   <button >            <a href="customer_profile_myprofile.php"><div class="link2 my-3"></div>

   <img width="60" height="60" src="img/person_account_profile_graph_chart_arrow_icon_124633.png" alt="animal"></a>
   <br>My Profile</button>
   <button >            <a href="fund_transfer.php"><div class="link3 my-3"></div>

   <img width="60" height="60" src="img/iconfinder-servertransfer-4417112_116623.png" alt="animal"></a>
   <br>Fund Transfer</button>
   <button >            <a href="cust_statement.php"><div class="link4 my-3"></div>

   <img width="60" height="60" src="img/marketing_statistics_analytics_business_graph_chart_icon_221266.png" alt="animal"></a>
   <br>Statement</button>
        </div>
        <!--<ul>
            <a href="customer_profile_myacc.php"><li class="link1">My Account</li></a>
            <a href="customer_profile_myprofile.php"><li class="link2">My Profile</li></a>
            <a href="customer_pass_change.php"><li class="link3">Change Password</li></a>
            <a href="fund_transfer.php"><li class="link4">Fund Transfer</li></a>
            <a href="cust_statement.php"><li class="link5">Statement</li></a>
            </ul>-->
            </div>

    </body>
</html>