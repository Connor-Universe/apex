$(document).ready(function(){
	function alert(title,message){
    alertify.alert(title, message);
   }
//Registration Field
	// $("#registration_form").submit(function(e){
	// 	e.preventDefault();
		
	// 	var email = $("#email").val();
	// 	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	// 	var password = $("#password").val();
	// 	var cpassword = $("#cpassword").val();

	// 	 if(!re.test(email)){   
	// 	    alert("Wrong Email Format!", "Wrong Email Format!");
	// 		return false;
	// 	}
	// 	if (password != cpassword) {
	// 		alert("Passwords do not match", "Check you password!");
	// 		return false;
	// 	}
                
	// 		$("#registration_btn").text("Submitting...");
	// 		$("#registration_btn").attr("disabled", true);
	// 		$.ajax({
	// 			url: "auth/data-control.php",
	// 			method: "post",
	// 			data: $("#registration_form").serialize(),
	// 			dataType: 'text',
    //             cache: false,             // To unable request pages to be cached
    //             success:function(status){
	// 			    	status = $.trim(status);
	// 				if(status === 'em_found'){
	// 				        $("#registration_btn").text("Sign Up");
	// 						$("#registration_btn").attr("disabled", false);
	// 					alert("Email Found!", "Your email address has already been registered!");
	// 				}
	// 				else if(status === 'success'){
	// 				    alert("Registration Successful!", "Welcome to our platform. Please Wait!");
	// 					setTimeout(function(){
	// 						window.location="login";
	// 					},4000);
	// 				}
	// 				else{
	// 					alert("Failed!", "Registration process was not successful!");
	// 					$("#registration_btn").text("Sign Up<");
	// 					$("#registration_btn").attr("disabled", false);
	// 				}
	// 			}
	// 		});
	// 	 });
		 
		 

	//LOGIN FORM
	// $("#login_form").submit(function(e){
	// 	e.preventDefault();
	// 		$("#login_form button").text("Please Wait...");
	// 		$("#login_form button").attr("disabled", true);
	// 		//Form Submission via Ajax
	// 		$.ajax({
	// 			url: "auth/data-control.php",
	// 			method: "post",
	// 			data: $("#login_form").serialize(),
	// 			dataType: "text",
	// 			success:function(status){
	// 			var status = $.trim(status);
	// 				if(status == 'log_failed'){
	// 				$("#login_form button").text("Login");
	// 				$("#login_form button").attr("disabled", false);
	// 					alert("Login Failed!", "Email Address is not correct!");
	// 				}if(status == 'log_failed1'){
	// 				$("#login_form button").text("Login");
	// 				$("#login_form button").attr("disabled", false);
	// 					alert("Login Failed!", "Try Again! Something Went Wrong!");
	// 				}if(status == 'log_failed2'){
	// 				$("#login_form button").text("Login");
	// 				$("#login_form button").attr("disabled", false);
	// 					alert("Login Failed!", "Wrong Account Password!");
	// 				}if(status == 'no_vf'){
	// 				$("#login_form button").text("Login");
	// 				$("#login_form button").attr("disabled", false);
	// 					alert("Account Verification Required!", "Please Verify Your Account!");		
	// 				}
	// 				else if(status == 'log_success'){
	// 				$("#login_form button").text("Login Successful");
	// 						window.location.href="dashboard/";
	// 				}
	// 			}
	// 		});

	// 	});
	
	//Toastr Settings		
	// toastr.options = {
	// 	"closeButton": true,
	// 	"debug": false,
	// 	"newestOnTop": false,
	// 	"progressBar": false,
	// 	"positionClass": "toast-top-right",
	// 	"preventDuplicates": false,
	// 	"onclick": null,
	// 	"showDuration": "300",
	// 	"hideDuration": "1000",
	// 	"timeOut": "5000",
	// 	"extendedTimeOut": "1000",
	// 	"showEasing": "swing",
	// 	"hideEasing": "linear",
	// 	"showMethod": "fadeIn",
	// 	"hideMethod": "fadeOut"
	// };
	//Function for toastr (Error & Success)
	function error(header,message){
		toastr.error(message,header);
	}
	function success(header,message){
		toastr.success(message,header);
	}

});