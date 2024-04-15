<?php
session_start();
include("dbconnect.php");

extract($_REQUEST);

$msg="";
	 	$rdate=date("d-m-Y");
		$yr=date("y");
	 if(isset($btn))
	 {
                                                      
 $mq=mysqli_query($connect,"select max(id) from tro_register");
	 $mr=mysqli_fetch_array($mq);
	 $id=$mr['max(id)']+1;
	 		
	 $ins=mysqli_query($connect,"insert into tro_register(id,name,mobile,email,address,uname,pass,utype,rdate) values($id,'$name','$mobile','$email','$address','$uname','$pass','admin','$rdate')");

 		if($ins)
		{
	 ?>
	 <script>
//Using setTimeout to execute a function after 5 seconds.
setTimeout(function () {
////   //Redirect with JavaScript
   window.location.href= 'login.php?act=success';
}, 1000);
</script>
<?php
}
}
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title><?php include("title.php"); ?></title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
<script language="javascript">
function validate()
{
	if(document.form1.name.value=="")
	{
	document.getElementById("x1").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x1").style.display="none";
	}
	
	
	if (isNaN(document.form1.mobile.value))
                {
				document.getElementById("x51").style.display="block";
                    return false;
                }
				else
				{
				document.getElementById("x51").style.display="none";
				}
				if (document.form1.mobile.value.length != 10)
                {
				document.getElementById("x52").style.display="block";
                    return false;
                }
				else
				{
				document.getElementById("x52").style.display="none";
				}
	/*if(document.form1.email.value=="")
	{
	document.getElementById("x6").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x6").style.display="none";
	}
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.form1.email.value))  
				  {  
					document.getElementById("x61").style.display="none";
				  }  
				  else
				  {
					document.getElementById("x61").style.display="block";
					return false; 
				  }*/
	
	if(document.form1.address.value=="")
	{
	document.getElementById("x7").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x7").style.display="none";
	}
	
	if(document.form1.uname.value=="")
	{
	document.getElementById("x9").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x9").style.display="none";
	}
	if(document.form1.password.value=="")
	{
	document.getElementById("x10").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x10").style.display="none";
	}
	/*if(document.form1.password.value.length<6 || document.form1.password.value.length>15)
	{
	document.getElementById("x110").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x110").style.display="none";
	}
	var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,15}$/;
	if(paswd.test(document.form1.password.value)) 
	{ 
	document.getElementById("x120").style.display="none";
	}
	else
	{ 
	document.getElementById("x120").style.display="block";
	return false;
	}*/
	
	
	
	
	if(document.form1.cpass.value=="")
	{
	document.getElementById("x11").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x11").style.display="none";
	}
	if(document.form1.password.value!=document.form1.cpass.value)
	{
	document.getElementById("x12").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x12").style.display="none";
	}
return true;
}
</script>	
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p><?php include("title.php"); ?></p>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="images/logo.jpg" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="index.php">Home</a> </li>
                              <li> <a href="register.php">Register</a> </li>
                              <li> <a href="product.php">Product</a> </li>
							  <li class="mean-last"> <a href="login.php">Login</a> </li>
                               
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                  <li><a class="buy" href="login_admin.php">Admin</a></li>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
       <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <h2>Sign Up</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php
if($_REQUEST['act']=="success")
{
?>
<div class="row">
			<div class="col-lg-4">
				
				<!-- A grey horizontal navbar that becomes vertical on small screens -->
			</div>
			
			
			
            <div class="col-lg-4">
<div class="alert-success">
  <strong>Registered Success</strong></div>
			</div>
</div>			
<?php
}
if($_REQUEST['act']=="wrong")
{
?>
<div class="row">
			<div class="col-lg-4">
				
				<!-- A grey horizontal navbar that becomes vertical on small screens -->
			</div>
			
			
			
            <div class="col-lg-4">
<div class="alert alert-warning">
  <strong>Warning!</strong> 
</div>
			</div>
</div>			
<?php
}
?>	
<div class="row">
			<div class="col-lg-3">
				
				<!-- A grey horizontal navbar that becomes vertical on small screens -->
			</div>
			
			
			
            <div class="col-lg-6">
              <div class="card"><div class="cardbill">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display display">
                    <h2>Sign Up</h2>
                  </h2>
                </div>
                <div class="card-block">
                <form name="form1" method="post">
		  <div class="row">
					 <label class="col-sm-2 form-control-label">Name</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" />
						  <span id="x1" class="msg"  style="display:none">Enter the Name</span>
                        </div>
                      </div>
           </div>
          <div class="row">
					 <label class="col-sm-2 form-control-label">Mobile No.</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="text" name="mobile" class="form-control" />
						  <span id="x5" class="msg"  style="display:none">Enter the Mobile No.</span>
						  <span id="x51" class="msg"  style="display:none">Invalid Mobile No.!</span>
						  <span id="x52" class="msg"  style="display:none">Mobile no. must be 10 digits!</span>
                        </div>
                      </div>
           </div>
           <div class="line"></div>
		   <div class="row">
					 <label class="col-sm-2 form-control-label">E-mail</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="text" name="email" class="form-control" />
						  <span id="x6" class="msg"  style="display:none">Enter the Email</span>
						  <span id="x61" class="msg"  style="display:none">Invalid Email!</span>
                        </div>
                      </div>
           </div>
		   <div class="row">
					 <label class="col-sm-2 form-control-label">Address</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <textarea name="address" class="form-control"></textarea>
						  <span id="x7" class="msg"  style="display:none">Enter the Address</span>
                        </div>
                      </div>
           </div>
           <div class="line"></div>
		   <div class="row">
					 <label class="col-sm-2 form-control-label">Username</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="text" name="uname" class="form-control" />
						  <span id="x9" class="msg"  style="display:none">Enter the Username</span>
                        </div>
                      </div>
           </div>
           <div class="line"></div>
		   <div class="row">
					 <label class="col-sm-2 form-control-label">Password</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="password" name="pass" class="form-control" />
						  <span id="x10" class="msg"  style="display:none">Enter the Password</span>
                        </div>
                      </div>
           </div>
           <div class="line"></div>
		   <div class="row">
					 <label class="col-sm-2 form-control-label">Re-type Password</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="password" name="cpass" class="form-control" />
						   <span id="x11" class="msg"  style="display:none">Enter the Confirm Password</span>
						  <span id="x12" class="msg"  style="display:none">Password does not Match!</span>
                        </div>
                      </div>
           </div>
           <div class="line"></div>
		    <div class="row">
						<label class="col-sm-2 form-control-label"></label>
                      <div class="col-sm-10">
					  
                        <div class="form-group">
                          <input type="submit" name="btn" placeholder="" class="btn btn-primary" value="Submit" onClick="return validate()">
                        </div>
                      </div>
           </div>
		   </form>
                </div>
              </div></div>
			</div>
</div>			
<!-- CHOOSE  -->

      
<!-- end CHOOSE -->

      <!-- service --> 
      
      <!-- end service -->

      
      <!--  footer --> 
       <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <ul class="sociel">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
            </div>
            <div class="row">
               
            </div>
         </div>
            <div class="copyright">
               <p><a href="viewadmin.php">Admin</a> |
			   <a href="viewuser.php">Online User</a>
			   </p>
            </div>
         
      </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>