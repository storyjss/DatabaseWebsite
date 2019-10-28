<html>
<?php
    //$id = filter_input(INPUT_POST, 'id');
	$username = filter_input(INPUT_POST, 'username');
	//$password = filter_input(INPUT_POST, 'password');
	//$email = filter_input(INPUT_POST, 'email');
	//$birthday = filter_input(INPUT_POST, 'birthday');

	    if (!empty($username)) {
					    $conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9");
					    if (mysqli_connect_error()) {
						    die('Connect Error('. mysqli_connect_errno() .')'. mysqli_connect_error());
					    }
					    else {
						    $sql = "DELETE FROM User WHERE Username = '$username'";
						    if ($conn->query($sql)) {
							    echo "User succesfully removed.";
						    }
						    else {
							    echo "Error: ". $sql ."<br />". $conn->error;
						    }
						    $conn->close();
					    }
        }
		else {
			echo "Username should not be left empty.";
			die();
		}

	
?>
</html>
