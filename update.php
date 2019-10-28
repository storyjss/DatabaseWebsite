<html>
<body>

<form action="update.php" method="get">
Name: <input type="text" name="songName">
<input type="Submit" value="Search">
</form>

<?php 
      	include("connection9.php");
      
	$searchkey = $_GET["songName"];

	$sql = "SELECT * FROM Song where student_name='".$searchkey."'";
	$result = $mysqli_conn->query($sql);

	if ($result->num_rows > 0) {
	    
	    $row = $result->fetch_assoc();
	   
	    $songName = $row["songName"];
	    $songArtist = $row["songArtist"];\
	    $songLength = $row["songLength"];
	    $songAlbum = $row["songAlbum"];

	}
	
	$mysqli_conn->close();
?> 

<form action="update_action.php" method="get">
Title: <input type="text" name="songName" value="<?php echo $songName ?>"><br>
Artist: <input type="text" name="songArtist" value="<?php echo $songArtist ?>"><br>
RunLength: <input type="text" name="songLength" value="<?php echo $songLength ?>">
Album: <input type="text" name="songAlbum" value="<?php echo $songAlbum ?>"><br>


<input type="Submit" value="Update">
</form>


</body>
</html>
