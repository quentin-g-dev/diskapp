function deleteArtist(id) {
    $.ajax({
        type: "POST",
        url: "/ajax_delete_one_artist",
        data: { artist : id }
    })
    .done(function(data){
        if (typeof data.status != "undefined" && data.status != "undefined") {
            if (data.status == "Deleted") {
                setTimeout(function(){ window.location.href='/artists'; }, 10);
            } else if (data.status == "Error"){
                alert("La suppression a échoué : "+data.message);
            }
        }
    });
}

function deleteSelectedArtists() {
    if(!confirm("Suppression imminente : confirmer ?")) {return;}
    for (checkbox of document.querySelectorAll('tbody input[type="checkbox"]')){
        if(checkbox.checked == true) {
            deleteArtist(checkbox.id);
        }
    }
}
