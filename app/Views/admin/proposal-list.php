
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Cerenity-Studio | Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/images/favicon.png">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/chartist/css/chartist.min.css">
    <!-- Datatable -->
    <link href="<?= base_url() ?>/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <!-- <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="<?= base_url() ?>/assets/images/logo.png" alt="">
                <img class="logo-compact" src="<?= base_url() ?>/assets/images/logo-text.png" alt="">
                <img class="brand-title" src="<?= base_url() ?>/assets/images/logo-text.png" alt="">
            </a> -->

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Proposal List
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="<?= base_url() ?>/assets/images/profile/17.jpg" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black"><strong><?= session()->get('fname');?> <?= session()->get('lname');?></strong></span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?= base_url('/loginController/logout') ?>" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="<?= base_url('/dashboard') ?>" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a href="<?= base_url('/proposal-list') ?>" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Proposal List</span>
						</a>
                    </li>
                </ul>
				<div class="copyright">
					<p><strong>Cerenity-Studio</strong> © 2022 All Rights Reserved</p>
					<p>Made with <span class="heart"></span></p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Applier Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>Proposal ID</th>
                                        <th>Company Name</th>
                                        <th>Game License</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($proposal as $data => $value) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['company_name'] ?></td>
                                        <td><?= $value['game_license'] ?></td>
                                        <td><?= $value['description'] ?></td>
                                        <td>
                                            <?php if($value['status']=='In Progress') { ?>
                                                <span class="badge light badge-warning">
                                                    <i class="fa fa-circle text-warning mr-1"></i>
                                                    <?= $value['status'] ?>
                                                </span>
                                            <?php } else if($value['status']=='Approved') {?>
                                                <span class="badge light badge-success">
                                                    <i class="fa fa-circle text-success mr-1"></i>
                                                    <?= $value['status'] ?>
                                                </span>
                                            <?php } else if($value['status']=='Declined') {?>
                                                <span class="badge light badge-danger">
                                                    <i class="fa fa-circle text-danger mr-1"></i>
                                                    <?= $value['status'] ?>
                                                </span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <div class="dropdown ml-auto text-right">
                                                <div class="btn-link" data-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="<?= base_url('accept-request/'.$value['proposal_id']) ?>">Approve Proposal</a>
                                                    <a class="dropdown-item" href="<?= base_url('decline-request/'.$value['proposal_id']) ?>">Decline Proposal</a>
                                                    <a class="dropdown-item" href="<?= base_url('document/'.$value['file_name']) ?>">Download Proposal File</a>
                                                </div>
                                            </div>
                                        </td>												
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url() ?>/assets/vendor/global/global.min.js"></script>
	<script src="<?= base_url() ?>/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="<?= base_url() ?>/assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/custom.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/deznav-init.js"></script>
	<script src="<?= base_url() ?>/assets/vendor/owl-carousel/owl.carousel.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="<?= base_url() ?>/assets/vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="<?= base_url() ?>/assets/vendor/apexchart/apexchart.js"></script>

    <!-- Datatable -->
    <script src="<?= base_url() ?>/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugins-init/datatables.init.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="<?= base_url() ?>/assets/js/dashboard/dashboard-1.js"></script>
	<script>
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:30,
				nav:false,
				dots: false,
				left:true,
				navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
				responsive:{
					0:{
						items:1
					},
					484:{
						items:2
					},
					882:{
						items:3
					},	
					1200:{
						items:2
					},			
					
					1540:{
						items:3
					},
					1740:{
						items:4
					}
				}
			})			
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>
</body>
</html>