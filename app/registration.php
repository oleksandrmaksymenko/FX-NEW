<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body>
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" class="registration_section" style="background-image: url(img/registration/bg.jpg)">
		<h2>registration<br><span class="registration_header_span">STEP 1 OF 2</span></h2>
	</section>

	<section id="regitstration_s1" class="pad">
		<div class="wrapper overflow_inherit">
			<div class="wrap">
				<!-- <span class="registration_s1__mobile">*Enter your mobile phone number: </span><span class="registration_s1__mobile2">?</span> -->
				<!-- <span class="registration_s1__mobile3">Your mobile phone number helps us to maintain the security of your account. FX Manager will never share your number with any third parties. You will be sent an SMS message with a verification code that should be entered in the next step.</span> -->
			</div>
			<form method="POST" class="form-inline form" action="javascript:void(null);">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="">
				<input type="hidden" name="admin_email" value="">
				<input type="hidden" name="form_subject" value="">
				<!-- END Hidden Required Fields -->
				<div class="form_input">
					<span class="field">
						<input type="text" class="form-control name" name="name" required="" placeholder="Your name" />
					</span>
				</div>
				<div class="form_input">
					<span class="field">
						<input type="email" class="form-control" name="email" required=""  placeholder="Your e-mail" />
					</span>
				</div>
				<div class="form_input">
					<span class="field" id="s13_formm">
						<input required="required" class="phone_call" placeholder="Your mobile phone number" type="tel" name="custom_tel" style="background-image:none;">
					</span>
				</div>
				<div class="cb tc">
					<button type="submit" class="btn btn-block" name="send">Continue Registration</button>
					<div class="registration_s1__wrap">
						<span class="registration_s1__pola2">You will be sent an SMS message with a verification code that should be entered in the next step.</span>
						<span class="registration_s1__pola">*Required field</span>
						<a href="#modal_login" class="registration_s1__yze modall_pad button_hover">Already registered?</a>
					</div>
				</div>
			</form>
		</div>
	</section>

<?php include "footer.php"; ?>
<?php include "script.php"; ?>

	<script>
		$(function() {
			$("#registration_s1__form_tel").intlTelInput({
				utilsScript:'libs/IntlTelInput/js/utils.js',
				defaultCountry: 'auto',
				preferredCountries: ['ru']
			});
		});
	</script>

</body>
</html>