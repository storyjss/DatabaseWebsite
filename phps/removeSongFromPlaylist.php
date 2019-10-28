<?php
    $song = filter_input(INPUT_POST, 'song');
	$playlist = filter_input(INPUT_POST, 'playlist');
    //$artist = filter_input(INPUT_POST, 'artist');

    if (!empty($song))
        {
        if(!empty($playlist))
            {
            
               
					$conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9");
					if (mysqli_connect_error()) {
						die('Connect Error('. mysqli_connect_errno() .')'. mysqli_connect_error());
					}
					else {
					$sql = "DELETE FROM Playlist WHERE Playlist.Name = '$playlist' AND Playlist.Song_Name = '$song'";
					
                        if ($conn->query($sql)) {
							echo "Song successfully removed from the playlist";
						}
						else {
							echo "Error: ". $sql ."<br />". $conn->error;
						}
                    }
               
            }
        }
?>
