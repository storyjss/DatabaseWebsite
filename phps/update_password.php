<?php
    $password = filter_input(INPUT_POST, 'new_password');

    if (!isEmpty($password)) {
        $conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9"); 
    }    
	if (mysqli_connect_error) {
        die('Connect Error: '. mysqli_connect_error);
	}
	else {
	    $sql = "UPDATE User SET Password = '$password' WHERE Username IN (SELECT name FROM ActiveUser); UPDATE Administrator SET Password = '$password' WHERE Username IN (SELECT name FROM ActiveUser);";
					
        if ($conn->query($sql)) {
		    echo "Password change successful";
        }
        else {
		    echo "Error: ". $sql ."<br />". $conn->error;
		}
        $conn->close();
    }
?>
