(function ($) {
    Drupal.behaviors.LoginValidation = {
        attach: function (context, settings) {
            // Ensure settings exist before accessing
            var msg = (Drupal.settings.LoginValidation) ? Drupal.settings.LoginValidation.required_msg : 'This field is required.';
            // Select the form by ID user-login.
            $('#user-login', context).once('LoginValidation', function () {
                $(this).validate({
                    rules: {
                        name: {required: true}, pass: {required: true}
                    }, messages: {
                        name: {required: msg}, pass: {required: msg}
                    }, errorClass: "text-danger", highlight: function (element) {
                        $(element).closest('.form-item').addClass('has-error');
                    }, unhighlight: function (element) {
                        $(element).closest('.form-item').removeClass('has-error');
                    }
                });
            });
        }
    };
})(jQuery);