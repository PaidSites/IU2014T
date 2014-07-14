$(document).ready(function() { 
 
    $('input[type=submit]').click(function() {  
 
        $(".error").hide();
        var hasError = false;
 
        var emailaddressVal = $("#emailAddress").val();
        if(emailaddressVal == '') {
            $("#emailAddress").after('<span class="error">Please enter your email address.</span>');
            hasError = true;
        }
 
        if(hasError == true) { return false; }
 
    });
});

$(document).ready(function() { 
 
    $('input[type=submit]').click(function() {  
 
        $(".error").hide();
        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 
        var emailaddressVal = $("#emailAddress").val();
        if(emailaddressVal == '') {
            $("input[type=submit]").after('<br /><span class="error">Please enter your email address.</span>');
            hasError = true;
        }
 
        else if(!emailReg.test(emailaddressVal)) {
            $("input[type=submit]").after('<br /><span class="error">Enter a valid email address.</span>');
            hasError = true;
        }
 
        if(hasError == true) { return false; }
 
    });
});