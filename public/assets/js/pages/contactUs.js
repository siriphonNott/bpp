var $form = $('form.contact-form')
var baseUrl = window.location.origin;
console.log(baseUrl);

var url = {
    googleSheet: 'https://script.google.com/macros/s/AKfycbyyjFANzeWN277w2hYZEV7ywjPaig-UpUoz8bAN-cTUsS4-I_Q/exec',
    lineNoti:`${baseUrl}/contact-us/lineNoti`
}

$.fn.serializeObject = function () {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

let validate = (jsonBody) => {
    const validateList = ['name', 'email', 'message'];
    let header = '<strong>Please fill in all information.</strong><br>';
    let message = '';
    for (let item in jsonBody) {
        let data = jsonBody[item];
        if (data == '' && validateList.includes(item)) {
            message += `Please enter your ${item.capitalize()}. <br />`;
        } else {
            if(item == 'email') {
                if(!validateEmail(data)) {
                    message += `Your email address is invalid. <br />`;
                } 
            }
        }
      
    }
    return (message != '') ? header + message : true;
}
String.prototype.capitalize = function () {
    return this.charAt(0).toUpperCase() + this.slice(1);
}

$('.ajax-message').on('click', function (e) {
    $(this).fadeOut('slow');
});

$('.contact-form').on('submit', function (e) {
    e.preventDefault();
    $submitButton =  $(this).find('input[type="submit"]');
    $inputs =  $(this).find('input');
    $submitButton.prop("disabled", true);
    $submitButton.attr('value', 'SENDING...');
    var jsonBody = $form.serializeObject();
    let checkForm = validate(jsonBody);
    
    if (checkForm === true) {
        var jqxhr = $.ajax({
            url: url.googleSheet,
            method: "GET",
            dataType: "json",
            data: jsonBody
        });

        jsonBody.type = 'contact';
        $.ajax({
            url: url.lineNoti,
            method: "POST",
            dataType: "json",
            data: jsonBody,
            success: function(e) {
                console.log(e);
            }
        });

        jqxhr.done(function (response, textStatus, jqXHR) {
            showMessage('Thank you for contacting to baan puripuri.', 'Send Successfully', true);
        });
        jqxhr.fail(function (jqXHR, textStatus, errorThrown) {
            showMessage('An error occurred. Please try again later.');
        });
        jqxhr.always(function () {
            // Reenable the inputs
            $submitButton.prop("disabled", false);
            $submitButton.attr('value', 'SEND MESSAGE');
        });
    } else {
        showMessage(checkForm);
    }
})

let showMessage = (message, header = 'WARNING', type = false) => {
    $submitButton =  $form.find('input[type="submit"]');
    switch (type) {
        case true:
            $form[0].reset();
            $('.ajax-message').removeClass('alert-danger');
            $('.ajax-message').addClass('alert-success');
            break;
        case false:
            $('.ajax-message').removeClass('alert-success');
            $('.ajax-message').addClass('alert-danger');
            break;
        default:
        break;
    }
    //$('#ajax-message').html(message).fadeIn();
    $('#headerAlerting').html(header);
    $('#alertingContent').html(message);
    $('.tiny.modal').modal({blurring: true}).modal('show');
    $submitButton.prop("disabled", false);
    setTimeout(function(){ $submitButton.attr('value', 'SEND MESSAGE'); }, 500);
}

// Allow numeric without decimal.
$(".allownumericwithoutdecimal").on("keypress keyup blur", function (event) {
    $(this).val($(this).val().replace(/[^\d].+/, ""));
    if ((event.which < 48 || event.which > 57)) {
      event.preventDefault();
    }
  });

  function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }