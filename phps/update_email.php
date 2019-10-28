<?php
    $email = $_POST["new_email"];
       
            $conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9"); 
        
	        if (mysqli_connect_error()) {
                die('Connect Error('. mysqli_connect_errno() .')'. mysqli_connect_error());
	        }
	        else {

	            $sql = "UPDATE User SET Email = '$email' WHERE Username IN (SELECT name FROM ActiveUser);";
    	
                if ($conn->query($sql)) {
		            echo "Email change successful";
                }
                else {
		            echo "Error: ". $sql ."<br />". $conn->error;
		        }
                
                $sql = "UPDATE Administrator SET Email = '$email' WHERE Username IN (SELECT name FROM ActiveUser);";
                
                if ($conn->query($sql)) {
                    echo "Email changed succesful";
                }
                else {
                    echo "Error: ". $sql ."<br />". $conn->error;
                }
                $con->close();
    
            }
?>
