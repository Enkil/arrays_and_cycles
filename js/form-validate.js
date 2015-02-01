$(document).ready(function() {
    $('#orderForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    }
                }
            }
        }
    });

    // Login button click handler
    $('#orderBtn').on('click', function() {
        bootbox
            .dialog({
                title: 'Login',
                message: $('#orderForm'),
                show: false // We will show it manually later
            })
            .on('shown.bs.modal', function() {
                $('#orderForm')
                    .show()                             // Show the login form
                    .formValidation('resetForm', true); // Reset form
            })
            .on('hide.bs.modal', function(e) {
                // Bootbox will remove the modal (including the body which contains the login form)
                // after hiding the modal
                // Therefor, we need to backup the form
                $('#orderForm').hide().appendTo('body');
            })
            .modal('show');
    });
});
