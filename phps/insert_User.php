<html>
<?php
    $id = filter_input(INPUT_POST, 'id');
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'password');
	$email = filter_input(INPUT_POST, 'email');
	$birthday = filter_input(INPUT_POST, 'birthday');

	if (!empty($id)) {
		if (!empty($username)) {
			if (!empty($password)) {
				if (!empty($email)) {
		            if (!empty($birthday)) {    			
					    $conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9");
					    if (mysqli_connect_error()) {
						    die('Connect Error('. mysqli_connect_errno() .')'. mysqli_connect_error());
					    }
					    else {
						    $sql = "INSERT INTO User (ID, Email, Username, Password, Birthday) values ('$id', '$email', '$username', '$password', '$birthday')";
						    
                            if ($conn->query($sql)) {
							    echo "New user succesfully inserted.";
						    }
						    else {
							    echo "Error: ". $sql ."<br />". $conn->error;
						    }
						    $conn->close();
					    }
				    }
                    else {
                        echo "Birthday should not be left empty.";
                        die();
                    }
                }
				else {
					echo "Email should not be left empty.";
					die();
				}
			}
			else {
				echo "Pasword should not be left empty.";
				die();
			}
		}
		else {
			echo "Username should not be left empty.";
			die();
		}
	}
	else {
		echo "ID should not be left empty.";
		die();
	}
?>
</html>
