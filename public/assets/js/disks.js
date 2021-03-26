function deleteDisk(id) {
    $.ajax({
        type: "POST",
        url: "/ajax_delete_one_disk",
        data: { disk : id }
    })
    .done(function(data){
        if (typeof data.status != "undefined" && data.status != "undefined") {
            if (data.status == "Deleted") {
                setTimeout(function(){ window.location.href='/disks'; }, 50);
                    } else if (data.status == "Error"){
                alert("La suppression a échoué : "+data.message);
            }
        }
    });
}

function deleteSelectedDisks() {
    if(!confirm("Suppression imminente : confirmer ?")) {return;}
    for (checkbox of document.querySelectorAll('tbody input[type="checkbox"]')){
        if(checkbox.checked == true) {
            deleteDisk(checkbox.id);
        }
    }
}

