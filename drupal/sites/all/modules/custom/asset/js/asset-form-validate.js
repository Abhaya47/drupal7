(function ($, Drupal) {
    Drupal.behaviors.assetFormValidation = {
        attach: function (context, settings) {
            $('#asset-form', context).once('assetFormValidation').validate({
                rules: {
                    'name': {
                        required: true,
                        minlength: 3
                    },
                    'ssn': {
                        required: true,
                        minlength: 9,
                    },
                    'asset_type': {
                        required: true
                    },
                    'asset_condition': {
                        required: true
                    }
                },
                messages: {
                    'name': {
                        required: "Asset Name is required",
                        minlength: "Asset Name must be at least 3 characters"
                    },
                    'ssn': {
                        required: "SSN is required",
                        digits: "SSN must be numeric",
                        minlength: "SSN must be exactly 9 digits",
                        maxlength: "SSN must be exactly 9 digits"
                    },
                    'asset_type': {
                        required: "Please select an Asset Type"
                    },
                    'asset_condition': {
                        required: "Please select an Asset Condition"
                    }
                },
                errorElement: 'div',
                errorClass: 'error-message'
            });
        }
    };
})(jQuery, Drupal);