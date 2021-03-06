jQuery(document).ready(function($) {
    var change_flag = false;
    var server_url = 'https://a.blazemeter.com';
    $("#edit-anonymous-blazemeter-ahah-anon-page").val("Add Page");
    $("#edit-authenticated-blazemeter-ahah-auth-page").val("Add Page");

    var max_users = parseInt($("#edit-max-users").val());
    var median_users = max_users / 2;
    //anon slider
    $("#anon-slider").slider({
        min: 0,
        max: max_users,
        range: "min",
        value: $("#edit-anon").val(),
        slide: function(event, ui) {
            $("#edit-anon").val(ui.value);
            change_flag = true;
        }
    });
    $("#edit-anon").change(function() {
        if (isNaN($("#edit-anon").val())) {
            $("#anon-slider").val(0);
        }
        if ($("#edit-anon").val() > max_users) {
            $("#anon-slider").val(max_users);
        }
        if ($("#edit-anon").val() < 0) {
            $("#anon-slider").val(0);
        }
        $("#anon-slider").slider("value", $("#edit-anon").val());
    });

    //auth slider
    $("#auth-slider").slider({
        min: 0,
        max: max_users,
        range: "min",
        value: $("#edit-auth").val(),
        slide: function(event, ui) {
            $("#edit-auth").val(ui.value);
            change_flag = true;
        }
    });
    $("#edit-auth").change(function() {
        if (isNaN($("#edit-auth").val())) {
            //User entered a string
            $("#auth-slider").val(0);
        }
        if ($("#edit-auth").val() > max_users) {
            $("#auth-slider").val(max_users);
        }
        if ($("#edit-auth").val() < 0) {
            $("#auth-slider").val(0);
        }
        $("#auth-slider").slider("value", $("#edit-auth").val());
    });
    
    $(document).on('keyup', '.blazemeter-sign-up-form input', function(){
	    var enablefirstname = false;
	    var enablelastname = false;
	    var enablemail = false;
	    var enablepassword = false;
	    if(checkField('.signup-firstname')) {
		    $('.signup-firstname').css('border', 'none');
		    enablefirstname = true;
	    } else {
		    $('.signup-firstname').css('border', 'red 1px solid');
		    enablefirstname = false;
	    }
	    if(checkField('.signup-lastname')) {
		    $('.signup-lastname').css('border', 'none');
		    enablelastname = true;
	    } else {
		    $('.signup-lastname').css('border', 'red 1px solid');
		    enablelastname = false;
	    }
	    if(checkField('.signup-email')) {
		    $('.signup-email').css('border', 'none');
		    if(isEmail($('.signup-email').val())) {
			    enablemail = true;
		    } else {
			    $('.signup-email').css('border', 'red 1px solid');
			    enablemail = false;
		    }
	    } else {
		    $('.signup-email').css('border', 'red 1px solid');
		    enablemail = false;
	    }
	    if(checkField('.signup-password')) {
		    $('.signup-password').css('border', 'none');
		    enablepassword = true;
	    } else {
		    $('.signup-password').css('border', 'red 1px solid');
		    enablepassword = false;
	    }
	    if(enablefirstname && enablelastname && enablemail && enablepassword) {
		    $('.blazemeter-sign-up-form .form-submit.is-disabled').prop('disabled', false);
		    $('.blazemeter-sign-up-form .form-submit.is-disabled').removeClass('is-disabled');
	    } else {
		    $('.blazemeter-sign-up-form .form-submit.is-disabled').prop('disabled', true);
		    $('.blazemeter-sign-up-form .form-submit').addClass('is-disabled');
	    }
    });
    
    $(document).on('keyup', '.blazemeter-login-form input', function(){
	    var enablemail = false;
	    var enablepassword = false;
	    if(checkField('.login-email')) {
		    $('.login-email').css('border', 'none');
		    if(isEmail($('.login-email').val())) {
			    enablemail = true;
		    } else {
			    $('.login-email').css('border', 'red 1px solid');
			    enablemail = false;
		    }
	    } else {
		    $('.login-email').css('border', 'red 1px solid');
		    enablemail = false;
	    }
	    if(checkField('.login-password')) {
		    $('.login-password').css('border', 'none');
		    enablepassword = true;
	    } else {
		    $('.login-password').css('border', 'red 1px solid');
		    enablepassword = false;
	    }
	    if(enablemail && enablepassword) {
		    $('.blazemeter-login-form .form-submit.is-disabled').prop('disabled', false);
		    $('.blazemeter-login-form .form-submit.is-disabled').removeClass('is-disabled');
	    } else {
		    $('.blazemeter-login-form .form-submit.is-disabled').prop('disabled', true);
		    $('.blazemeter-login-form .form-submit').addClass('is-disabled');
	    }
    });
    
    function isEmail(email) {
	  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  return regex.test(email);
	}
    
    function checkField(element) {
	    var field = $(element).val();
	    if(field.length < 1 || $.trim(field) == '') {
		    return false;
	    }
	    return true;
    }
    
/*    $("#blazemeter-signup").click(function() {
        $('#blazemeter-signup-modal').modal({
            closeHTML: "<div class='close-popup'><a href='#' title='Close'></a></div>",
            minHeight: 580,
            containerId: 'simplemodal-register-container'
        });
    });*/

/*    $("#blazemeter-login").click(function() {
        $('#blazemeter-login-modal').modal({
            closeHTML: "<div class='close-popup'><a href='#' title='Close'></a></div>",
            height: 370,
            minHeight: 370,
            containerId: 'simplemodal-login-container'
        });
    });*/

    /*$('#blazemeter-sign-up-form').submit(function() {
	$('.reg-error-message').hide();
	    var password = $('#blazemeter-signup-modal #edit-reg-password').val();
        var email = $('#blazemeter-signup-modal #edit-reg-email').val();
        var first = $('#blazemeter-signup-modal #edit-reg-first-name').val();
        var last = $('#blazemeter-signup-modal #edit-reg-last-name').val();
		if(password.length >= 6 && validateEmail(email) && first.length > 0 && last.length > 0) {
		$('#blazemeter-signup-modal #edit-reg-password').attr('disabled', 'disabled');
		$('#blazemeter-signup-modal #edit-reg-email').attr('disabled', 'disabled');
		$('#blazemeter-signup-modal #edit-reg-first-name').attr('disabled', 'disabled');
		$('#blazemeter-signup-modal #edit-reg-last-name').attr('disabled', 'disabled');
		$('#blazemeter-signup-modal #edit-submit-sign-up').attr('disabled', 'disabled');
		$('.creating-account').show();
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {
                    var response = JSON.parse(xmlhttp.response);
                    var xmlhttp2 = new XMLHttpRequest();
                    xmlhttp2.onreadystatechange = function() {
                        if (xmlhttp2.readyState == 4) {
                            if (xmlhttp2.status == 200) {
                                var response = JSON.parse(xmlhttp2.response);
                                var apikey = response.result.apiKey;
                                $.ajax({
                                    type: "GET",
                                    url: Drupal.settings.basePath + "?q=blazemeter/set_userkey/" + apikey
                                });
                                $(".close-popup").click();
                                $("#blazemeter-signup").hide();
                                $("#blazemeter-login").hide();
                                $("#edit-meta-userkey").val("user key is stored");
                                $("#edit-meta-userkey-holder").val("user key is stored");
                            }
                        }
                    }
                    var params = 'email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password);
                    xmlhttp2.open("GET", server_url + "/api/latest/user/login?" + params, true);
                    xmlhttp2.setRequestHeader('Content-type', 'application/json');
                    xmlhttp2.send();
                } else {
				    $('.creating-account').hide();
                    var response_error = JSON.parse(xmlhttp.response);
                    var error_text = response_error.error.message;
                    $('.reg-error-message').show();
                    $('.reg-error-message').html('<p>' + error_text + '</p>');
					$('#blazemeter-signup-modal #edit-reg-password').attr('disabled', '');
					$('#blazemeter-signup-modal #edit-reg-email').attr('disabled', '');
					$('#blazemeter-signup-modal #edit-reg-first-name').attr('disabled', '');
					$('#blazemeter-signup-modal #edit-reg-last-name').attr('disabled', '');
					$('#blazemeter-signup-modal #edit-submit-sign-up').attr('disabled', '');
                }
            }
        }
        var createJson = {
            "email": email,
            "password": password,
            "firstName": first,
            "lastName": last
        }
        var json = JSON.stringify(createJson);
        var params = 'email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password);
        xmlhttp.open("GET", server_url + "/api/latest/user/register?" + params, true);
        xmlhttp.setRequestHeader('Content-type', 'application/json');
        xmlhttp.send(json);
		} else {
		if(password.length < 6) {
		$('#blazemeter-signup-modal #edit-reg-password').addClass('input-error-class');
		$('#blazemeter-signup-modal .form-item-reg-password').addClass('red');
		$("input[type='password']").val('');
		$('#blazemeter-signup-modal #edit-reg-password').attr('Placeholder', 'Please enter your password. Min 6 characters');
		}
		if(email.length < 1) {
		$('#blazemeter-signup-modal #edit-reg-email').addClass('input-error-class');
		$('#blazemeter-signup-modal .form-item-reg-email').addClass('red');
		$('#blazemeter-signup-modal #edit-reg-email').attr('Placeholder', 'Please enter your email');
		} else if(!validateEmail(email)) {
		$('#blazemeter-signup-modal #edit-reg-email').addClass('input-error-class');
		$('#blazemeter-signup-modal #edit-reg-email').val('');
		$('#blazemeter-signup-modal .form-item-reg-email').addClass('red');
		$('#blazemeter-signup-modal #edit-reg-email').attr('Placeholder', 'Please enter valid e-mail');
		}
		if(first.length < 1) {
		$('#blazemeter-signup-modal #edit-reg-first-name').addClass('input-error-class');
		$('#blazemeter-signup-modal .form-item-reg-first-name').addClass('red');
		$('#blazemeter-signup-modal #edit-reg-first-name').attr('Placeholder', 'Please enter your first name');
		}
		if(last.length < 1) {
		$('#blazemeter-signup-modal #edit-reg-last-name').addClass('input-error-class');
		$('#blazemeter-signup-modal .form-item-reg-last-name').addClass('red');
		$('#blazemeter-signup-modal #edit-reg-last-name').attr('Placeholder', 'Please enter your last name');
		}
		}
    });

    $("#blazemeter-login-modal #edit-submit-login").click(function() {
	    var password = $('#blazemeter-login-modal #edit-password').val();
        var email = $('#blazemeter-login-modal #edit-email').val();
        var xmlhttp = new XMLHttpRequest();
		if(email.length > 0 && password.length >0 && validateEmail(email)) {
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {
                    var response = JSON.parse(xmlhttp.response);
                    var apikey = response.result.apiKey;
                    $.ajax({
                        type: "GET",
                        url: Drupal.settings.basePath + "?q=blazemeter/set_userkey/" + apikey
                    });
                    $(".close-popup").click();
                    $("#blazemeter-signup").hide();
                    $("#blazemeter-login").hide();
                    $("#edit-meta-userkey").val("user key is stored");
                    $("#edit-meta-userkey-holder").val("user key is stored");
                } else {
                    var response_error = JSON.parse(xmlhttp.response);
                    var error_text = response_error.error.message;
                    $('.error-message').show();
                    $('.error-message').html('<p>' + error_text + '</p>');
                }
            }
        }
        var params = 'email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password);
        xmlhttp.open("GET", server_url + "/api/latest/user/login?" + params, true);
        xmlhttp.setRequestHeader('Content-type', 'application/json');
        xmlhttp.send();
		} else {
		if(password.length < 1){
		$('#blazemeter-login-modal #edit-password').addClass('input-error-class');
		$('#blazemeter-login-modal .form-item-password').addClass('red');
		$('#blazemeter-login-modal #edit-password').attr('Placeholder', 'Please enter your password');
		}
		if(email.length < 1){
		$('#blazemeter-login-modal #edit-email').addClass('input-error-class');
		$('#blazemeter-login-modal .form-item-email').addClass('red');
		$('#blazemeter-login-modal #edit-email').attr('Placeholder', 'Please enter your e-mail');
		}
		else if (!validateEmail(email)) {
		$('#blazemeter-login-modal #edit-email').addClass('input-error-class');
		$('#blazemeter-login-modal #edit-email').val('');
		$('#blazemeter-login-modal .form-item-email').addClass('red');
		$('#blazemeter-login-modal #edit-email').attr('Placeholder', 'Please enter valid e-mail');
		}
		}
    });
	
	function validateEmail(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
	};
	
	function check_userkey() {
		  var userkey = $("#edit-meta-userkey-holder").val();
		  if(userkey != 'user key is stored'){
			  $("#edit-buttons-goto").hide();
			  setTimeout(function() {
        	    check_userkey();
			  }, 1000);
		} else {
			$("#edit-buttons-goto").show();
		}
		}*/

    //Scenario
    $("#blazemeter-scenario .blazemeter-button").click(function() {
        var id = $(this).attr("id");
        if (id != $("#edit-meta-scenario").val()) {
            change_flag = true;
        }
        switch (id) {
            case "blazemeter-scenario-load":
                $("#edit-meta-scenario").val("load");
                break;
            case "blazemeter-scenario-stress":
                $("#edit-meta-scenario").val("stress");
                break;
            case "blazemeter-scenario-extreme":
                $("#edit-meta-scenario").val("extreme stress");
                break;
        }

        $("#blazemeter-scenario .blazemeter-button").removeClass("button-selected");
        $(this).addClass("button-selected");
    });

    if ($("#edit-meta-hasuserkey").val()) {
        $("#edit-meta-userkey-holder").val("user key is stored");
    }

    //Tooltips for scenario description
    $("#blazemeter-scenario-load").tooltip({
        position: "top right",
        relative: true,
        offset: [150, 250]
    });
    $("#blazemeter-scenario-stress").tooltip({
        position: "top right",
        relative: true,
        offset: [150, 192]
    });
    $("#blazemeter-scenario-extreme").tooltip({
        position: "top right",
        relative: true,
        offset: [150, 75]
    });

    $('#edit-meta-userkey-holder').keyup(function() {
        if ($('#password-password').val() != '') {
            $('#edit-meta-userkey').val($('#edit-meta-userkey-holder').val());
        }
    });

    $("#blazemeter-admin-settings-form #edit-buttons-goto").click(function() {
        $("#blazemeter-admin-settings-form .warning").remove();
        if (change_flag) {
            $("#blazemeter-admin-settings-form .submit-buttons").before("<div class='messages warning'>* The changes will not be saved until the Save button is clicked.</div>");
        }
    });

    $('#blazemeter-admin-settings-form').change(function() {
        change_flag = true;
    });
});
