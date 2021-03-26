function addArtistOptions(){
    let newOption = document.createElement('option');
    newOption.value="new";
    newOption.textContent="Nouvel artiste";
    $("#disk_artist").append(newOption);
    document.querySelector("#disk_artist").addEventListener("change", function(){
        if (document.querySelector("#disk_artist").value === "new"){
            newArtist()
        }
    });
}

function newArtist() {
    if(prompted = prompt('Nouvel artiste : ')){
        $.ajax({
            type: "POST",
            url: "/ajax_add_one_artist",
            data: {newArtist: (prompted) }
        })
        .done(function(data){
            if (typeof data.status != "undefined" && data.status != "undefined") {
                if (data.status == "Created") {
                    alert("L'artiste "+(prompted)+" a bien été créé ");
                    $("#disk_artist").load(location.href+" #disk_artist>*",function(){addArtistOptions();document.querySelector('#disk_artist option[value="'+data.message+'"]').selected = true; });
                } else if (data.status == "Known"){
                    alert("L'artiste "+(prompted)+" existe déjà ");
                    $("#disk_artist").load(location.href+" #disk_artist>*", function(){addArtistOptions();document.querySelector('#disk_artist option[value="'+data.message+'"]').selected = true; });      
                }
            }
        });
    }
}   

function addProductionOptions(){
    let newOption = document.createElement('option');
    newOption.value="new";
    newOption.textContent="Nouveau label";
    $("#disk_production").append(newOption);
    document.querySelector("#disk_production").addEventListener("change", function(){
        if (document.querySelector("#disk_production").value === "new"){
            newProduction()
        }
    });
}

function newProduction() {
    if(prompted = prompt('Nouveau label : ')) {
        $.ajax({
            type: "POST",
            url: "/ajax_add_one_production",
            data: {newProduction: (prompted) }
        })
        .done(function(data){
            if (typeof data.status != "undefined" && data.status != "undefined") {
                if (data.status == "Created") {
                    alert("Le label "+(prompted)+" a bien été créé ");
                    $("#disk_production").load(location.href+" #disk_production>*",function(){addProductionOptions();document.querySelector('#disk_production option[value="'+data.message+'"]').selected = true; });
                } else if (data.status == "Known"){
                    alert("Le label "+(prompted)+" existe déjà ");
                    $("#disk_production").load(location.href+" #disk_production>*",function(){addProductionOptions();document.querySelector('#disk_production option[value="'+data.message+'"]').selected = true; }); 
                }
            }
        });
    }
}   

function addStyleOptions(){
    let newOption = document.createElement('option');
    newOption.value="new";
    newOption.textContent="Nouveau style";
    $("#disk_style").append(newOption);
    document.querySelector("#disk_style").addEventListener("change", function(){
        if (document.querySelector("#disk_style").value === "new"){
            newStyle()
        }
    });
}


function newStyle() {
    if (prompted = prompt('Nouveau style : ')) {
        $.ajax({
            type: "POST",
            url: "/ajax_add_one_style",
            data: {newStyle: (prompted) }
        })
        .done(function(data){
            if (typeof data.status != "undefined" && data.status != "undefined") {
                if (data.status == "Created") {
                    alert("Le style "+(prompted)+" a bien été créé ");
                    $("#disk_style").load(location.href+" #disk_style>*",function(){addStyleOptions();document.querySelector('#disk_style option[value="'+data.message+'"]').selected = true; }); 
                } else if (data.status == "Known"){
                    alert("Le style "+(prompted)+" existe déjà ");
                    $("#disk_style").load(location.href+" #disk_style>*",function(){addStyleOptions();document.querySelector('#disk_style option[value="'+data.message+'"]').selected = true; });    
                }
            }
        });
    }
}   


// Execution
addArtistOptions();
addProductionOptions();
addStyleOptions();