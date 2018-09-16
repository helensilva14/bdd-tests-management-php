$(document).ready(function () {
    // animations initialization
    new WOW().init();
});

function GetProject(id) {
    $.get("ajax/projects/get-project.php", {
            project: id
        },
        function (data, status) {
            var project = JSON.parse(data);
            $("#id").val(project.idprojeto);
            $("#edit_name").val(project.nome);
            $("#edit_description").val(project.descricao);
        }
    );
    
    // open modal popup
    $("#update_project_modal").modal("show");
}

function DeleteProject(id) {
    var conf = confirm("Você realmente deseja apagar este projeto?");
    if (conf == true) {
        $.post("ajax/projects/delete-project.php", {
                project: id
            },
            function (data, status) {
                location.reload();
            }
        );
    }
}