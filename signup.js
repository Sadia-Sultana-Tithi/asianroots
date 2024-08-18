function signin( ) {

    var Fullname = document.getElementById("name").value;
    var Phone = document.getElementById("phone").value;
    var Email = document.getElementById("email").value;
    var Password1 = document.getElementById("pass1").value;
    var Password2 = document.getElementById("pass2").value;


    if (Fullname.length == 0) {
        alert("please fill out the Fullname");}

        else if(Phone.length!=11){
        alert("Enter valid phone number");
        }
        else if (Password1.length == 0) {
        alert("please fill out the pass");
    } else if (Password1.length < 8) {
        alert("password length must be more than 8 characters");
    } else {

        nonchar();
    }

    function nonchar() {
        var passs = Password1.toString();
        var digit;
        for (var i = 0; i < passs.length; i++) {
            var char = passs.charAt(i)
            if (isNaN(char)) {

                digit = 1;
            }
        }
        if (digit != 1) {
            alert("passwords have to include special characters");
        } else {
            match();
        }

    }


    function match() {
        if (Password1 != Password2) {

            alert("password doesn't match, please try again");


        } else {
            alert("Account created succesfully");
            window.location.href = "login.php";
        }
    }
}