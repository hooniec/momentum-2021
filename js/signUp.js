const firstName = document.getElementById("fn"),
    lastName = document.getElementById("ln"),
    address = document.getElementById("address"),
    phone = document.getElementById("phone"),
    email = document.getElementById("email"),
    userName = document.getElementById("un"),
    password = document.getElementById("pw");

const nameREGEX = /^[a-zA-Z]+[ ]*[a-z]+$/i, // Only alphabetical letters and space
    phoneREGEX = /^((03|04|06|07|09)\d{7})|((020|021|022|025|027|028|029)\d{6,8})|((0508|0800|0900)\d{5,8})$/, // The formatting of NZ phone numbers 
    emailREGEX = /^[^\s@]+@[^\s@]+\.[^\s@]+$/, // Email must contain "@" at most once
    userNameREGEX = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,14}$/, // Username must consist of 6-14 alphanumeric characters with at least one letter and one number.
    passwordREGEX = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/; // Username must consist of at least 6 alphanumeric characters with at least one letter and one number.

function validateSignForm(e){
    
    if (!nameREGEX.test(firstName.value)){
        e.preventDefault();
        alert("Invalid first name.\nOnly alphabetical letters and space accepted.");
        firstName.select();
        return false;
    }
    else if (!nameREGEX.test(lastName.value)){
        e.preventDefault();
        alert("Invalid last name.\nOnly alphabetical letters and space accepted.");
        lastName.select();
        return false;      
    }
    else if (!phoneREGEX.test(phone.value)){
        e.preventDefault();
        alert("Invalid New Zealand phone number.");
        phone.select();
        return false;
    }
    else if (!emailREGEX.test(email.value)){
        e.preventDefault();
        alert("Invalid email address.");
        email.select();
        return false;
    }
    else if (!userNameREGEX.test(userName.value)){
        e.preventDefault();
        alert("Invalid username.\nMust consist of 6-14 alphanumeric characters with at least one letter and one number.");
        userName.select();
        return false;
    }
    else if (!passwordREGEX.test(password.value)){
        e.preventDefault();
        alert("Invalid password format.\nMust consist at least 6 alphanumeric characters with at least one letter and one number.");
        password.select();
        return false;
    }
    
    return true;
}

