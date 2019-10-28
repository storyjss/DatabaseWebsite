<?php
    $username = filter_input(INPUT_POST, 'Username');
    if (!empty($username)){
        // Create connection
        $conn = new mysqli ("localhost", "birdas1", "900684102", "191_3430_102_t9");
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
        }
        else{
            $sql = "DELETE FROM ActiveUser;";
            $sql2 = "INSERT INTO ActiveUser values ('$username')";
            if ($conn->query($sql)){
                if ($conn->query($sql2)) {
                    echo "Success";
                }
            }
            else{
                    echo "Error: ". $sql ." ". $conn->error;
            }
                $conn->close();
        }
    }
    else{
        echo "Username should not be empty";
        die();
    } 
?>
