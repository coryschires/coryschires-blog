$(document).ready(function() {

	// SUBMIT FORM VIA AJAX
	$("#hire_me_send").click(function(){

		// grab the form data	
		var name = $("input#hire_me_name").val(),  
		    email = $("input#hire_me_email").val(),  
		    message = $("textarea#hire_me_message").val();
		
		// concatenate form data
		var dataString = 'name='+ name + '&email=' + email + '&message=' + message;
				
		// submit via ajax
		$.ajax({  
			type: "POST",  
			url: "http://coryschires.com/wp-content/themes/cs-simple/contactengine.php",  
			data: dataString,  
			success: function() {  				// if the message is successfully sent...
				$("#hire_me_content .below_header").children().fadeOut();
				
				$("#hire_me_content .below_header").html(
					"<h3 class='bright_green'>Thanks for your message!</h3> \
					<p class='sub_header'>You'll hear from me shortly.</p>"
				).hide().fadeIn('slow');
			}  
		});  
		
		// prevent default submit action
		return false;     
	});
	
	// DEFAULT SWAP VALUES FOR FORM FIELDS
	$(".swap_value").swap_value();
	
}); // end of doc ready