// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='purchases']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        firstname: "required",
        email: {
          required: true,
          email: true
        },
        email2: {
            required: true,
            email: true,
            equalTo: "#email",
        },
        address1: "required",
        city: "required",
        county: "required",
        postcode: "required",
        country: "required",
      },
      // Specify validation error messages
      messages: {
        firstname: "Please enter your first name",
        email: "Please enter a valid email address",
        email2: "Emails do not match!",
        address1: "Please enter an address",
        city: "Please enter a city",
        county: "Please enter a county",
        postcode: "Please enter a postcode",
        country: "Please enter a country"
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });