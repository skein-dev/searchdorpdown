<!-- LINE 102 WHERE EDITS REQUIRED -->
<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/css/themes/lite-purple.min.css">

</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header">
            <div class="logo">
                <a href="./members.php"><img src="./assets/images/logo.png" alt=""></a>
            </div>

            <div class="d-flex align-items-center">
				<a style="font-size:20px;" href="./members.php">Website.com</a>
            </div>

            <div style="margin: auto"></div>

            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
                <!-- Notificaiton -->
                <div id="view_notications" class="dropdown">
                    <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<div id="current_notifications" style="display:none;"></div>
                        <i class="i-Bell text-muted header-icon"></i>
                    </div>
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown  rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
						
                    </div>
                </div>
                <!-- Notificaiton End -->

                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user col align-self-end">
                        <img src="./assets/images/faces/blank.png" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> xx@xx.com
                            </div>
                            <a class="dropdown-item" href="members.php">Menu Item</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="side-content-wrap">
            <div class="sidebar-left open  rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                <ul class="navigation-left">
					 <li class="nav-item" data-item="dashboard">
                        <a id="nav_requestsms" class="nav-item-hold" href="#">
                            <i class="nav-icon i-Speach-Bubbles"></i>
                            <span class="nav-text">Menu Item</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                </ul>
            </div>
            <div class="sidebar-overlay"></div>
        </div>
        <!--=============== Left side End ================-->
		
		

        <!-- ============ Body content start ============= -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="breadcrumb">
                <h1>Title</h1>
                <ul>
                    <li>Description</li>
                </ul>
            </div>
			
			
            <div class="separator-breadcrumb border-top"></div>
			
			

                <div class="col-md-32 mb-3">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3"> Title </h4>
                         
							<input type="hidden" name="account_api_key" id="account_api_key" value="123" />
							<input type="hidden" name="is_rental" id="is_rental" value="0" />
							
							<!-- THIS PART NEEDS TO BE CHANGED TO LOOK SAME STYLE BUT INCORPORATE SEARCH DROP DOWN METHOD -->
							
							<div class="btn-group">
                            	<button id="service_select" name="service_select" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service</button>
                                <div class="dropdown-menu" x-placement="bottom-start">
									<a onclick="SetButtonText('service_select', 'Service 1');SetPrice('0.50', '0.85', '1.00', 'Service 1');" class="dropdown-item" href="#/"><i class="i-Compass-2"> </i> Service 1</a>
									<a onclick="SetButtonText('service_select', 'Service 2');SetPrice('0.50', '0.85', '1.00', 'Service 2');" class="dropdown-item" href="#/"><i class="i-Compass-2"> </i> Service 2</a>
									<a onclick="SetButtonText('service_select', 'Service 3');SetPrice('0.50', '0.85', '1.00', 'Service 3');" class="dropdown-item" href="#/"><i class="i-Compass-2"> </i> Service 3</a>
								</div>
                            </div>
							
							
							
							<div class="btn-group">
                            	<button id="service_select_2" name="service_select_2" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service Name With Longer Text</button>
                                <div class="dropdown-menu" x-placement="bottom-start">
									<a onclick="SetButtonText('service_select_2', 'Service  With Longer Text');SetPrice('0.50', '0.85', '1.00', 'Service 1');" class="dropdown-item" href="#/"><i class="i-Compass-2"> </i> Service Name With Longer Text</a>
									<a onclick="SetButtonText('service_select_2', 'Short');SetPrice('0.50', '0.85', '1.00', 'Service 2');" class="dropdown-item" href="#/"><i class="i-Compass-2"> </i> Short</a>
									<a onclick="SetButtonText('service_select_2', 'Medium Length');SetPrice('0.50', '0.85', '1.00', 'Service 3');" class="dropdown-item" href="#/"><i class="i-Compass-2"> </i> Medium Length</a>
								</div>
                            </div>
							
							
							<!-- END OF PART REQUIRED -->
							
							<script>
								// SetButtonText : Start
								function SetButtonText(button_name,button_text){
									$("#" + button_name).html(button_text);
									}
							</script>


                        </div>
                    </div>
                </div>
                <!-- end of col-->

            <!-- end of row-->
			
			<!-- Modal -->
            <div class="modal fade" id="show_modal_box" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 id="modal_title" class="modal-title" id="exampleModalCenterTitle-2">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div id="modal_text" class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
			<!-- End Modal -->
          
   
  <!-- Footer Start -->
            <div class="flex-grow-1"></div>
           



        </div>
        <!-- ============ Body content End ============= -->
</div>
    <!--=============== End app-admin-wrap ================-->

    <script src="./assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- page vendor js -->



</body>

</html>