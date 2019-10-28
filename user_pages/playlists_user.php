<html>
	<head>
		<link href="../css/stylesheet2.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
		<title>PiQL Playlists</title>
	</head>
	<header>
		<div class="container">
			<img src="../assets/logo.png" alt="PiQL" class="logo">

			<nav>
				<ul>
					<li><a href="./home_user.php">Home</a></li>
					<li><a href="#">Playlists</a></li>
					<li><a href="./library_user.php">Library</a></li>
					<li><a href="./profile_user.php">Profile</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<body>
		<div class="flex-container"> 
			<div class="flex-child">
				<button id="user-remove-playlist-button" class="collapsible">Remove Song From Playlist</button>
				<div class="content">
  					<div class="insertbox-SongToPlaylist"> 
	                <form action="../phps/removeSongFromPlaylist.php" method="post" >
	                    Enter Your Playlist <input type="text" name="playlist"><br />
	                    Enter the Song to Remove <input type="text" name="song"><br />
                        <input class="input-submit" type="submit" name="insert" value="Remove">
	                </form>   
            		</div>
				</div>	
            </div>
            <div class="flex-child">
				<button id="user-expand-playlist-button" class="collapsible">Expand Playlist</button>
				<div class="content">
  					<!--<div class="insertbox-SongToPlaylist"> 
	                <form action="../phps/addSongToPlaylist.php" method="post" >
	                    Enter Your Playlist <input type="text" name="playlist"><br />
	                    <input class="input-submit" type="submit" name="insert" value="Expand">
	                </form>   
            		</div>-->
					<div class="checkbox-table">
				        <table>
							<tr>
							    <th>Playlist Name</th>
                                <th>Song Name</th>
                                <th>Artist Name</th>
						    </tr>
							<?php
								$conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9") or die("Error connecting to the server.");
										
								$sql = "SELECT Name, Song_Name, Play_Artist FROM Playlist";
								mysqli_query($conn, $sql) or die("Error querying database");
							    $result = mysqli_query($conn, $sql);

								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo "<tr><td>". $row["Name"] ."</td><td>". $row["Song_Name"] ."</td><td>". $row["Play_Artist"] ."</td></tr>";
									}
								}
								else {
									echo "0 results";
								}

								$conn->close();
							?>
						</table>
					</div>
				</div>	
            </div>
			<div class="flex-child">
				<div class="table-header">
                	<h1>Playlists</h1>
                </div>
			</div>
			<div class="flex-child">
				<div class="side-tables">
					<div class="side-table">	
			            <div class="checkbox-background">
							<div  class="checkbox-table">
				                <table>
									<tr>
										<th>Playlist Name</th>
									</tr>
									<?php
										$conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9") or die("Error connecting to the server.");
										
										$sql = "SELECT DISTINCT Name FROM Playlist";
										mysqli_query($conn, $sql) or die("Error querying database");
										$result = mysqli_query($conn, $sql);

										if ($result->num_rows > 0) {
											while ($row = $result->fetch_assoc()) {
												echo "<tr><td>". $row["Name"] ."</td></tr>";
											}
										}
										else {
											echo "0 results";
										}

										$conn->close();
									?>
								</table>
							</div>
					<!--	</div>
							<div class="side-table">
								<table>
										<tr>
											<th>Playlist</th>
										</tr>
								</table>
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
		<script src="../Collapse.js"></script>
	</body>
</html>
