//register.php page pulls this  java script  to  runn  show/hide effect o

$(document).ready(function() {


	$("#hideLogin").click(function()  {
		$(".loginForm").hide();
		$(".registerForm").show();
	});

	$("#hideRegister").click(function()  {
		$(".loginForm").show();
		$(".registerForm").hide();
	});
});