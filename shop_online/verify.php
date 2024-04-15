<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);
$msg="";



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
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
     <?php
	 if($act=="del")
{
mysqli_query($connect,"delete from pr_product1 where id=$did");
?>
<script language="javascript">
window.location.href="add_product.php";
</script>
<?php
}
	 ?>
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
                        <div class="logo"> <a href=""><img src="images/logo.jpg" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="index.php">Home</a> </li>
                             
                              <li> <a href="product1.php">Product</a> </li>
							  <li class="mean-last"> <a href="login.php">Login</a> </li>
                             
                               
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                  
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
                    <div class=""><!--titlepage-->
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php

if($_REQUEST['act']=="wrong")
{
?>
<div class="row">
			<div class="col-lg-4">
				
				<!-- A grey horizontal navbar that becomes vertical on small screens -->
			</div>
			
			
			
            <div class="col-lg-4">
<div class="alert alert-warning">
  <strong>Warning!</strong> Invalid User! 
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
                    <h2>Verification</h2>
                  </h2>
                </div>
                <div class="card-block">
				<?php
				$q1=mysqli_query($connect,"select * from pr_product1 where id='$pid'");
				$r1=mysqli_fetch_array($q1);
				?>
                <form name="form1" method="post">
				<div class="row">
				<div class="col-md-3">KYP Code</div>
				<div class="col-md-3"><input type="text" name="pcode" class="form-control" value="<?php echo $r1['pcode']; ?>"></div>
				<div class="col-md-3"><input type="submit" name="btn" value="Go"></div>
				</div>
				
		  <div class="">
		<?php
		if(isset($btn))
		{
		
		$q2=mysqli_query($connect,"select * from pr_productcode where product_code='$pcode'");
		$r2=mysqli_fetch_array($q2);
		$pid=$r2['pid'];
		
				
		
		
		$q3=mysqli_query($connect,"select * from pr_product where id=$pid");
		$r3=mysqli_fetch_array($q3);
		$company=$r3['company'];
		
		$edate=$r3['tdate'];
		$cdate=date("Y-m-d");
		$dy=(strtotime($edate)-strtotime($cdate))/(60*60*24);
		
			if($r2['sale']=="1")
				{
				?><h4 style="color:#FF3300">This Product has Sold on <?php echo $r2['sale_date']; ?>, Retailer: <?php echo $r2['supplier']; ?></h4> <?php
				}
			else if($dy>=0)
			{
		$q4=mysqli_query($connect,"select * from pr_manufacture where uname='$company'");
		$r4=mysqli_fetch_array($q4);
		
		
		$q5=mysqli_query($connect,"select * from pr_send where pid=$pid");
		$r5=mysqli_fetch_array($q5);
		$supplier=$r5['supplier'];
		
		$q6=mysqli_query($connect,"select * from pr_supplier where uname='$supplier'");
		$r6=mysqli_fetch_array($q6);
		
		
		?>
			<table class="table table-striped thead-dark table-bordered table-hover">
						<tr>
						<td colspan="2" bgcolor="#00CCFF">Manufactured Information</td>
						</tr>
						<tr>
						<td>Company</td><td><?php echo $r4['name']; ?></td>
						</tr>
						<tr>
						<td>Location </td><td><?php echo $r4['address']; ?></td>
						</tr>
						<tr>
						<td>Product </td><td><?php echo $r3['product']; ?></td>
						</tr>
						<tr>
						<td>Description </td><td><?php echo $r3['description']; ?></td>
						</tr>
						<tr>
						<td>Price </td><td>Rs. <?php echo $r3['price']; ?></td>
						</tr>
						<tr>
						<td>Manufacture Date</td><td><?php echo $r3['mdate']; ?></td>
						</tr>
						<tr>
						<td>Expired Date</td><td><?php echo $r3['edate']; ?></td>
						</tr>
				</table>
				
				<p>&nbsp;</p>
				<table class="table table-striped thead-dark table-bordered table-hover">
						<tr>
						<td colspan="2" bgcolor="#00CCFF">Distributor</td>
						</tr>
						<tr>
						<td>Distributor</td><td><?php echo $r6['name']; ?></td>
						</tr>
						<tr>
						<td>Contact Person </td><td><?php echo $r6['name2']; ?></td>
						</tr>
						<tr>
						<td>Mobile No. </td><td><?php echo $r6['mobile']; ?></td>
						</tr>
						<tr>
						<td>E-mail ID </td><td><?php echo $r6['email']; ?></td>
						</tr>
						<tr>
						<td>Location </td><td><?php echo $r6['city']; ?></td>
						</tr>
						<tr>
						<td>GST Number </td><td><?php echo $r6['gst_number']; ?></td>
						</tr>
				</table>
		
		<p>&nbsp;</p>
		<?php
		$q7=mysqli_query($connect,"SELECT * FROM pr_productcode  where pid=$pid && shop!='' group by shop");
        
		$sh=array();
		$sh_q=array();

                    while($r7=mysqli_fetch_array($q7))
					{
					$x=0;
					$sh[]=$r7['shop'];
                       $q8=mysqli_query($connect,"SELECT * FROM pr_productcode  where pid=$pid && shop='".$r7['shop']."' && sale=0");
                       while($r8 = mysqli_fetch_array($q8))
                       {
					   $x++;
					   }
					   $sh_q[]=$x;
					}
				
		?>
		<h3>Product Available in</h3>
						<table class="table">
						<tr>
							<th>Retailor</th>
							<th>Quantity</th>
							<th>Contact No.</th>
							<th>Location</th>
						</tr>
						
						<?php
						$i=0;
						foreach($sh as $shh)
						{
						$q9=mysqli_query($connect,"SELECT * FROM pr_shop  where uname='".$shh."'");
                      $q9 = mysqli_fetch_array($q9);
                       
						?>
						<tr>
							<td><?php echo $q9['name']." (".$q9['uname'].")"; ?></td>
							<td><?php echo $sh[$i]; ?></td>
							<td><?php echo $q9['mobile']; ?></td>
							<td><?php echo $q9['city']; ?></td>
						</tr>
						<?php
						$i++;
						}
						?>
						</table>
						
		
		<?php
				}
				else
				{
				?><h4 style="color:#FF0000">Product Already Expired! It is repacked!</h4><?php
				}
		}
		?>
		
		
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
               
                  
            </div>
           <!-- <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                    
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                    
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                 <div class="contact">
                  
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">-->
                     
                  </div>
               </div>
            </div>
         </div>
            <div class="copyright">
               <p><?php include("title.php"); ?></p>
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