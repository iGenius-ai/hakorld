passwordValid = false;

$(document).ready(function () {
  $.validator.addMethod(
    "passwordComplexity", function (value, element) {
      return passwordValid;
    },
    "Password must contain at least 8 characters consisting of upper/lower case letters and numbers"
  );

  $("#newaccount").validate({
    rules: {
      password: "passwordComplexity",
      password_again: {
        equalTo: "#password"
      },
      email_again: {
        equalTo: "#email"
      }
    }
  });

  $("#password").complexify({strengthScaleFactor: 0.5}, function (valid, complexity) {
    if (valid) {
      passwordValid = true;
    } else {
      passwordValid = false;
    }
  });

  $("#submitBtn").click(function () {
    $("#newaccount").submit();
    return false;
  });
});