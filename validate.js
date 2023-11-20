function validateForm() {
    var firstName = document.getElementById("first_name").value;
    var lastName = document.getElementById("last_name").value;
    var email = document.getElementById("email").value;
    var contactNumber = document.getElementById("contact_number").value;
    var message = document.getElementById("message").value;

    if (firstName === "" || lastName === "" || email === "" || contactNumber === "" || message === "") {
        alert("All fields must be filled out");
        return false;
    }

    var emailPattern = /\S+@\S+\.\S+/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }


    return true; 

}