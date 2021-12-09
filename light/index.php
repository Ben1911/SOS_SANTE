<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['nomuser'])) {
    header('Location:login.php ');
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.com/templates/admin/sunray/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 08:10:21 GMT -->

<head>
    <?php include 'head.php'; ?>
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
     <?php include 'header.php'; ?>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
        <?php include 'sidebarMenu.php'; ?>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- start widget -->
                    <div class="state-overview">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-white">
                                    <span class="info-box-icon push-bottom bg-primary"><i class="material-icons">group</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Docteurs</span>
                                        <span class="info-box-number">450</span>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" style="width: 45%"></div>
                                        </div>
                                        <span class="progress-description">
					                    45% Increase in 28 Days
					                  </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-white">
                                    <span class="info-box-icon push-bottom bg-warning"><i class="material-icons">person</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text"> Patients</span>
                                        <span class="info-box-number">155</span>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" style="width: 40%"></div>
                                        </div>
                                        <span class="progress-description">
					                    40% Increase in 28 Days
					                  </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-white">
                                    <span class="info-box-icon push-bottom bg-success"><i class="material-icons">airline_seat_flat_angled</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Consultation</span>
                                        <span class="info-box-number">52</span>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 85%"></div>
                                        </div>
                                        <span class="progress-description">
					                    85% Increase in 28 Days
					                  </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-white">
                                    <span class="info-box-icon push-bottom bg-info"><i class="material-icons">hotel</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Soins</span>
                                        <span class="info-box-number">93</span><span></span>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" style="width: 50%"></div>
                                        </div>
                                        <span class="progress-description">
					                    50% Increase in 28 Days
					                  </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- end widget -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Hospital Survey</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row text-center">
                                        <div class="col-sm-3 col-6">
                                            <h4 class="margin-0">$ 209 </h4>
                                            <p class="text-muted"> Today's Income</p>
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <h4 class="margin-0">$ 837 </h4>
                                            <p class="text-muted">This Week's Income</p>
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <h4 class="margin-0">$ 3410 </h4>
                                            <p class="text-muted">This Month's Income</p>
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <h4 class="margin-0">$ 78,000 </h4>
                                            <p class="text-muted">This Year's Income</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="line_chart" class="full-width"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- start new patient list -->
            
                    <!-- end new patient list -->
                    
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
           
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
       <?php include 'footer.php'; ?>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/popper/popper.min.js"></script>
    <script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- counterup -->
    <script src="../assets/plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="../assets/plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Common js-->
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/layout.js"></script>
    <script src="../assets/js/theme-color.js"></script>
    <!-- material -->
    <script src="../assets/plugins/material/material.min.js"></script>
    <!-- morris chart -->
    <script src="../assets/plugins/morris/morris.min.js"></script>
    <script src="../assets/plugins/morris/raphael-min.js"></script>
    <script src="../assets/js/pages/chart/morris/morris-home-data.js"></script>
    <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.com/templates/admin/sunray/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 08:11:59 GMT -->

</html>