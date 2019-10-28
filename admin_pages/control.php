<html>
	<head>
		<link href="../css/stylesheet2.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
		<title>PiQL Admin Control</title>
	</head>
	<header>
		<div class="container">
			<img src="../assets/logo.png" alt="PiQL" class="logo">

			<nav>
				<ul>
					<li><a href="./home_admin.php">Home</a></li>
					<li><a href="./playlists_admin.php">Playlists</a></li>
					<li><a href="./library_admin.php">Library</a></li>
					<li><a href="./profile_admin.php">Profile</a></li>
					<li><a href="#">Control</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<body>
		<div class="flex-container">
			<div class="flex-child">
                <form method="post" action="../phps/insert_Song.php">
                    Insert Song Information Below<br /><br />
                    <input type="text" name="songName" placeholder="Title"><br />
                    <input type="text" name="songArtist" placeholder="Artist"><br />
                    <input type="text" name="songLength" placeholder="Run Time"><br />
                    <input type="text" name="songAlbum" placeholder="Album"><br />
                    <input class="input-submit" type="submit" value="Insert">
                </form>
            </div>
            <div class="flex-child">
                <form method="post" action="../phps/remove_Song.php">
                    Remove Song By Field Below<br /><br />
                    <input type="text" name="songName" placeholder="Title"> <br />
                    <input type="text" name="songArtist" placeholder="Artist"> <br />
                    <input type="text" name="songAlbum`" placeholder="Album"> <br />
                    <input class="input-submit" type="submit" value="Remove">
                </form>
            </div>
            <div class="flex-child">
                <form method="post" action="../phps/insert_User.php">
                    Insert User Information Below<br /><br />
                    <input type="text" name="id" placeholder="ID"><br />
                    <input type="text" name="username" placeholder="Username"><br />
                    <input type="text" name="password" placeholder="Password"><br />
                    <input type="text" name="email" placeholder="Email"><br />
                    <input type="text" name="birthday" placeholder="Birthday (yyyy-mm-dd)"><br /> 
                    <input class="input-submit" type="submit" value="Insert">
                </form>
            </div>
            <div class="flex-child">
                <form method="post" action="../phps/remove_User.php">
                    Remove User By Username Below<br /><br />
                    <input type="text" name="username" placeholder="Username">
                    <input class="input-submit" type="submit" value="Remove">
                </form>
            </div>
		</div>
	</body>
</html>


<!-- Before I edited the forms with the exception of the placeholders
<html>
    <head>
        <link href="../css/stylesheet2.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <title>PiQL Admin Control</title>
        <style>
            .center-box {
                color: white;
            }
        </style>
    </head>
    <header>
        <div class="container">
            <img src="../assets/logo.png" alt="PiQL" class="logo">

            <nav>
                <ul>
                    <li><a href="./home_admin.php">Home</a></li>
                    <li><a href="./playlists_admin.php">Playlists</a></li>
                    <li><a href="./library_admin.php">Library</a></li>
                    <li><a href="./profile_admin.php">Profile</a></li>
                    <li><a href="#">Control</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <body>
        <div class="center-box">
            
                <form method="post" action="../phps/insert_Song.php">
                    Insert Song Information Below:<br /><br />
                    Title: <input type="text" name="songName" placeholder="Title"><br />
                    Artist: <input type="text" name="songArtist" placeholder="Artist"><br />
                    Runlength: <input type="text" name="songLength" placeholder="Run Time"><br />
                    Album: <input type="text" name="songAlbum" placeholder="Album"><br />
                    <input type="submit" value="Insert">
                </form>
                <br /><br />
                <form method="post" action="../phps/remove_Song.php">
                    Remove Song By Field Below:<br /><br />
                    Title: <input type="text" name="songName" placeholder="Title"> <br />
                    Artist: <input type="text" name="songArtist" placeholder="Artist"> <br />
                    Album: <input type="text" name="songAlbum`" placeholder="Album"> <br />
                    <input type="submit" value="Remove">
                </form>
                <form>
                <br /><br />
                <form method="post" action="../phps/insert_User.php">
                    Insert User Information Below:<br /><br />
                    ID: <input type="text" name="id" placeholder="ID"><br />
                    Username: <input type="text" name="username" placeholder="Username"><br />
                    Password: <input type="text" name="password" placeholder="Password"><br />
                    Email: <input type="text" name="email" placeholder="Email"><br />
                    Birthday (yyyy-mm-dd): <input type="text" name="birthday" placeholder="Birthday"><br /> 
                    <input type="submit" value="Insert">
                </form>
                <br /><br />
                <form method="post" action="../phps/remove_User.php">
                    Remove User By Username Below:<br /><br />
                    Username: <input type="text" name="username" placeholder="Username">
                    <input type="submit" value="Remove">
                </form>
        </div>
    </body>
</html>
 -->
