var attempts = 3; //number of attempts

function validate() {
    var username = document.getElementById("Username").value;
    var password = document.getElementById("Password").value;

    if (username == "admin" && password == "admin" 
		|| username == "birdas1" && password == "bilbo" 
        || username == "storyjs" && password == "bingpot"
        || username == "coatesal" && password == "bob"
        || username == "seagleal" && password == "sswerd") { //TODO Change to pull passwrod from database
        
		alert ("Login sucessful");
        window.open('./admin_pages/home_admin.php'); //Redirect to other page.

        window.close();
        return false;
    }
	else if (username == "user" && password == "user"
            || username == "mohebbim" && password == "thebest") {
		alert ("Login sucessful");
        window.open('./user_pages/home_user.php'); //Redirect to other page.
        window.close();
        return false;
	}
    else {
        attempts--;
        alert("Login failed. You have " + attempts + " remaining.");

        //disable login fields if attempts equals 0.
        if (attempts == 0) {
            document.getElementById("Username").disabled = true;
            document.getElementById("Password").disabled = true;
            document.getElementById("Login").disabled = true;
            return false;
        }
    }
}
