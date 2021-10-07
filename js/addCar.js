const maker = document.getElementById("maker"),
    model = document.getElementById("model"),
    year = document.getElementById("year"),
    mileage = document.getElementById("mileage"),
    price = document.getElementById("price"),
    loc = document.getElementById("location"),
    body = document.getElementById("body");

const makerREGEX = /^[a-zA-Z]+[ ]*[a-z]+$/i, // Only alphabetical letters and space
    modelREGEX = /^[a-zA-Z0-9]+$/, // Only alphanumeric characters
    yearREGEX = /^[0-9]{4}$/, // 4 digits only
    mileageREGEX = /^[0-9]{1,6}$/, // Numbers maximum 6 digits
    priceREGEX = /^[0-9]+$/,  // Numbers only
    bodyREGEX = /^[a-zA-Z]+$/i; // Only alphabetical letters


function validateAddCarForm(e){

    if (!makerREGEX.test(maker.value)){
        e.preventDefault();
        alert("Invalid maker name.\nOnly alphabetical letters and space accepted.");
        maker.select();
        return false;
    }
    else if (!modelREGEX.test(model.value)){
        e.preventDefault();
        alert("Invalid model name.\nOnly alphanumeric characters accepted.");
        model.select();
        return false;
    }
    else if (!yearREGEX.test(year.value)){
        e.preventDefault();
        alert("Invalid year.\nPlease enter four digits only.");
        year.select();
        return false;
    }
    else if (!mileageREGEX.test(mileage.value)){
        e.preventDefault();
        alert("Invalid mileage.\nPlease enter at most 6 digits only.");
        mileage.select();
        return false;
    }
    else if (!priceREGEX.test(price.value)){
        e.preventDefault();
        alert("Invalid price.\nOnly numbers accepted.");
        price.select();
        return false;
    }
    else if (!makerREGEX.test(loc.value)){
        e.preventDefault();
        alert("Invalid location.\nOnly alphabetical letters and space accepted.");
        loc.select();
        return false;
    }
    else if(!bodyREGEX.test(body.value)){
        e.preventDefault();
        alert("Invalid body type.\nOnly alphabetical letters accepted.");
        body.select();
        return false;
    }
    else
    {
        alert("New car is added successfully");
        return true;
    }
}