<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>elos - Multipurpose HTML5 Template</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
   	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="web/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="web/css/style.css" type="text/css" />
    
    <link rel="stylesheet" href="web/css/font-awesome/css/font-awesome.min.css">
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="web/css/responsive-leyouts.css" type="text/css" />
    
<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="css/colors/blue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/colors/bridge.css" />-->
    <!--<link rel="stylesheet" href="css/colors/slate.css" />-->
    <!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="css/colors/darkred.css" />-->

<!-- just remove the below comments witch bg patterns you want to use --> 
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-default.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-one.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-two.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-three.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-four.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-five.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-six.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-seven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eight.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-nine.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-ten.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eleven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-twelve.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-thirteen.css" />-->
    
    <!-- style switcher -->
    <link rel = "stylesheet" media = "screen" href = "web/js/style-switcher/color-switcher.css" />
    
    <!-- mega menu -->
    <link href="web/js/mainmenu/sticky.css" rel="stylesheet">
    <link href="web/js/mainmenu/bootstrap.css" rel="stylesheet">
    <link href="web/js/mainmenu/fhmm.css" rel="stylesheet">
    
	<!-- forms -->
    <link rel="stylesheet" href="web/js/form/sky-forms.css" type="text/css" media="all">
    


</head>

<body>


<div>

<!-- Contant
======================================= -->

<div class="clearfix"></div>

<div class="iframecontainer">

	<div class="content_fullwidth">
    
		
      <div class="login_form two">		
			<form id="sky-form" class="sky-form">
				<header>Login form</header>
				
				<fieldset>					
					<section>
						<div class="row">
							<label class="label col col-4">E-mail</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-user"></i>
									<input type="email" name="email">
								</label>
							</div>
						</div>
					</section>
					
					<section>
						<div class="row">
							<label class="label col col-4">Password</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-lock"></i>
									<input type="password" name="password">
								</label>
								<div class="note"><a href="#sky-form2" class="modal-opener">Forgot password?</a></div>
							</div>
						</div>
					</section>
					
					<section>
						<div class="row">
							<div class="col col-4"></div>
							<div class="col col-8">
								<label class="checkbox"><input type="checkbox" name="remember" checked><i></i>Keep me logged in</label>
							</div>
						</div>
					</section>
				</fieldset>
				<footer>
					<div class="fright">
                    <a href="register.html" class="button button-secondary">Register</a>
                    <button type="submit" class="button">Log in</button>
                    </div>
					
				</footer>
			</form>			
		</div>
        
		<form action="demo-recovery.php" id="sky-form2" class="sky-form sky-form-modal">
			<header>Password recovery</header>
			
			<fieldset>					
				<section>
					<label class="label">E-mail</label>
					<label class="input">
						<i class="icon-append icon-user"></i>
						<input type="email" name="email" id="email">
					</label>
				</section>
			</fieldset>
			
			<footer>
				<button type="submit" name="submit" class="button">Submit</button>
				<a href="#" class="button button-secondary modal-closer">Close</a>
			</footer>
				
			<div class="message">
				<i class="icon-ok"></i>
				<p>Your request successfully sent!<br><a href="#" class="modal-closer">Close window</a></p>
			</div>
		</form>

	</div>

</div><!-- end content area -->

<div class="clearfix"></div>
<div class="margin_top5"></div>

</div>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/universal/jquery.js"></script>

<script src="web/js/form/jquery.form.min.js"></script>
<script src="web/js/form/jquery.validate.min.js"></script>
<script src="web/js/form/jquery.modal.js"></script>

<script type="text/javascript">
	$(function()
	{
		// Validation for login form
		$("#sky-form").validate(
		{					
			// Rules for form validation
			rules:
			{
				email:
				{
					required: true,
					email: true
				},
				password:
				{
					required: true,
					minlength: 3,
					maxlength: 20
				}
			},
								
			// Messages for form validation
			messages:
			{
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				},
				password:
				{
					required: 'Please enter your password'
				}
			},					
			
			// Do not change code below
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
		
		// Validation for recovery form
		$("#sky-form2").validate(
		{					
			// Rules for form validation
			rules:
			{
				email:
				{
					required: true,
					email: true
				}
			},
								
			// Messages for form validation
			messages:
			{
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				}
			},
								
			// Ajax form submition					
			submitHandler: function(form)
			{
				$(form).ajaxSubmit(
				{
					success: function()
					{
						$("#sky-form2").addClass('submited');
					}
				});
			},				
			
			// Do not change code below
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
	});			
</script>


</body>
</html>
