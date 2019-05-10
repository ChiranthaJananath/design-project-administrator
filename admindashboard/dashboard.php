<?php
    session_start();
    $connection = mysqli_connect("localhost","root","","administrator");
    if($connection){
     echo "conected!";
    }
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Administrator Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Admin Division
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                <li>
                    <a href="table.php">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Admin Activities</p>
                    </a>
                </li>
                <li>
                    <a href="/You-Can-cook-master/index.html">
                        <i class="pe-7s-science"></i>
                        <p>Shopping Cart</p>
                    </a>
                </li>
               <!--  <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li> -->
               <!--  <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li> -->
				<!-- <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                       <!--  <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li> -->
                        <!-- <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                                <script> document.write(new Date().toLocaleDateString()); </script>
                            </a>
                        </li>  -->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <iframe src="http://free.timeanddate.com/clock/i6n6xf4k/n389" frameborder="0" width="114" height="18"></iframe>
                            </a>

                        </li>
                       <!--  <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul> 
                        </li> -->
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                   <!--  <div class="col-md-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Email Statistics</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                   <!--  <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users Behavior</h4>
                                <p class="category">24 Hours performance</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart"></div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>



                <div class="row">
                    <!-- <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">2014 Sales</h4>
                                <p class="category">All products including Taxes</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 -->
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Update Foods Items</h4>
                                <p class="category">****Administrator development</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
									<form action="" method="post">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
													<!--<div class="checkbox">
						  							  	 <input id="checkbox1" type="checkbox">
						  							  	<label for="checkbox1"></label> 
					  						  		</div>--> 
                                                    Update Foods
                                                </td>
                                                <!-- <td><input type="text" class="form-control" placeholder="Last Name" value="jananath"></td> -->
                                                <td><select class="form-control" name="category_name">
                                                          <option value="volvo">Pizza</option>
                                                          <option value="saab">Saab</option>
                                                          <option value="mercedes">Mercedes</option>
                                                          <option value="audi">Audi</option>
                                                        </select></td>
                                                <td><select class="form-control" name="item_name">
                                                          <option value="volvo">Beverages</option>
                                                          <option value="saab">Saab</option>
                                                          <option value="mercedes">Mercedes</option>
                                                          <option value="audi">Audi</option>
                                                        </select></td>        
                                                <td><input type="text" class="form-control" placeholder="Adding Amount" name="amount"></td>
												<td><select class="form-control" name="approve">
                                                          <option value="volvo">Yes</option>
                                                          <option value="saab">No</option>
                                                        </select></td>
                                               <!-- <td><input type="text" class="form-control" placeholder="Last Name" value="jananath"></td>-->
                                                <td class="td-actions text-right">
                                                    <!-- <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button> -->
                                                    <input type="submit" class="btn btn-info btn-fill pull-right" name="updatefoodbutton" value="SUBMIT">				
                                                </td>
												<?php 
													if(isset($_POST['updatefoodbutton'])){
														
														$amount = $_POST['amount'];
														$category_name = $_POST['category_name'];
														$item_name = $_POST['item_name'];
														$approve = $_POST['approve'];
														
														//$query1 = "INSERT INTO foods(category_name, item_name, food_amount, approve) VALUES('$category_name','$item_name','$amount','$approve')";
														$query1 = "SELECT food_amount FROM foods WHERE category_name='$category_name' AND item_name='$item_name'";
														$result1 = mysqli_query($connection, $query1);
														if (mysqli_num_rows($result1) > 0) {
														while ($amount_from_db = mysqli_fetch_assoc($result1)){
														$amount_new=$amount+$amount_from_db["food_amount"];
														$query2 = "UPDATE foods SET food_amount='$amount_new' WHERE category_name='$category_name' AND item_name='$item_name'";
														$result2 = mysqli_query($connection, $query2 );
														
														if($result2){
															echo "<script> alert ('Updated Foods');</script>";
														}
														else{echo "<script> alert ('06');</script>";}
														}
														
													}}
												 ?>	
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
					 <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Add Foods Items</h4>
                                <p class="category">****Administrator development</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
									<form action="" method="post">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
													<!--<div class="checkbox">
						  							  	 <input id="checkbox1" type="checkbox">
						  							  	<label for="checkbox1"></label> 
					  						  		</div>--> 
                                                    Update Foods
                                                </td>
                                                <!-- <td><input type="text" class="form-control" placeholder="Last Name" value="jananath"></td> -->
                                                <td><input type="text" class="form-control" placeholder="Adding Category" name="add_category"></td>
												<td><input type="text" class="form-control" placeholder="Adding Item" name="add_item"></td>
                                                <td><input type="text" class="form-control" placeholder="Adding Amount" name="add_amount"></td>
												<td><select class="form-control" name="add_approve">
                                                          <option value="Yes">Yes</option>
                                                          <option value="No">No</option>
                                                        </select></td>
                                               <!-- <td><input type="text" class="form-control" placeholder="Last Name" value="jananath"></td>-->
                                                <td class="td-actions text-right">
                                                    <!-- <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button> -->
                                                    <input type="submit" class="btn btn-info btn-fill pull-right" name="addfoodbutton" value="SUBMIT">				
                                                </td>
												<?php 
													if(isset($_POST['addfoodbutton'])){
														
														$add_category = $_POST['add_category'];
														$add_item = $_POST['add_item'];
														$add_amount = $_POST['add_amount'];
														$add_approve = $_POST['add_approve'];
														
														$query3 = "INSERT INTO foods(category_name, item_name, food_amount, approve) VALUES('$add_category','$add_item','$add_amount','$add_approve')";
														//$query1 = "SELECT food_amount FROM foods WHERE category_name='$category_name' AND item_name='$item_name'";
														$result3 = mysqli_query($connection, $query3);
														
			
														
														if($result3){
															echo "<script> alert ('Added Foods');</script>";
														}
														else{echo "<script> alert ('06');</script>";}
														
														
													}
												 ?>	
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

               
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <!-- <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav> -->
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Shop ME</a>, Administrator Division
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	// <script type="text/javascript">
 //    	$(document).ready(function(){

 //        	demo.initChartist();

 //        	$.notify({
 //            	icon: 'pe-7s-gift',
 //            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

 //            },{
 //                type: 'info',
 //                timer: 4000
 //            });

 //    	});
	// </script>

</html>
