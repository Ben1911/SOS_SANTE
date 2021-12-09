
<?php
spl_autoload_register(function ($class) {
    require '../models/'.$class.'.php';
});
if (!isset($_SESSION)) {
    session_start();
}

// if (!isset($_SESSION['users'])) {
//     header('Location:login.php ');
// }
$traitement = new TraitementFonction();
$ComboAir = $traitement->getComboAir();
$ListeZone= $traitement->getZone();
?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.com/templates/admin/sunray/source/light/all_patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 08:14:13 GMT -->
<head>
	<?php include('head.php') ?>
</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
		<?php include('header.php') ?>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
			 <?php include('sidebarMenu.php') ?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Formulaire zone de santé</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Docteur</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Zone de santé</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                <ul class="nav nav-pills nav-pills-rose">
									<li class="nav-item tab-all"><a class="nav-link active show"
										href="#tab1" data-toggle="tab">List Zones</a></li>
									<li class="nav-item tab-all"><a class="nav-link" href="#tab2"
										data-toggle="tab"> + Ajout </a></li>
								</ul>
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
					                        <div class="col-md-12">
					                            <div class="card  card-box">
					                                <div class="card-head">
					                                    <header></header>
					                                    <div class="tools">
					                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
						                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
						                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
					                                    </div>
					                                </div>
					                                <div class="card-body ">
					                                  <div class="table-scrollable">
					                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
					                                        <thead>
					                                            <tr>
					                                            	<th class="center">Id</th>
					                                                <th class="center"> Zone de Santé </th>
					                                                <th class="center"> Air de Sqnté </th>
					                                                <th class="center"> Action </th>
					                                            </tr>
					                                        </thead>
															<?php 
														   foreach ($ListeZone as $lstZone) : ?>
					                                        <tbody>
																<tr class="odd gradeX">
																	
																	  <td class="center"><?= $lstZone->getId();?></td>		
																	  <td class="center"><?= $lstZone->getZoneDeSante(); ?></td>
																      <td class="center"><?= $lstZone->getAirDeSante(); ?></td>																	   
																						
																	<td class="center">
																		<a  class="btn btn-tbl-edit btn-xs"  data-toggle="modal" data-target="#Modification<?=  $lstZone->getId(); ?>" > 
																			<i class="fa fa-pencil"></i>
																		</a>

																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
                         <!-- ========================================== Les classes modal modification agent  ============================= -->
						 <div class="modal fade" id="Modification<?=  $lstZone->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="scrollmodalLabel">Modification Zone de santé</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                
                                                 <form action="" method="post"  novalidate="novalidate">
												 <div  class="row">     
												 <div  class="col-sm-6">                                                
                                                        <div class="form-group">
                                                            <label for="cc-payment" class="control-label mb-1">Zone de santé</label>
                                                            <input  hidden="true" name="action" type="text" value="modification">  
                                                              <input id="nomComplet" value="<?= $lstZone->getZoneDeSante() ?>" name="nomComplet" type="text" class="form-control" aria-required="true" placeholder="Enter les noms complet" aria-invalid="false" value="">
                                                        </div>    
														 	
									     	
                                                     </div> 

													 <div  class="col-sm-6">   
													 <div class="form-group">
															<label>Air de santé</label>
															<select class="form-control" id="idAir" name="idAir" >
																<option value="<?= $lstZone->getId() ?>"> <?= $lstZone->getAirDeSante() ?> </option>
																<?php  foreach ($ComboAir as $lstAir) : ?>
																<option value=" <?= $lstAir->getId();?>"> <?= $lstAir->getDesignation();?></option>
																<?php endforeach ; ?>
															</select>
													 </div>
														
														<div class="modal-footer">													  
													<button type="submit" class="btn btn-primary btn-sm">
														<i class="fa fa-dot-circle-o"></i> Submit
															</button>
															<button type="reset" class="btn btn-danger btn-sm">
														<i class="fa fa-ban"></i> Reset
													</button>
                                                  </div>
													 </div> 
                                                 </form> 
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div> <?php
											endforeach;
										?></tr>
																
															</tbody>
					                                    </table>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
                                    </div>
									
                                 <div class="tab-pane" id="tab2">
								 <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Ajout zone de santé</header>   
                                </div>
                                <div class="card-body " id="bar-parent">
								<p id="message"></p>
								<form id="form-data1" name="contact-form" method="post" action="" enctype="multipart/form-data">
								
                                        <div class="form-group">
											<input  hidden="true" name="action" type="text" value="insertion">  
											<input type="hidden" name="connection" value="connection">
                                            <label for="simpleFormEmail">Designation zone</label>
                                            <input type="text" class="form-control" id="designation_"  name="designation_" placeholder="Enter le designation de zone de santé">
                                        </div>
										<div class="form-group">
	                                            <label>Air de santé</label>
	                                            <select class="form-control" id="idAir" name="idAir" >
													<option> </option>
												<?php  foreach ($ComboAir as $lstAir) : ?>
												   <option value=" <?= $lstAir->getId();?>"> <?= $lstAir->getDesignation();?></option>
												   <?php endforeach ; ?>
	                                            </select>
	                                    </div>
                                      
                                        <div class="form-group">
										<div class="modal-footer">													  
													<button type="submit" class="btn btn-primary btn-sm">
														<i class="fa fa-dot-circle-o"></i> Submit
															</button>
															<button type="reset" class="btn btn-danger btn-sm">
														<i class="fa fa-ban"></i> Reset
													</button>
													
                                                  </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
						<div class="card card-box">
                                <div class="card-head">
                                    <header>Ajout Air de santé</header>   
                                </div>
                                <div class="card-body " id="bar-parent">
								<p id="reponse"></p>
								<form id="form-data2" name="contact-form" method="post" action="" enctype="multipart/form-data">
								
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Designation de air de santé</label>
											<input  hidden="true" name="action" type="text" value="insertion">  
											<input type="hidden" name="connection" value="connection">
                                            <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter le designation de air de santé">
                                        </div>	
										<div class="form-group">
										<div class="modal-footer">													  
													<button type="submit" class="btn btn-primary btn-sm">
														<i class="fa fa-dot-circle-o"></i> Submit
															</button>
															<button type="reset" class="btn btn-danger btn-sm">
														<i class="fa fa-ban"></i> Reset
													</button>
													
                                                  </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-md-6 col-sm-6">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Ajout Qualité medecin</header>   
                                </div>
                                <div class="card-body " id="bar-parent">
								<p id="reponse3"></p>
								<form id="form-data3" name="contact-form" method="post" action="" enctype="multipart/form-data">
								
                                        <div class="form-group">
											<input  hidden="true" name="action" type="text" value="insertion">  
											<input type="hidden" name="connection" value="connection">
                                            <label for="simpleFormEmail">Designation qualité</label>
                                            <input type="text" class="form-control" id="designation__"  name="designation__" placeholder="Enter le designation de zone de santé">
                                        </div>									
                                        <div class="form-group">
										<div class="modal-footer">													  
													<button type="submit" class="btn btn-primary btn-sm">
														<i class="fa fa-dot-circle-o"></i> Submit
															</button>
															<button type="reset" class="btn btn-danger btn-sm">
														<i class="fa fa-ban"></i> Reset
													</button>
													
                                                  </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                                </div>
                    					
                              </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon"  data-toggle="tab">Theme</a>
                        </li>
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_2" class="nav-link tab-icon"  data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Start Color Theme Sidebar -->
                    	<div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel" id="quick_sidebar_tab_1">
							<div class="chat-sidebar-slimscroll-style">
								<div class="theme-light-dark">
									<h6>Sidebar Theme</h6>
									<button type="button" data-theme="white" class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light Sidebar</button>
									<button type="button" data-theme="dark" class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark Sidebar</button>
								</div>
								<div class="theme-light-dark">
									<h6>Sidebar Color</h6>
									<ul class="list-unstyled">
										<li class="complete">
											<div class="theme-color sidebar-theme">
												<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
											</div>
										</li>
									</ul>
									<h6>Header Brand color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color logo-theme">
								             	<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
								           	</div>
								        </li>
									</ul>
									<h6>Header color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color header-theme">
								             	<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
								          	</div>
								        </li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Color Theme Sidebar -->
 						<!-- Start Setting Panel --> 
 						<div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_2">
                           <div class="chat-sidebar-settings-list chat-sidebar-slimscroll-style">
                                <div class="chat-header"><h5 class="list-heading">Layout Settings</h5></div>
	                            <div class="chatpane inner-content ">
									<div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Sidebar Position</div>
					                        <div class="setting-set">
					                           <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
	                                                <option value="left" selected="selected">Left</option>
	                                                <option value="right">Right</option>
                                            	</select>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Header</div>
					                        <div class="setting-set">
					                           <select class="page-header-option form-control input-inline input-sm input-small ">
	                                                <option value="fixed" selected="selected">Fixed</option>
	                                                <option value="default">Default</option>
                                            	</select>
					                        </div>
					                    </div>
					                    
					                    <div class="setting-item">
					                        <div class="setting-text">Footer</div>
					                        <div class="setting-set">
					                           <select class="page-footer-option form-control input-inline input-sm input-small ">
	                                                <option value="fixed">Fixed</option>
	                                                <option value="default" selected="selected">Default</option>
                                            	</select>
					                        </div>
					                    </div>
					                </div>
									<div class="chat-header"><h5 class="list-heading">Account Settings</h5></div>
									<div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Notifications</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-1">
									                  <input type = "checkbox" id = "switch-1" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Show Online</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-7">
									                  <input type = "checkbox" id = "switch-7" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Status</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-2">
									                  <input type = "checkbox" id = "switch-2" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">2 Steps Verification</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-3">
									                  <input type = "checkbox" id = "switch-3" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                </div>
                                    <div class="chat-header"><h5 class="list-heading">General Settings</h5></div>
                                    <div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Location</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-4">
									                  <input type = "checkbox" id = "switch-4" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Save Histry</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-5">
									                  <input type = "checkbox" id = "switch-5" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Auto Updates</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-6">
									                  <input type = "checkbox" id = "switch-6" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                </div>
	                        	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
       <?php include('footer.php') ?>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/plugins/jquery/jquery.min.js" ></script>
	<script src="../assets/plugins/popper/popper.min.js" ></script>
    <script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <!-- data tables -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js" ></script>
 	<script src="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
    <script src="../assets/js/pages/table/table_data.js" ></script>
    <!-- Common js-->
	<script src="../assets/js/app.js" ></script>
    <script src="../assets/js/layout.js" ></script>
	<script src="../assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
     <!-- end js include path -->
	 <script>
        $(function() {			
            $('#form-data1').on('submit', function(e) {
                e.preventDefault();
                if ($('#designation_').val() == '' || $('#idAir').val() == '' ) {
                    $('#message').html('Aucune case n\'est doit restée vide!').addClass('alert alert-danger');
                  
                } else {
                    $.ajax({
                        url: "../requests/InsertZone.php",
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {                            
                            $('#message').html(data).addClass('alert alert-success').show();
                            $('#form-data1').trigger('reset');
                        },
                        error: function() {
                            alert('Chemin introuvable');
                        }
                    });
                }
            });
			$('#form-data2').on('submit', function(e) {
                e.preventDefault();
                if ($('#designation').val() == '' ) {
                    $('#reponse').html('Aucune case n\'est doit restée vide!').addClass('alert alert-danger');
                  
                } else {
                    $.ajax({
                        url: "../requests/InsertAirDeSante.php",
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            
                            $('#reponse').html(data).addClass('alert alert-success').show();
                            $('#form-data2').trigger('reset');
                        },
                        error: function() {
                            alert('Chemin introuvable');
                        }
                    });
                }
            });
			$('#form-data3').on('submit', function(e) {
                e.preventDefault();
                if ($('#designation__').val() == '' ) {
                    $('#reponse3').html('Aucune case n\'est doit restée vide!').addClass('alert alert-danger');
                  
                } else {
                    $.ajax({
                        url: "../requests/InsertQualite.php",
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            
                            $('#reponse3').html(data).addClass('alert alert-success').show();
                            $('#form-data3').trigger('reset');
                        },
                        error: function() {
                            alert('Chemin introuvable');
                        }
                    });
                }
            });

        });
		
		
    </script>
</body>

<!-- Mirrored from radixtouch.com/templates/admin/sunray/source/light/all_patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 08:14:13 GMT -->
</html>