<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="www.hbascones.com">
<meta http-equiv="cleartype" content="on">
<link rel="shortcut icon" href="/favicon.ico">

<!-- Responsive and mobile friendly stuff -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<script src="js/jquery-1.7.2.min.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="js/fancy/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/3cols.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/fancy/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/fancy/jquery.fancybox.js"></script>

<div id="header" class="section group">
	<div class="grid">
		<!-- HEADER LAYER ONE -->
		<div id="header-col-one" class="col">
			<img id="login" src="images/key.png" alt="key-login-button" />
			<div id="hidden-login" class="col">
				<form action="login.php" method="post">
					<strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Email</strong><input id="mail" type="email" name="user-email" />
					<br/>
					<strong id="pass">Password</strong><input type="password" name="user-pass" />
					<a href="#forgot-details" class="fancybox"><p id="forgot">forgot username / password</p></a>
					<input id="login-button" type="submit" value=""/>
					<br/>
					<br/>
					<a href="#login-form-page" class="fancybox"><p id="create">CREATE ACCOUNT</p></a>
					<img id="key1" src="images/key1.png" alt="key" />
				</form>
			</div>
		</div>
		<!-- =============================================================================== -->
		<!-- HEADER LAYER TWO -->
		<div id="header-col-two" class="col">
			<a href="index.php"><img id="logo" src="images/Logo@2x.png" alt="Letterpress Business Cards" /></a>
		</div>
		<!-- =============================================================================== -->
		<!-- HEADER LAYER THREE -->
		<div id="header-col-three" class="col">
			510.520.6749
		</div>
		<!-- =============================================================================== -->
	</div>
</div>

<?php
	$captcha = rand(10000,99999);
?>
<div id="forgot-details" style="display:none;">
	<h2 class="small center">Forgot Username/Password</h2>
	<form method="post" action="forgot.php">
	<input name="code_orig" type="text" value="<?php echo $captcha;?>" style="display:none;" />
	<div class="section group">
		<div class="col span_1_of_3">
			<h2 class="desc2 right">CAPTCHA:</h2>
		</div>
		<div class="col span_2_of_3">
			<p class="center input2" style="padding-top:7px;padding-right:10px;"><?php echo $captcha;?></p>
		</div>
	</div>
	
	<div class="section group">
		<div class="col span_1_of_3">
			<h2 class="desc2 right">Enter Code:</h2>
		</div>
		<div class="col span_2_of_3">
			<input type="text" id="code" class="input2" name="code"/>
		</div>
	</div>
	
	<div class="section group">
		<div class="col span_1_of_3">
			<h2 class="desc2 right">Email:</h2>
		</div>
		<div class="col span_2_of_3">
			<input type="email" id="email_add" class="input2" name="email_add"/>
		</div>
	</div>
	<input id="submit2" type="submit" value="SUBMIT" />
	</form>
</div>

<div id="login-form-page" style="display:none;">
	<h2 class="small center">Create Account</h2>
	<div id="line"></div>
	<form action="add_user_final.php" method="post">
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">First Name:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="fn" class="input2" name="fn"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Last Name:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="ln" class="input2" name="ln"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Email:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="email" id="email" class="input2" name="email"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Address Line 1:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="addr1" class="input2" name="addr1"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Address Line 2:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="addr2" class="input2" name="addr2"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Address Line 3:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="addr3" class="input2" name="addr3"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">City:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="city" class="input2" name="city"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">State:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="state" class="input2" name="state"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">ZIP Code:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="zip" class="input2" name="zip"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Password:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="password" id="pass1" class="input2" name="pass1"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Retype Password:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="password" id="pass2" class="input2" name="pass2"/>
			</div>
		</div>
		<input id="submit2" type="submit" value="CREATE ACCOUNT"/>
	</form>
</div>

<!-- Login Animaion -->
<script> 
$(document).ready(function(){
  $("#login").click(function(){
	$("#header").css({"height":"230px"});
	$("#login").slideToggle("fast");
    $("#hidden-login").slideToggle("fast");
  });
  $("#key1").click(function(){
	$("#header").css({"height":"200px"});
	$("#hidden-login").slideUp("fast");
	$("#login").delay(200).fadeIn("slow");
  });
});
</script>

<!-- Fancy Box -->
<script type="text/javascript">
   $(document).ready(function() {
	$(".fancybox").fancybox({
		helpers : {
        overlay : {
            css : {
                'background' : '#58595B, 0.60'
            }
        }
    }
	});
});
</script>