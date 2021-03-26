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