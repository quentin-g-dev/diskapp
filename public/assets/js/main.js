function enableGroupDelete() {
    for (checkbox of document.querySelectorAll('tbody input[type="checkbox"]')){
        if (checkbox.checked == true){
            console.log('yes')
            return document.querySelector('#deleteSelected').classList.remove('disabled');
        } 
    }
    return document.querySelector('#deleteSelected').classList.add('disabled');   
}

function toggleGroupSelect(bool) {
    if(bool==true){
        for (checkbox of document.querySelectorAll('tbody input[type="checkbox"]')){
            checkbox.checked= true;
        }
    } else {
        for (checkbox of document.querySelectorAll('tbody input[type="checkbox"]')){
            checkbox.checked= false;
        }
    }
}

function hideMenu(){
    document.getElementById("navburger").removeEventListener('click', hideMenu);
    document.getElementById("navburger").addEventListener('click', displayMenu);
    document.getElementById('navmenu').classList.replace('d-flex', 'd-none'); 
}

function displayMenu() {
    document.getElementById("navburger").removeEventListener('click', displayMenu);
    document.getElementById("navburger").addEventListener('click', hideMenu);
    document.getElementById('navmenu').classList.replace('d-none', 'd-flex'); 
}


