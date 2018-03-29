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

	<style>
		.form-feedback {
			color:red;
		}
	</style>
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




<!-- jQuery 3 -->
<script src="/vendors/jquery/dist/jquery.js"></script>

<!-- popper -->
<script src="/vendors/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="/vendors/bootstrap/dist/js/bootstrap.js"></script>

<body class="hold-transition register-page">
<div class="register-box">
	<div class="register-logo">
        <?php echo Config::get('terminology.appName.logo'); ?>
	</div>

	<div class="register-box-body">
		<p class="login-box-msg">Register a new membership</p>

		<form action="../../index.html" method="post" class="form-element">
			<div class="form-group has-feedback">
				<input type="text" class="form-control" placeholder="First name" id="firstName" required>
				<span class="ion ion-person form-control-feedback "></span>
				<span class='form-feedback' id="feedback_firstName"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="text" class="form-control" placeholder="Last name" id="lastName" required >
				{{--<span class="ion ion-person form-control-feedback "></span>--}}
				<span class='form-feedback' id="feedback_lastName"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="email" class="form-control" placeholder="Email" id="email" required>
				<span class="ion ion-email form-control-feedback "></span>
				<span class='form-feedback' id="feedback_email"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Password" id="password" required>
				<span class="ion ion-locked form-control-feedback "></span>
				<span class='form-feedback' id="feedback_password"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Retype password" id="password_confirmation" required>
				<span class='form-feedback' id="feedback_password_confirmation"></span>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="checkbox">
						<input type="checkbox" id="agreeToTerms">
						<label for="agreeToTerms">I agree to the <a href="#"><b>Terms</b></a></label>
						<div><span class='form-feedback' id="feedback_agreeToTerms"></span></div>
					</div>

				</div>
				<!-- /.col -->
				<div class="col-12 text-center">
					<button  id='submitButton' class="btn btn-info btn-block btn-flat margin-top-10">SIGN UP</button>
				</div>
				<!-- /.col -->
			</div>
		</form>

		{{--<div class="social-auth-links text-center">--}}
			{{--<p>- OR -</p>--}}
			{{--<a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>--}}
			{{--<a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>--}}
		{{--</div>--}}
		{{--<!-- /.social-auth-links -->--}}

		<div class="margin-top-20 text-center">
			<p>Already have an account?<a href="login" class="text-info m-l-5"> Sign In</a></p>
			<p>Forgot Password?<a href="reset-password" class="text-info m-l-5"> Reset Password</a></p>
		</div>


	</div>
	<!-- /.form-box -->
</div>
<!-- /.register-box -->



<script>

    $("document").ready(

    );


        $("#submitButton").click(function(event) {
            event.preventDefault();
            var preErrors = allRequiredFieldsAreFilled();
            // Just checks that required fields are not blank.  Full validation done in controller
            if(preErrors.isValid === false) {
                showFormErrors(preErrors.messages);
                return false;
			}

			var registrationData = {
				'firstName': $('#firstName').val().trim(),
				'lastName': $('#lastName').val().trim(),
				'email': $('#email').val().trim(),
				'password': $('#password').val().trim(),
				'password_confirmation': $('#password_confirmation').val().trim(),
				'agreeToTerms': $('#agreeToTerms').prop('checked') ? 'yes' : 'no'
			}

			controller.page.ajax.send(
				{
					url: '/ajax/auth/register',
					data: registrationData,
					'callback': {
						'success': receiveRegisterResults
					}
				}
			);

            function receiveRegisterResults(data) {
                controller.page.blind.hide();

                if(data.errors === 'none') {
                    window.location.href = 'dashboard';
				}
				else if(data.errors === 'internal') {
                    alert("INTERNAL ERROR!: " + data.data[0]);
				}
				else {
                    showFormErrors(data.data);
				}

            }
            function showFormErrors(errorMessages) {
                clearFormErrors();
                for(elementId in errorMessages) {
                    feedbackMessage = '';
					for(var i=0; i<errorMessages[elementId].length; i++) {
					    feedbackMessage += "<p style='margin:0px'> - " + errorMessages[elementId][i] + "</p>";
					}
					$('#feedback_' + elementId).html(feedbackMessage);

				}
			}
            function allRequiredFieldsAreFilled() {
                var isValid = true;
                var errorMessages = {};
                $(':input[required]:visible').each(
                    function() {
                        if($(this).val().trim() === '') {
							var elementId = $(this).attr('id');
							var message = 'The ' + getElementNameFromId(elementId) + ' field is required.';

							errorMessages[elementId] = [message];
                            isValid = false;
                        }
                    }
                )
				return {
				    'isValid':isValid,'messages':errorMessages
                };
            }
            function clearFormErrors() {
                $('input[id]').each(function() {
                    $('#feedback_' + $(this).attr('id')).html('');
                })
            }
            function getElementNameFromId(elementId) {
                var arr = elementId.split(/(?=[_A-Z])/);
                var name = "";
                for(var i=0; i<arr.length; i++) {

                    name += ' ' + arr[i].replace(/_/g," ").toLowerCase()
				}
				return name.trim();
			}

    	});





</script>

</body>
</html>
