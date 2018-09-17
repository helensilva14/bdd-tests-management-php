function FetchStories(id)
{
    $.ajax({
        type: 'get',
        url: 'ajax/stories/get-stories-options.php',
        data: {
            project: id
        },
        success: function (response) {
           $("#select_story").html(response); 
        }
    });
}