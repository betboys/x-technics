var $ = jQuery;
$(document).ready(function () {

  $(".send-btn-form-cust").click(function (e) {
    e.preventDefault();
    // Basic client-side validation
    var fullName = $('input[name="fullName"]').val();
    var radioInputs = $('input[type="radio"]:checked').val();
    var email = $('input[type="email"]').val();
    var phoneNumber = $('input[type="number"]').val();
    var message = $("textarea").val();
    if (!radioInputs) {
      $('.radio-required').addClass("error");
    }
    else {
      $('.radio-required').removeClass("error");
    }
    if (!fullName) {
      $('input[name="fullName"]').addClass("error");

    } else {
      $('input[name="fullName"]').removeClass("error");
    }
    if (!email) {
      $('input[type="email"]').addClass("error");

    } else {
      $('input[type="email"]').removeClass("error");
    }
    if (!phoneNumber) {
      $('input[type="number"]').addClass("error");
      $('.phone-input').addClass("error");

    } else {
      $('input[type="number"]').removeClass("error");
      $('.phone-input').removeClass("error");
    }
    if (!message) {
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
          $('body').css('overflow', 'hidden');
          $('#popup-form').css('display', 'flex');
        } else {
          $('#popup-form').css('display', 'flex');
          $('body').css('overflow', 'hidden');
        }
      },
      // error: function (xhr, status, error) {
      //   $('body').css('overflow', 'hidden');
      //   $('#popup-form-error').css('display', 'flex');
      // },
    });
  });
});
$(document).ready(function ($) {
  $('.popup-btn').click(function () {
    window.location.reload();
    $("html, body").animate({ scrollTop: "0" }, 0);
  });
});
// $(document).ready(function ($) {
//   $('.popup-btn-error').click(function () {
//     $('.popup-form-error').css('display', 'none');
//     $('body').css('overflow', 'scroll');
//   });
// });