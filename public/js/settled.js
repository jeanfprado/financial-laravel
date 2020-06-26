$(document).ready(function () {
    $('#settled').change(function () {
        if ($(this).is(':checked')) {
            $('#settled_at').removeAttr('disabled');
        } else {
            $('#settled_at').attr('disabled', 'disabled');
        }
    }).change();
});
