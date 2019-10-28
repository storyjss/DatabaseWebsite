<?php
    $song = filter_input(INPUT_POST, 'song');
	$playlist = filter_input(INPUT_POST, 'playlist');
    $artist = filter_input(INPUT_POST, 'artist');

    if (!empty($song))
        {
        if(!empty($playlist))
            {
            if(!empty($artist))
                {
					$conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9");
					if (mysqli_connect_error()) {
						die('Connect Error('. mysqli_connect_errno() .')'. mysqli_connect_error());
					}
					else {
					
                    $sql = "SELECT * FROM (SELECT '$playlist', '$song', '$artist') AS tmp WHERE EXISTS (SELECT Song.Name FROM Song, Playlist WHERE Song.Name = Playlist.Song_Name) LIMIT 1;"; 
				
                    $sql2 = "INSERT INTO Playlist (Name, Song_Name, Play_Artist) values ('$playlist', '$song', '$artist')";
                	
                        if ($conn->query($sql2)) {
							echo "Song successfully added to the playlist";
						}
						else {
							echo "Error: ". $sql2 ."<br />". $conn->error;
						}
                    }
                }
            }
        }
?>
