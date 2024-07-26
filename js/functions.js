var $ = jQuery;
$(document).ready(function () {

  $(".send-btn-form-cust").click(function (e) {
    e.preventDefault();

    // Basic client-side validation
    var fullName = $('input[name="fullName"]').val();
    var email = $('input[type="email"]').val();
    var phoneNumber = $('input[type="number"]').val();
    var message = $("textarea").val();
    if(!fullName) {
      $('input[name="fullName"]').addClass("error");
    
    } else {
        $('input[name="fullName"]').removeClass("error");
    }
      if(!email) {
      $('input[type="email"]').addClass("error");
    
    } else {
        $('input[type="email"]').removeClass("error");
    }
       if(!phoneNumber) {
      $('input[type="number"]').addClass("error");
     
    } else {
        $('input[type="number"]').removeClass("error");
    }
     if(!message) {
      $("textarea").addClass("error");

    } else {
       $("textarea").removeClass("error");
    }
    if (!fullName || !email || !phoneNumber || !message) {
 
       return;
     }

    // Extract dial code from phone input field
    var dialCode = $(".iti__selected-dial-code").text().trim();
    var phoneNumberWithoutDialCode = phoneNumber.substring(dialCode.length);

    // Gather form data
    var checkedServices = [];
    $('input[type="radio"]:checked').each(function () {
      checkedServices.push($(this).next(".label").text());
    });
    var formData = {
      action: "send_email",
      checkedServices: checkedServices,
      service: $(".select-text").text(),
      fullName: fullName,
      email: email,
      phoneNumber: dialCode + phoneNumberWithoutDialCode,
      message: message,
    };

    // Send form data via AJAX
    $.ajax({
      url: wp_var.ajax_url,
      type: "post",
      data: formData,
      success: function (response) {
        if (response === "success") {
          // Handle success response
          // $(".contact-us-container .form-inner").html(
          //   "<p class='form-title'>Email sent successfully</p>"
          // );
          $('body').css('overflow', 'hidden');
          $('#popup-form').css('display', 'flex');
        } else {
          // Handle error response
          // $(".contact-us-container .form-inner").html(
          //   '<p class="form-title">Error: Failed to send email</p>'
          // );
          $('#popup-form').css('display', 'flex');
          $('body').css('overflow', 'hidden');
        }
      },
      error: function (xhr, status, error) {
        // Handle AJAX error
        // $(".contact-us-container .form-inner").html(
        //   '<p class="form-title">Error: ' + error + "</p>"
        // );
        $('body').css('overflow', 'hidden');
        $('#popup-form-error').css('display', 'flex');
      },
    });
  });
});

$(document).ready(function ($) {
  // Attach a click event handler to the button
  $('.popup-btn').click(function () {


    // $('.preloader').css('display', 'flex');
    // window.setTimeout('fadeout();', 2000);
    // function fadeout() {
    //   $('.preloader').delay(2000).fadeOut('slow', function () {
    //     $('.notLoaded').removeClass('notLoaded');
    //   });
    // }


    window.location.reload();


    // Your code to execute when the button is clicked
    $("html, body").animate({ scrollTop: "0" }, 0);
    // $('.popup-form').css('display', 'none');
    // $('body').css('overflow', 'scroll');
    // You can perform other actions here
    // For example, make an AJAX request, show/hide elements, or manipulate the DOM
  });
});




$(document).ready(function ($) {
  // Attach a click event handler to the button
  $('.popup-btn-error').click(function () {
    // Your code to execute when the button is clicked
    // $("html, body").animate({ scrollTop: "0" }, 0);
    window.location.reload();

    $('.popup-form-error').css('display', 'none');
    // $('body').css('overflow', 'scroll');
    // You can perform other actions here
    // For example, make an AJAX request, show/hide elements, or manipulate the DOM
  });
});
