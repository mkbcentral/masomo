window.$(document).ready(function () {
    toastr.options = {
    "positionClass": "toast-bottom-right",
    "progressBar": true
    };
    window.addEventListener('data-added', function (event) {
        toastr.success(event.detail.message, 'Validation');
        $('#addSectorModal').modal('hide');
        $('#addOptionModal').modal('hide');
        $('#addClassePrimaryModal').modal('hide');
        $('#addClasseSecondaryModal').modal('hide');
        $('#addClasseInfantModal').modal('hide');

    });
    window.addEventListener('data-updated', function (event) {
        toastr.info(event.detail.message, 'Validation');
        $('#editSectorModal').modal('hide');
        $('#editOptionModal').modal('hide');
        $('#editClassePrimaryModal').modal('hide');
        $('#editClasseSecondaryModal').modal('hide');
        $('#editClasseInfantModal').modal('hide');
    });

});


