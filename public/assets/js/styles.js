function deleteStyle(id) {
    if(!confirm("Suppression imminente : confirmer ?")) {return;}
    $.ajax({
        type: "POST",
        url: "/ajax_delete_one_style",
        data: { style : id }
    })
    .done(function(data){
        if (typeof data.status != "undefined" && data.status != "undefined") {
            if (data.status == "Deleted") {
                $("#stylesTable").load(location.href+" #stylesTable>*");
            } else if (data.status == "Error"){
                alert("La suppression a échoué : "+data.message);
            }
        }
    });
}

function deleteSelectedStyles() {

}