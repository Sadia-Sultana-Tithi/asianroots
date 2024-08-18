function validate( ){

    let user=document.getElementById("username").value;
    let pass=document.getElementById("password").value;

    if(user!="admin"&& pass!="user"){

        alert("log in failed");
        window.location.href ="login.php";
    }
    else {
        alert("log in ok");
        window.location.href = "home_old.php";
    }

}
