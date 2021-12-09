<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.com/templates/admin/sunray/source/light/layouts_form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 08:15:02 GMT -->
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
 			<?php  include('sidebarMenu.php') ?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Form Layouts</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Forms</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Form Layouts</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Simple Form</header>
                                     <button id = "panel-button" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body " id="bar-parent">
                                    <form>
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Email address</label>
                                            <input type="email" class="form-control" id="simpleFormEmail" placeholder="Enter email address">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleFormPassword">Password</label>
                                            <input type="password" class="form-control" id="simpleFormPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox checkbox-icon-black">
                                                <input id="rememberChk1" type="checkbox" checked="checked">
                                                <label for="rememberChk1">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Horizontal Form</header>
                                    <button id = "panel-button2" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button2">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body " id="bar-parent1">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="horizontalFormEmail" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="horizontalFormEmail" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="horizontalFormPassword" class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="horizontalFormPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <div class="checkbox checkbox-icon-black">
                                                    <input id="rememberChk2" type="checkbox" checked="checked">
                                                    <label for="rememberChk2">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="offset-md-3 col-md-9">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                                <button type="button" class="btn btn-default">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Form Controls</header>
                                    <button id = "panel-button3" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button3">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body " id="bar-parent2">
                                	<div class="row">
	                                    <div class="col-md-6 col-sm-6">
	                                        <!-- text input -->
	                                        <div class="form-group">
	                                            <label>Text</label>
	                                            <input type="text" class="form-control" placeholder="Enter ...">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>Text Disabled</label>
	                                            <input type="text" class="form-control" placeholder="Enter ..." disabled>
	                                        </div>
	                                        <div class="form-group">
	                                            <label>Text Readonly</label>
	                                            <input type="text" class="form-control" placeholder="Enter ..." readonly>
	                                        </div>
	                                        <!-- checkbox -->
	                                        <div class="form-group">
	                                            <div class="checkbox checkbox-icon-black p-0">
	                                                <input id="checkbox1" type="checkbox">
	                                                <label for="checkbox1">
	                                                    Checkbox 1
	                                                </label>
	                                            </div>
	                                            <div class="checkbox checkbox-icon-black p-0">
	                                                <input id="checkbox2" type="checkbox" checked="checked">
	                                                <label for="checkbox2">
	                                                    Checkbox 2
	                                                </label>
	                                            </div>
	                                            <div class="checkbox checkbox-icon-black p-0">
	                                                <input id="checkbox3" type="checkbox" disabled>
	                                                <label for="checkbox3">
	                                                    Checkbox 3
	                                                </label>
	                                            </div>
	                                        </div>
	                                        <!-- radio -->
	                                        <div class="form-group">
	                                            <div class="radio p-0">
	                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
	                                                <label for="optionsRadios1">
	                                                    Option 1
	                                                </label>
	                                            </div>
	                                            <div class="radio p-0">
	                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
	                                                <label for="optionsRadios2">
	                                                    Option 2
	                                                </label>
	                                            </div>
	                                            <div class="radio p-0">
	                                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
	                                                <label for="optionsRadios3">
	                                                    Option disabled
	                                                </label>
	                                            </div>
	                                        </div>
	                                        <!-- select -->
	                                        <div class="form-group">
	                                            <label>Select</label>
	                                            <select class="form-control">
	                                                <option>option 1</option>
	                                                <option>option 2</option>
	                                                <option>option 3</option>
	                                                <option>option 4</option>
	                                                <option>option 5</option>
	                                            </select>
	                                        </div>
	                                        <div class="form-group">
	                                            <label>Select Disabled</label>
	                                            <select class="form-control" disabled>
	                                                <option>option 1</option>
	                                                <option>option 2</option>
	                                                <option>option 3</option>
	                                                <option>option 4</option>
	                                                <option>option 5</option>
	                                            </select>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-6 col-sm-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Textarea Disabled</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Textarea Readonly</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." Readonly></textarea>
                                        </div>
                                        <!-- Select multiple-->
                                        <div class="form-group">
                                            <label>Select Multiple</label>
                                            <select multiple class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Multiple Disabled</label>
                                            <select multiple class="form-control" disabled>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                	</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Validation States</header>
                                    <button id = "panel-button4" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button4">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body " id="bar-parent3">
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess">Text</label>
                                        <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                                        <span class="help-block">Success Message</span>
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="inputWarning">Text</label>
                                        <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                                        <span class="help-block">Warning Message</span>
                                    </div>
                                    <div class="form-group has-error">
                                        <label class="control-label" for="inputError">Text</label>
                                        <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                                        <span class="help-block">Error Message</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Control height</header>
                                    <button id = "panel-button5" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button5">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body " id="bar-parent4">
                                    <div class="form-group">
                                        <label>Large</label>
                                        <input type="text" class="form-control input-lg" placeholder="input-lg">
                                    </div>
                                    <div class="form-group">
                                        <label>Default</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Small</label>
                                        <input type="text" class="form-control input-sm" placeholder="input-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Column Sizing</header>
                                    <button id = "panel-button6" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button6">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body " id="bar-parent5">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <input type="text" class="form-control" placeholder=".col-xs-2">
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" class="form-control" placeholder=".col-xs-3">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <input type="text" class="form-control" placeholder=".col-xs-4">
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" class="form-control" placeholder=".col-xs-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Input Groups</header>
                                    <button id = "panel-button7" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button7">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body " id="bar-parent6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h4>With Addon</h4>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <h4>With icons</h4>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <h4>With checkbox and radio</h4>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
												  <input type="checkbox">
												</span>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
												  <input type="radio">
												</span>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <h4>With Buttons</h4>
                                            <div class="input-group">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">Action
                                                        <span class="fa fa-caret-down"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Action</a>
                                                        </li>
                                                        <li><a href="#">Another action</a>
                                                        </li>
                                                        <li><a href="#">Something else here</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <input type="text" class="form-control">
                                            </div>
                                            <br>
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                                <span class="input-group-btn">
											  <button type="button" class="btn btn-info btn-flat">Go!</button>
											</span>
                                            </div>
                                            <br>
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-btn">
											  <button type="button" class="btn btn-info">Action</button>
											</span>
                                                <input type="text" class="form-control">
                                                <span class="input-group-btn">
											  <button type="button" class="btn btn-info">Go!</button>
											</span>
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
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; Sunray Template By
                <a href="https://radixtouch.com/cdn-cgi/l/email-protection#9be9feffe8effae9eff3fef6fedbfcf6faf2f7b5f8f4f6" target="_top" class="makerCss">Redstar Theme</a>
            </div>
            <div class="scroll-to-top">
                <i class="material-icons">eject</i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/plugins/jquery/jquery.min.js" ></script>
	<script src="../assets/plugins/popper/popper.min.js" ></script>
    <script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <!-- Common js-->
	<script src="../assets/js/app.js" ></script>
    <script src="../assets/js/layout.js" ></script>
	<script src="../assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
     <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.com/templates/admin/sunray/source/light/layouts_form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 08:15:02 GMT -->
</html>