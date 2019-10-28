<html>
<?php
	$songName = filter_input(INPUT_POST, 'songName');
	$songArtist = filter_input(INPUT_POST, 'songArtist');
	$songLength = filter_input(INPUT_POST, 'songLength');
	$songAlbum = filter_input(INPUT_POST, 'songAlbum');

	if (!empty($songName)) {
		if (!empty($songArtist)) {
			if (!empty($songLength)) {
				if (!empty($songAlbum)) {
					
					$conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9");
					if (mysqli_connect_error()) {
						die('Connect Error('. mysqli_connect_errno() .')'. mysqli_connect_error());
					}
					else {
						    $sql = "INSERT INTO Song (Name, Artist, Runtime, Album) values ('$songName', '$songArtist', '$songLength', '$songAlbum')";
					
                        if ($conn->query($sql)) {
							echo "New song succesfully inserted.";
						}
						else {
							echo "Error: ". $sql ."<br />". $conn->error;
						}
							
                        
                        $sql = "INSERT INTO Artist (Name) values ('$songArtist')";

                        if ($conn->query($sql)) {
							echo "New song succesfully inserted.";
						}
						else {
							echo "Error: ". $sql ."<br />". $conn->error;
						}
					

                        $sql = "INSERT INTO Album (Artist_name, Title) values ('$songArtist', '$songAlbum')";
                        
                        if ($conn->query($sql)) {
							echo "New song succesfully inserted.";
						}
						else {
							echo "Error: ". $sql ."<br />". $conn->error;
						}
						$conn->close();
					}
				}
				else {
					echo "Album should not be left empty.";
					die();
				}
			}
			else {
				echo "Runlength should not be left empty.";
				die();
			}
		}
		else {
			echo "Artist should not be left empty.";
			die();
		}
	}
	else {
		echo "Title should not be left empty.";
		die();
	}
?>
</html>
