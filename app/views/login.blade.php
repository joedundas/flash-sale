<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="">
	{{--<link rel="icon" href="../../images/favicon.ico">--}}

	<title> <?php echo Config::get('terminology.appName.plain'); ?> - Log in </title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="/vendors/bootstrap/dist/css/bootstrap.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="/vendors/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="/css/master_style.css">

	<!-- foxadmin Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="/css/skins/_all-skins.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script src="/js/global.js"></script>

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>

<script>
    var controller = new controller(
        new pageController(
            new modalController(),
            new workingBlindController()
        ),
        new sessionController()
    );

    var ajax = new ajaxController();




</script>

<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		 <?php echo Config::get('terminology.appName.logo'); ?>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg" >Sign in to start your session</p>

		<form action="../../index.html" method="post" class="form-element">
			<div class="form-group has-feedback">
				<input id='email' type="email" class="form-control" placeholder="Email">
				<span class="ion ion-email form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input id='password' type="password" class="form-control" placeholder="Password">
				<span class="ion ion-locked form-control-feedback"></span>
			</div>
			<div class="row">
				{{--<div class="col-6">--}}
					{{--<div class="checkbox">--}}
						{{--<input type="checkbox" id="basic_checkbox_1" >--}}
						{{--<label for="basic_checkbox_1">Remember Me</label>--}}
					{{--</div>--}}
				{{--</div>--}}
				<!-- /.col -->
				{{--<div class="col-6">--}}
					{{--<div class="fog-pwd">--}}
						{{--<a href="javascript:void(0)"><i class="ion ion-locked"></i> Forgot pwd?</a><br>--}}
					{{--</div>--}}
				{{--</div>--}}
				<!-- /.col -->
				<div class="col-12 text-center">
					<span id="signin" class="btn btn-info btn-block btn-flat margin-top-10">SIGN IN</span>
				</div>
				<!-- /.col -->
			</div>
		</form>

		<div class="margin-top-30 text-center">
			<p>Don't have an account? <a href="register" class="text-info m-l-5">Sign Up Here</a></p>
		</div>

	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="/vendors/jquery/dist/jquery.js"></script>

<!-- popper -->
<script src="/vendors/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="/vendors/bootstrap/dist/js/bootstrap.js"></script>


<script>

    $("document").ready(
        function() {

        }
    );

        $("#signin").click(function() {
            var email = $('#email').val().trim();
            var password = $('#password').val().trim();
            controller.page.ajax.send(
                {
                    url:'/ajax/auth/login',
                    data:{
                        'email':email,
                        'password':password
                    },
                    'callback': {
                        'success':receiveAuthentication
                    }
                }
            );
    	});

        function receiveAuthentication(data) {
            controller.page.blind.hide();

            if(data.auth == 'N') {
                alert("Sorry, bad login credentials");
                return 1;
            }
            window.location.href = 'dashboard';
		}
</script>
</body>
</html>
