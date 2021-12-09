<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from radixtouch.com/templates/admin/sunray/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 08:13:18 GMT -->
<head>    
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Sunray | Bootstrap Responsive Hospital Admin Template</title>
     <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!-- <link rel="stylesheet" href="../assets/plugins/iconic/css/material-design-iconic-font.min.css"> -->
	<link rel="stylesheet" href="../../../../../../cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/pages/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="https://radixtouch.com/templates/admin/sunray/source/assets/img/favicon.ico" /> 

</head>
<body>
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form id="form-data" class="login100-form validate-form" method="POST">
				<p id="message"></p>
					<span class="login100-form-logo">
						<img alt="" src="../assets/img/hospital.png">
					</span>
					<span class="login100-form-title p-b-30 p-t-18">
						Connectez-vous
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
					<input type="hidden" name="connection" value="connection">
						<input class="input100" type="text" id="nomuser" name="nomuser" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" id="pswd" name="pswd" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Memoriser le mot de passe
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center p-t-30">
						<a class="txt1" href="forgot_password.html">
							vous avez oublier le mot de passe ?
						</a>
					</div>
					<div class="text-center p-t-30">
						<a class="txt1" href="creationCompte.php">
							Vous avez déjà un compte ?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    <!-- start js include path -->
     <script src="../assets/plugins/jquery/jquery.min.js" ></script>
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="../assets/js/pages/extra_pages/extra_pages.js"></script>
    <!-- end js include path -->
</body>
<script>
     $(function() {
            $('#form-data').on('submit', function(e) {
                e.preventDefault();
                if ($('#nomuser').val() == '' || $('#pswd').val() == '') {
                    $('#message').html('Aucune case n\'est doit restée vide!').addClass('alert alert-danger');
                } else {
                    $.ajax({
                        url: "../requests/request_login.php",
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
<!-- Mirrored from radixtouch.com/templates/admin/sunray/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 08:13:20 GMT -->
</html>