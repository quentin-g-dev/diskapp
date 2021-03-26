function deleteDisk(id) {
    if(!confirm("Suppression imminente : confirmer ?")) {return;}
    $.ajax({
        type: "POST",
        url: "/ajax_delete_one_disk",
        data: { disk : id }
    })
    .done(function(data){
        if (typeof data.status != "undefined" && data.status != "undefined") {
            if (data.status == "Deleted") {
                $("#disksTable").load(location.href+" #disksTable>*");
            } else if (data.status == "Error"){
                alert("La suppression a échoué : "+data.message);
            }
        }
    });
}

function deleteSelectedDisks() {

}