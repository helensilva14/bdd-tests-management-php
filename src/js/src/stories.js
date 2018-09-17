$(document).ready(function () {
    // animations initialization
    new WOW().init();
});

function GetStory(id) {
    $.get("ajax/stories/get-story.php", {
            story: id
        },
        function (data, status) {
            var story = JSON.parse(data);
            $("#id").val(story.idstory);
            $("#edit_description").val(story.description);
        }
    );
    
    // open modal popup
    $("#update_story_modal").modal("show");
}

function DeleteStory(id) {
    var conf = confirm("Você realmente deseja apagar esta estória?");
    if (conf == true) {
        $.post("ajax/stories/delete-story.php", {
                story: id
            },
            function (data, status) {
                location.reload();
            }
        );
    }
}