// JavaScript Document
$(document).ready(function() { 
	
	function validate() {
		
		if ($('#fmc_coreg_check').prop('checked')) {
			
			console.log('The box is checked and will submit');
			$.post("http://process.signupapp.com/", $("#sua").serialize());
			console.log('Redirecting');
			location.assign('http://getrichwithdividends.com/thank-you/');
		
		} else {
			
			$('#coreg').remove();
			$.post("http://process.signupapp.com/", $("#sua").serialize());
			console.log('Submitted with no pants');
			console.log('Redirecting');
			location.assign('http://www.investmentu.com/content/detail/confirmation-welcome-to-investmentu');
		
		}

	}
	
});
	
//function to listen for property change 

$('#fmc_coreg_check').change(function() {
	
	if ($(this).prop('checked')) {
		$('#sua').append('<input id="fmc_coreg" name="coreg[]" type="hidden" value="X3000000:FREE_MKT:Free Market Cafe<welcome@freemarketcafe.com>:Welcome to Free Market Cafe:fmc_welcome" />');
	} else {
		$('#fmc_coreg').remove();
	}
})

$('#ei_coreg_check').change(function() {
	
	if ($(this).prop('checked')) {
		//do nothing
		$('#sua').append('<input id="ei_coreg" name="coreg[]" type="hidden" value="X3000000:EARLYINV:Early Investing<welcome@earlyinvesting.com>:Welcome to Early Investing:ei_welcome" />');
	} else {
		$('#ei_coreg').remove();
	}
})


//function to add/remove coreg fields on the form