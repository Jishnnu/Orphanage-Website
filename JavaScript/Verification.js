let index = 0;
image_slideshow();

function image_slideshow() {
    var i;
    var images = document.getElementsByClassName("img_list");
    for (i = 0; i < images.length; i++) {
        images[i].style.display = "none";
    }
    index++;
    if (index > images.length) { index = 1 }
    images[index - 1].style.display = "block";
    setTimeout(image_slideshow, 6000);
}

function verify_login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "" || password == "") {
        alert("Mandatory Fields Empty");
        return false;
    }
    return true;
}

function verify_contact() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;

    if (name == "" || email == "" || subject == "") {
        alert("Mandatory Fields Empty");
        return false;
    }
    return true;
}

function verify_volunteer() {
    var regex_numeric = /^[0-9]+$/;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var age = document.getElementById("age").value;
    var gender = document.getElementById("gender").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;

    if (name == "" || email == "" || subject == "" || gender == "" || phone == "" || address == "" ||
        (age < 18 || age > 110 && !regex_numeric.test(age))) {
        alert("Invalid entries. Please try again");
        return false;
    }
    return true;
}


function verify_payment() {
    var regex_numeric = /^[0-9]+$/;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var amount = document.getElementById("amount").value;

    if (name == "" || email == "" || !(regex_numeric.test(amount) || amount < 0)) {
        alert("Invalid entries. Please try again");
        return false;
    }
    return true;
}

function feedback_ajax() {
    var request = new XMLHttpRequest();
    request.open("GET", "/Orphanage/PHP/Database/DisplayAdminFeedback.php");
    request.send();
    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            document.getElementById("operations").style.display = 'none';
            document.getElementById("ajax_div").innerHTML = request.responseText;
        }
    };
}

function volunteer_ajax() {
    var request = new XMLHttpRequest();
    request.open("GET", "/Orphanage/PHP/Database/DisplayAdminVolunteer.php");
    request.send();
    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            document.getElementById("operations").style.display = 'none';
            document.getElementById("ajax_div").innerHTML = request.responseText;
        }
    };
}

function donation_ajax() {
    var request = new XMLHttpRequest();
    request.open("GET", "/Orphanage/PHP/Database/DisplayAdminDonation.php");
    request.send();
    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            document.getElementById("operations").style.display = 'none';
            document.getElementById("ajax_div").innerHTML = request.responseText;
        }
    };
}

function back() {
    window.location = "/Orphanage/HTML/Orphanage.html";
}