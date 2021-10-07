const userName = document.getElementById("username"),
    password = document.getElementById("password");

const  userNameREGEX = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{1,14}$/, // Username must consist of 1-14 alphanumeric characters with at least one letter and one number.
    passwordREGEX = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/; // Username must consist of at least 6 alphanumeric characters with at least one letter and one number.

function validateLoginForm(e){
    if (!userNameREGEX.test(userName.value)){
        e.preventDefault();
        alert("The username is not registered.");
        userName.select();
        return false;
    }
    else if (!passwordREGEX.test(password.value)){
        e.preventDefault();
        alert("Password does not match.");
        password.select();
        return false;
    }
    
    return true;
}