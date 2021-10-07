const title = document.getElementById("feedback-title"),
    body = document.getElementById("feedback-body"),
    email = document.getElementById("feedback-email");

const emailREGEX = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Email must contain "@" at most once



function validateFeedback(e){

    if (title.value == "" || title.value == " "){
        e.preventDefault();
        alert("Please enter a title of feedback.");
        title.select();
        return false;
    }
    else if (body.value == "" || body.value == " "){
        e.preventDefault();
        alert("Please enter your inquiry.");
        body.select();
        return false;
    }
    else if (!emailREGEX.test(email.value)){
        e.preventDefault();
        alert("Invalid email address.");
        emailR.select();
        return false;
    }

    return true;
}