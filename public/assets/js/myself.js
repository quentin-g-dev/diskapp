function setMyUsername() {
    if(prompted = prompt('Nouvel nom d\'utilisateur : ')){
        $.ajax({
            type: "POST",
            url: "/ajax_set_my_username",
            data: {newUserName: (prompted) }
        })
        .done(function(data){
            if (typeof data.status != "undefined" && data.status != "undefined") {
                if (data.status == "Updated") {
                    $("#my_username").load(window.location+" #my_username");
                } else if (data.status == "Known"){
                    alert("'"+prompted+"' n'est pas disponible... ! Merci de choisir un autre nom.");
                    setMyUsername();
                } else if (data.status=="Error") {
                    alert("Une erreur s'est produite, merci de réessayer.");
                }
            }
        });
    }
}   