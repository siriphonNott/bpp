var $form = $('form.register-form')
var baseUrl = window.location.origin;
console.log(baseUrl);

var url = {
    googleSheet: 'https://script.google.com/macros/s/AKfycbxEvPot2bIFH0-mR0qBoR6qxbkS9bBF-dRq54_roEBKDtpbgG5x/exec',
    lineNoti:`${baseUrl}/contact-us/lineNoti`
}

//Init
$('.ui.selection.dropdown').dropdown();
$('#appointmentDate').calendar({
    monthFirst: false,
    type: 'date',
    formatter: {
      date: function (date, settings) {
        if (!date) return '';
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        
        return ("0" + day).slice(-2) + '/' + ("0" + month).slice(-2) + '/' + ("0" + year).slice(-2);
      }
    }
});
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

// Allow numeric without decimal.
$(".allownumericwithoutdecimal").on("keypress keyup blur", function (event) {
    $(this).val($(this).val().replace(/[^\d].+/, ""));
    if ((event.which < 48 || event.which > 57)) {
      event.preventDefault();
    }
});

let validate = (jsonBody) => {
    const validateList = ['firstname', 'lastname', 'tel'];
    let header = '<strong>Please fill in all information.</strong><br>';
    let message = '';
    for (let item in jsonBody) {
        let data = jsonBody[item];
        if (data == '' && validateList.includes(item)) {
            message += `Please enter your ${item.capitalize()}. <br />`;
        } else {
            if(item == 'email' && validateList.includes(item)) {
                if(!validateEmail(data)) {
                    message += `Your email address is invalid. <br />`;
                } 
            } else if(item == 'tel') {
                if(data.length < 9) {
                    message += `Your tel must have at least 9 numbers. <br />`;
                }
            } else if(item == 'chanel') {
                if(data == 'อื่นๆ (โปรดระบุเหตุผล)') {
                    let reason = $('#reason').val();
                    if(reason == '') {
                        message += `Please enter your reason for chanel. <br />`;
                    } else {
                        jsonBody[item] = `${data} : ${reason}` ;
                    }
                }
            }
        }
      
    }
    return (message != '') ? header + message : jsonBody;
}
String.prototype.capitalize = function () {
    return this.charAt(0).toUpperCase() + this.slice(1);
}

$('.ajax-message').on('click', function (e) {
    $(this).fadeOut('slow');
});

$('#chanel').on('change', function(){
    if(this.value == 'อื่นๆ (โปรดระบุเหตุผล)') {
        $('.chanel-reason').fadeIn();
    } else {
        $('.chanel-reason').fadeOut();
    }
});

$('.register-form').on('submit', function (e) {
    e.preventDefault();
    $submitButton =  $(this).find('input[type="submit"]');
    $inputs =  $(this).find('input');
    // $submitButton.prop("disabled", true);
    $submitButton.attr('value', 'กำลังบันทึก...');
    var jsonBody = $form.serializeObject();
    let appoDate = _getDate($('#appointmentDate').calendar('get date'));
    jsonBody.appointmentDate = appoDate;

    let checkForm = validate(jsonBody);

    if (typeof checkForm === 'object') {
        jsonBody = checkForm;
        console.log('Type: '+typeof checkForm );
        console.log(jsonBody );
        
        var jqxhr = $.ajax({
            url: url.googleSheet,
            method: "GET",
            dataType: "json",
            data: jsonBody
        });
        
        jsonBody.type = 'register';
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
            showMessage('Thank you for registering for visiting the project.', 'Register Successfully', true);
        });
        jqxhr.fail(function (jqXHR, textStatus, errorThrown) {
            showMessage('An error occurred. Please try again later.');
        });
        jqxhr.always(function () {
            // Reenable the inputs
            $submitButton.prop("disabled", false);
            $submitButton.attr('value', 'ลงทะเบียน');
        }); 
        
    } else {
        showMessage(checkForm);
    }
})

let _getDate = (_date) => {
    if(_date == '' || _date == undefined || _date == null) {
        return '';
    } else {
        var date = new Date(_date);
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
    }
    
    return ("0" + day).slice(-2) + '/' + ("0" + month).slice(-2) + '/' + ("0" + year).slice(-2);
}
let showMessage = (message, header = 'WARNING', type = false) => {
    $submitButton =  $form.find('input[type="submit"]');
    switch (type) {
        case true:
            $form[0].reset();
            $('.ui.selection.dropdown').dropdown('clear');
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
    setTimeout(function(){ $submitButton.attr('value', 'ลงทะเบียน'); }, 500);
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