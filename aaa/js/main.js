$(document).ready(function() {
    readposts();
});

function readposts() {
    var readpost = 'readpost';
    $.ajax({
        type: "POST",
        url: "indexshow.php",
        data: { readpost: readpost },
        cache: false,
        contentType: false,
        processData: false,
        success: function(data, status) {
            $("#admin_cont").html(data)
            console.log($("#admin_cont").html(data))
        }
    })
}


function deleteBook(delete_id) {
    var conf = confirm("Are u sure?");
    if (conf === true) {
        $.ajax({
            type: "POST",
            url: "deleteMyBook.php",
            data: { delete_id: delete_id },
            success: function(data, status) {
                readposts();
            }
        })
    }
}

$(document).ready(function() {
    $('.form').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {

                readposts();
            }
        })


    })


});