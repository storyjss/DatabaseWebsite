<html>
<body>

<?php
        include("connection9.php");

     $songName = $_POST["songName"];
     $songArtist = $_POST["songArtist"];
     $songLength = $_POST["songLength"];
     $songAlbum = $_POST["songAlbum"];

    $sql = "INSERT INTO Song values ('".$songName."', '".$songArtist."', ".$songLength.", '".$songAlbum."')";

    if ($mysqli_conn->query($sql) === TRUE) {
            echo "New record created successfully";
    } else if ($songName || $songArtist || $songLength || $songAlbum) {
        echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
    }

    $mysqli_conn->close();
?>

<br>
Sort by: <a href="sort.php?sort=songName">Title </a> OR <a href="sort.php?sort=songArtist">Artist</a> OR <a href="sort.php?sort=songLength">Runtime</a> OR <a href="sort.php?sort=songAlbum">Album</a>

</body>
</html>

