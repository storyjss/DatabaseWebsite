<html>
<?php
	$songName = filter_input(INPUT_POST, 'songName');
	$songArtist = filter_input(INPUT_POST, 'songArtist');
	$songAlbum = filter_input(INPUT_POST, 'songAlbum');

	    if (!empty($songName) && empty($songArtist) && empty($songAlbum)) {
	
					$conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9");
					if (mysqli_connect_error()) {
						die('Connect Error('. mysqli_connect_errno() .')'. mysqli_connect_error());
					}
					else {
						
                               $sql = "DELETE\n"
                                 . "FROM Song\n"
                                 . "WHERE Name = \"$songName\"";

                        if ($conn->query($sql)) {
							echo "Song removed successfully.";
						}
						else {
							echo "Error: ". $sql ."<br />". $conn->error;
						}

                        
                        $sql = "DELETE\n"
                                 . "FROM Playlist\n"
                                 . "WHERE Song_Name = \"$songName\"";

                        if ($conn->query($sql)) {
							echo "All Songs from Artist and Artist removed successfully.";
						}
						else {
							echo "Error: ". $sql ."<br />". $conn->error;
						}


						$conn->close();
					}
		    }
        else if(empty($songName) && !empty($songArtist) && empty($songAlbum)) {
           
		            $conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9");
					if (mysqli_connect_error()) {
						die('Connect Error('. mysqli_connect_errno() .')'. mysqli_connect_error());
					}
					else {
						
                               $sql = "DELETE\n"
                                 . "FROM Song\n"
                                 . "WHERE Artist = \"$songArtist\"";

                        if ($conn->query($sql)) {
							echo "All Songs from Artist and Artist removed successfully.";
						}
						else {
							echo "Error: ". $sql ."<br />". $conn->error;
						}



                        $sql = "DELETE\n"
                                 . "FROM Playlist\n"
                                 . "WHERE Play_Artist = \"$songArtist\"";

                        if ($conn->query($sql)) {
							echo "All Songs from Artist and Artist removed successfully.";
						}
						else {
							echo "Error: ". $sql ."<br />". $conn->error;
						}



                        $sql = "DELETE\n"
                                 . "FROM Artist\n"
                                 . "WHERE Name = \"$songArtist\"";

                        if ($conn->query($sql)) {
							echo "All Songs from Artist and Artist removed successfully.";
						}
						else {
							echo "Error: ". $sql ."<br />". $conn->error;
						}


                        $sql = "DELETE\n"
                                 . "FROM Album\n"
                                 . "WHERE Artist_name = \"$songArtist\"";

                        if ($conn->query($sql)) {
							echo "All Songs from Artist and Artist removed successfully.";
						}
						else {
							echo "Error: ". $sql ."<br />". $conn->error;
						}

						$conn->close();
					}
	        }
        else if(empty($songName) && empty($songArtist) && !empty($songAlbum)) {
       
		            $conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9");
					if (mysqli_connect_error()) {
						die('Connect Error('. mysqli_connect_errno() .')'. mysqli_connect_error());
					}
					else {
						
                               $sql = "DELETE\n"
                                 . "FROM Song\n"
                                 . "WHERE Album = \"$songAlbum\"";

                        						if ($conn->query($sql)) {
							echo "All Songs from ". $songAlbum ." were removed successfully.";
						}
						else {
							echo "Error: ". $sql ."<br />". $conn->error;
						}


                        $sql = "DELETE\n"
                                 . "FROM Album\n"
                                 . "WHERE Title = \"$songAlbum\"";

                        if ($conn->query($sql)) {
							echo "All Songs from Artist and Artist removed successfully.";
						}
						else {
							echo "Error: ". $sql ."<br />". $conn->error;
						}


						$conn->close();
					}
	        }    
	
?>
</html>
