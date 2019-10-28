<html>
<body>

<?php 
      	include("connection9.php");
      
	$sort = $_GET["sort"];

	$sql = "SELECT * FROM Song order by ".$sort;
	$result = $mysqli_conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "Title: " . $row["songName"]. Artist: " . $row["songArtist"]. " Time: " . $row["songLength"]. Album: " . $row["songAlbum"]. "<br>";
	    }
	}
	
	$mysqli_conn->close();
?> 

Sort by: <a href="sort.php?sort=songName">Title</a> OR <a href="sort.php?sort=songArtist">Artist</a> OR <a href="sort.php?sort=songLength">Time</a> OR <a href="sort.php?sort=songAlbum">Album</a>

</body>
</html>
