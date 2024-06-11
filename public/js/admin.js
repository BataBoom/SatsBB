$(document).ready(function () {

    $(".btn-delete-user").click(function (e) {

        ConfirmModal.show('Confirm', 'Do you really want to delete this user', $(this));
        return false;
    });
    $(".btn-delete-site").click(function (e) {

        ConfirmModal.show('Confirm', 'Do you really want to delete this site', $(this));
        return false;
    });

    $(".btn-action-confirm").click(function () {
        ConfirmModal.close();
        if (ConfirmModal.clicked_element != null) {
            window.location.href = ConfirmModal.clicked_element.attr('href');
        }
    });

    $("#users-edit #admin").click(function() {
        $("#users-edit #permissions").css('display', $(this).prop('checked') ? 'none' : '');
    })


});

class ConfirmModal {
    static show(title, message) {
        var cl = arguments[2] != undefined ? arguments[2] : null;
        $("#confirmModal .modal-title").html(title);
        $("#confirmModal .modal-body").html(message);
        $("#confirmModal").modal('show');
        ConfirmModal.clicked_element = cl;
    }


    static close() {
        $("#confirmModal").modal('hide');
    }
}

ConfirmModal.clicked_element = null;