function deleteArtist(id) {
    if(!confirm("Attention : confirmer ?")) {return;}
    $.ajax({
        type: "POST",
        url: "/ajax_delete_one_artist",
        data: { artist : id }
    })
    .done(function(data){
        if (typeof data.status != "undefined" && data.status != "undefined") {
            if (data.status == "Deleted") {
                $("#artistsTable").load(location.href+" #artistsTable>*");
            } else if (data.status == "Error"){
                alert("La suppression a échoué : "+data.message);
            }
        }
    });
}

function deleteSelectedArtists() {

}