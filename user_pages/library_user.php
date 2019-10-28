<!DOCTYPE html>

<html>
	<head>
		<link href="../css/stylesheet2.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
		<title>PiQL Library</title>
    </head>
	<header>
		<div class="container">
			<img src="../assets/logo.png" alt="PiQL" class="logo">

			<nav>
				<ul>
					<li><a href="./home_user.php">Home</a></li>
					<li><a href="./playlists_user.php">Playlists</a></li>
					<li><a href="#">Library</a></li>
					<li><a href="./profile_user.php">Profile</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<body>
		<div class="flex-container">
			<div class="flex-child">
				<button id="user-make-playlist-button" class="collapsible">Create Playlist</button>
				<div class="content">
  					<div class="insertbox-SongToPlaylist"> 
	                <form action="../phps/addSongToPlaylist.php" method="post" >
	                    Enter Song <input type="text" name="song"><br />
	                    Enter Your Playlist <input type="text" name="playlist"><br />
	                    Enter Artist <input type="text" name="artist"><br />
	                    <input class="input-submit" type="submit" name="insert" value="Create">
	                </form>   
            		</div>
				</div>	
            </div>
			<div class="flex-child">
				<div class="table-header">
                	<h1>Songs</h1>
                </div>
			</div>
			<div class="flex-child">	
	            <div class="checkbox-background">
					<div class="checkbox-table">
	                <table>
						<tr>
							<th>Name</th>
							<th>Artist</th>
							<th>Runtime</th>
							<th>Album</th>
						</tr>
						<?php
							$conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9") or die("Error connecting to the server.");
							
							$sql = "SELECT Name, Artist, Runtime, Album FROM Song";
							mysqli_query($conn, $sql) or die("Error querying database");
							$result = mysqli_query($conn, $sql);

							if ($result -> num_rows > 0) {
								while ($row = $result -> fetch_assoc()) {
									echo "<tr><td>". $row["Name"] ."</td><td>". $row["Artist"] ."</td><td>". $row["Runtime"] ."</td><td>". $row["Album"] ."</td></tr>";
								}
							}
							else {
								echo "0 results";
							}

							$conn -> close();
						?>
					</table>
					</div>
				</div>
			</div>
		</div>
		<script src="../Collapse.js"></script>
	</body>
</html>
