function deleteProduction(id) {
    if(!confirm("Suppression imminente : confirmer ?")) {return;}
    $.ajax({
        type: "POST",
        url: "/ajax_delete_one_production",
        data: { production : id }
    })
    .done(function(data){
        if (typeof data.status != "undefined" && data.status != "undefined") {
            if (data.status == "Deleted") {
                $("#productionsTable").load(location.href+" #productionsTable>*");
            } else if (data.status == "Error"){
                alert("La suppression a échoué : "+data.message);
            }
        }
    });
}

function deleteSelectedProductions() {

}