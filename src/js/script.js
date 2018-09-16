// Add Record
function addRecord() {
    // get values
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var email = $("#email").val();

    // Add record
    $.post("ajax/add-record.php", {
        first_name: first_name,
        last_name: last_name,
        email: email
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#first_name").val("");
        $("#last_name").val("");
        $("#email").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/read-records.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("ajax/delete-user.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function DeleteUser() {
    var id = $("#hidden_user_id").val();
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("ajax/delete-user.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.get("ajax/read-user-details.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            
            console.log(data);
            
            $("#update_first_name").val(user.nome);
            $("#update_last_name").val(user.sobrenome);
            $("#update_email").val(user.email);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var first_name = $("#update_first_name").val();
    var last_name = $("#update_last_name").val();
    var email = $("#update_email").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/update-user-details.php", {
            id: id,
            first_name: first_name,
            last_name: last_name,
            email: email
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            //readRecords();
            
            var table = $('#tbUsuarios').DataTable();
            table.ajax.reload();
        }
    );
}

$.extend( $.fn.dataTable.defaults, {
    responsive: true
} );

$(document).ready(function () {
    // var table = $('#tbUsuarios').DataTable( {
    //     "processing": true,
    //     "serverSide": true,
    //     "ajax": "ajax/load-users-datatable.php",
    //     "columns": [
    //         { data: 0 },
    //         { data: 1 },
    //         { data: 2 },
    //         {
    //             data: null,
    //             className: "center",
    //             defaultContent: '<button id="edit" class="btn btn-warning">Update</button>'
    //         },
    //     ]
    // } );
    
    // $('#tbUsuarios').on( 'click', 'button', function () {
    //     var data = table.row( $(this).parents('tr') ).data();
    //     GetUserDetails(data[3]);
    // } );
    
    // READ recods on page load
    readRecords(); // calling function

});