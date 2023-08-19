$(function(){
    $(".add").on("click", function() {
        $(".modal-title").html("Add new Phonebook");
        $(".modal-body").load("./pages/addPhonebook.php");
        $(".modal-footer").html(
            "<div class='d-flex justify-content-between w-100'>" +
                '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>' + 
                '<button type="button" class="btn btn-success" id="addPhonebook">Save changes</button>' +
            "</div>"
        );
        $(".modal").modal("show");
    })
})