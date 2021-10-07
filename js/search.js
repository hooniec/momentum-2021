const keyword = document.getElementById("keyword");

function validateSearchCarForm(e){

    if (keyword.value == "" || keyword.value == " "){
        e.preventDefault();
        alert("Please enter keyword.");
        keyword.select();
        return false;
    }

    return true;
}

