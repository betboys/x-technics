var $ = jQuery;
$(document).ready(function () {
  $(".send-btn-form-cust").click(function (e) {
    e.preventDefault();
    var checkedServices = [];
    $('input[type="checkbox"]:checked').each(function () {
      checkedServices.push($(this).next(".label").text());
    });
    var formData = {
      action: "send_email",
      checkedServices: checkedServices,
      service: $(".select-text").text(),
      fullName: $('input[name="fullName"]').val(),
      email: $('input[type="email"]').val(),
      phoneNumber:
        $(".iti__selected-dial-code").text() + $('input[type="number"]').val(),
      message: $("textarea").val(),
    };

    $.ajax({
      url: wp_var.ajax_url,
      type: "post",
      data: formData,
      success: function (response) {
        // Handle success response
        $(".contact-us-container .form-inner").html(
          "<p class='form-title'>Email sent successfully</p>"
        );
      },
      error: function (error) {
        $(".contact-us-container .form-inner").html(
          '<p class="form-title">Error:' + error + "</p>"
        );
      },
    });
  });
});
