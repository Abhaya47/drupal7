(function ($, Drupal) {
    Drupal.behaviors.organizationFormValidate = {
        attach: function (context, settings) {
            // Ensure this only runs once per form
            // The form id should be in hyphon not in underscore
            $('form[id^="organization-form"]', context).once('organization-validate').each(function () {
                $(this).validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 2
                        },
                        user: {
                            required: true,
                            minlength: 2
                        },
                        address: {
                            required: true,
                            minlength: 3
                        },
                        phone: {
                            required: true,
                            digits: true,
                            minlength: 7
                        },
                        status: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: "Please enter the organization name.",
                            minlength: "Organization name must be at least 2 characters."
                        },
                        user: {
                            required: "Please enter a manager username.",
                            minlength: "Username must be at least 2 characters."
                        },
                        address: {
                            required: "Please enter the address.",
                            minlength: "Address must be at least 3 characters."
                        },
                        phone: {
                            required: "Please enter a phone number.",
                            digits: "Phone number must contain only digits.",
                            minlength: "Phone number must be at least 7 digits."
                        },
                        status: {
                            required: "Please select the status."
                        }
                    },
                    errorElement: 'div',
                    errorClass: 'form-error',
                    highlight: function(element, errorClass) {
                        $(element).addClass('error');
                    },
                    unhighlight: function(element, errorClass) {
                        $(element).removeClass('error');
                    }
                });
            });
        }
    };
})(jQuery, Drupal);