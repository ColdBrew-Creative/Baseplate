<?php

/*
 * Template Name: Contact Page
 */

?>

<?php get_header(); ?>

	<section>
		<div class="row">
			<div class="medium-8 medium-centered columns">	
				<div id="success">
					<p>Your message was sent successfully! We'll be in touch soon.</p>
				</div>

				<form name="myForm" id="myForm" action="javascript:sendEmail();">
					<fieldset>
						<legend>Your Name</legend>
						<input type="text" id="name" />
					</fieldset>
					<fieldset>
						<legend>Your Email</legend>
						<input type="email" id="email" />
					</fieldset>
					<fieldset>
						<legend>How can we help you?</legend>
						<textarea id="message"></textarea>
					</fieldset>
					<input type="submit" />
				</form>
			</div>
		</div>
	</section>

	<script>
		function sendEmail() {
			var name = document.getElementById("name").value;
			var email = document.getElementById("email").value;
			var message = document.getElementById("message").value;

			if (name == "") {
				alert("Sorry, we didn't catch your name?")
				document.getElementById("name").focus();
				return;
			}
			if (email == "") {
				alert("How can we email you?")
				document.getElementById("email").focus();
				return;
			}
			if (message == "") {
				alert("What did you want to say?")
				document.getElementById("message").focus();
				return;
			}

			$.ajax({
				url: '../wp-content/themes/YOURTHEMENAME/send-form.php',
				type: 'post',
				data: {"email": email, "name": name, "message": message},
				success: function(response) {
					document.getElementById('email').value = ""; // is it necessary to clear these?
					document.getElementById('name').value = "";
					document.getElementById('message').value = "";

					// send that lovely message the viewer had to say
					$("input[type=submit]", "form").attr("disabled", "disabled");
					$("#myForm").addClass("message-sent");
					$("#success").show();
					$("#myForm").fadeOut("medium");
				}
			});
		}
	</script>

<?php get_footer(); ?>
