<?php /* Template Name: Contact Page */ get_header(); ?>

<script>
function sendEmail(){
	var email = document.getElementById('email').value;
	var name = document.getElementById('name').value;
	var message = document.getElementById('message').value;


	if (name == "" ) 
	{
	   alert("Sorry, we didn't catch your name?")
	   document.myForm.name.focus() ;
	   return false;
	}

	if (email == "" ) 
    {
       alert("How can we email you?")
       document.myForm.email.focus() ;
       return false;
    }
	   
	if (message == "" ) 
	{
	   alert("What did you want to say?")
	   document.myForm.message.focus() ;
	   return false;
	}
   	
	$.ajax({
	    url: '../wp-content/themes/YOURTHEMENAME/send-form.php',
	    type: 'post',
	    data: {"email":email,"name":name,"message":message},
	    
	    
	    success: function(response) {
	    		document.getElementById('email').value = "";
	    		document.getElementById('name').value = "";
	    		document.getElementById('message').value = "";
	
					// send that shit
					$('input[type=submit]', 'form').attr('disabled', 'disabled');
					$("#myForm").addClass("message-sent");
					$("#success").show();
					$("#myForm").fadeOut('medium');
		
	    } //finish ajax
	});	

} // end sendEmail function

</script>




<!-- Start the contact shit -->
<div class="row white content">
		<div class="large-8 large-centered medium-8 medium-centered columns">	
			<div id="success">
				  <span>
				    <p>Your message was sent successfully! We'll be in touch soon.</p>
				  </span>
			</div>
			
			<form name="myForm" id="myForm" action="javascript:sendEmail();" class="animated fadeIn">
				<label>Your Name</label>
				<input type="name" id="name" />
				<label>Your Email</label>
				<input type="email" id="email" />
				<label>How can we help you?</label>
				<textarea type="text" id="message" cols="10" rows="7"></textarea>
				<input type="submit" class="btn btn-alt"></input>
			</form>
		</div>
		
<!-- 		<div class="large-4 medium-4 columns">
			<h3>Let's get in touch!</h3>
			<p>Fill out the quick form on the left and we'll respond within 48 hours.</p>
			<p>Some helpful information you might include about your project:</p>
			<ul>
				<li>Deadline</li>
				<li>Price Range</li>
				<li>Project Description</li>
			</ul>
		</div> -->
</div>
<?php get_footer(); ?>
