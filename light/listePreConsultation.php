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
// $listePreconsultation = $traitement->getMalade();
$Listmalade = $traitement->getMalade();

?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.com/templates/admin/sunray/source/light/all_patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 08:14:13 GMT -->
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
                                <div class="page-title">Formulaire Consultation</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Consultation</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">liste Consultation</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                <ul class="nav nav-pills nav-pills-rose">
									<li class="nav-item tab-all"><a class="nav-link active show"
										href="#tab1" data-toggle="tab">Liste Consultation</a></li>
									<li class="nav-item tab-all"><a class="nav-link" href="#tab2"
										data-toggle="tab"> + Ajout Consultation</a></li>
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
					                                            	<th>Profil</th>
					                                                <th> NomComplet </th>
					                                                <th> Sexe </th>
					                                                <th> Téléphone </th>
					                                                <th> Adresse </th>
					                                                <th> Nationalite </th> 
																	 <th> Action </th>					                                               
					                                            </tr>
					                                        </thead>
															
					                                        <tbody><?php
                                                                       foreach ($Listmalade as $lstmalade) : ?>
																<tr class="odd gradeX">
																	
																	
																	  	<td  class="patient-img"> <img src="../images_post/avatar.png"> 
																 
																	</td>
																	           <td class="center"><?= $lstmalade->getNomComplet(); ?></td>		
																			   <td class="center"><?= $lstmalade->getSexe(); ?></td>
																				<td class="center"><?= $lstmalade->getPhone(); ?></td>
																				<td class="center"><?= $lstmalade->getAdresse(); ?></td>
																				<td class="center"><?= $lstmalade->getNationalite(); ?></td>
																																																	
																				<td class="center">
																		<a href="editMalade.php?idMalade=<?= $lstmalade->getId(); ?>" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>	<?php
                                                    endforeach;
                                                ?>															
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
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Ajout  Consultation</header>
                                   
				                        
                                </div>
                                <div class="card-body " id="bar-parent2">
								<p id="message"></p>
                          		<form id="form-data" name="contact-form" method="post" action="" enctype="multipart/form-data">
								  <div class="row">
	                                    <div class="col-md-6 col-sm-6">
	                                        <!-- text input -->           
	                                        <!-- select -->
	                                        <div class="form-group">
											<label>Nom complet de malade</label>
												<input type="hidden" name="connection" value="connection">
												<input type="hidden" name="idMedecin" value="idMedecin">
	                                             <select class="form-control" id="idMalade" name="idMalade" >
													 <option value="">  </option>
												 <?php  foreach ($Listmalade as $lst) : ?>
													<option value="<?= $lst->getId(); ?>"> <?= $lst->getNomComplet(); ?></option>
													<?php endforeach; ?>                                                
	                                            </select>
	                                        </div>
											<div class="form-group">
	                                            <label>Temperature</label>
	                                            <input type="text" id="Temperation" name="Temperation" class="form-control" placeholder="Enter la temperature">
	                                        </div>   
											<div class="form-group">
	                                            <label>Tension</label>
	                                            <input type="text" id="Tension" name="Tension" class="form-control" placeholder="Enter la tension">
	                                        </div>
											<div class="form-group">
	                                            <label>Frequence Cardiaque</label>
	                                            <input type="text"  id="FrequenceCardiaque" name="frequenceCardiaque" class="form-control" placeholder="Enter la Frequence Cardiaque">
	                                        </div>
											
											<hr>
	                                      
	                                    </div>


	                                    <div class="col-md-6 col-sm-6">                                       
										<div class="form-group">
	                                            <label>Frequence Respiration</label>
	                                            <input type="text" id="FrequenceRespiration" name="frequenceRespiration" class="form-control" placeholder="Enter la frequence Respiration">
	                                        </div>
											<div class="form-group">
	                                            <label>Saturation EnOxygene</label>
	                                            <input type="text" id="SaturationEnOxygene" name="saturationEnOxygene" class="form-control" placeholder="Enter la saturation EnOxygene">
												 </div>
											 <div class="form-group">
										  
										      <label>Detail Consultation 	</label>
											  <textarea name="address" class="form-control-textarea" placeholder="Detail consultation" rows="5"></textarea>
	  
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
       <?php include 'footer.php'; ?>
        <!-- end footer -->
    </div>



	<script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

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
            $('#form-data').on('submit', function(e) {
                e.preventDefault();
                if ($('#temperation').val() == '' || $('#tension').val() == '' || $('#idMalade').val()==''
                 || $('#frequenceCardiaque').val()=='' || $('#idMedecin').val()==''
                 || $('#frequenceRespiration').val()=='' || $('#saturationEnOxygene').val()=='') {
                    $('#message').html('Aucune case n\'est doit restée vide!').addClass('alert alert-danger');
                } else {
                    $.ajax({
                        url: "../requests/InsertMalade.php",
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            
                            $('#message').html(data).addClass('alert alert-success').show();
                            $('#form-data').trigger('reset');
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