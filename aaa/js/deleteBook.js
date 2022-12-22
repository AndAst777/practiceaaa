
function deleteAjax(id) {
        if(confirm("Hi,sir")){
            $.ajax({
                type: "POST",
                url: "delete.php",
                data: {delete_id: id},
                success: function(data){
                    if($("#del"+ id).hide('slow')){
                        console.log('ok')
                        console.log($("#del"+ id))
                    }
                    else{
                        console.log('ne ok') 
                    }
                    console.log("click ", id)
                }
            })
        }
}
