<html>
	<head>
		<link href="../css/stylesheet2.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
		<title>PiQL Profile</title>
		<style>
			.information_panel h3, .information_panel {
				color: black;
                display: inline;
			}

            .shower {
                display: inline;
                font-size: 1.17em;
            }
		</style>
	</head>
	<header>
		<div class="container">
			<img src="../assets/logo.png" alt="PiQL" class="logo">

			<nav>
				<ul>
					<li><a href="./home_user.php">Home</a></li>
					<li><a href="./playlists_user.php">Playlists</a></li>
					<li><a href="./library_user.php">Library</a></li>
					<li><a href="#">Profile</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<body>
		<div class="flex-container">
        <div class="flex-child">
			<div class="information_panel">
				<div class="username">	
					<h3>Username:</h3>
				    <div class="shower">
                    <?php
                        $conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9");

                        if ($conn->connect_error) {
                            die("Connection failed: ". $conn->connect_error);
                        }
                        $sql = "SELECT name FROM ActiveUser";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo $row["name"];
                        }
                        $conn->close();
                    ?>
                    </div>
                </div>	
				<br /><br />
				<div class="password_change">
					<h3>Password:</h3>
                    <div class="shower">
                    <?php
                        $conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9");

                        if ($conn->connect_error) {
                            die("Connection failed: ". $conn->connect_error);
                        }
                        $sql = "SELECT Password FROM User WHERE Username IN (SELECT name FROM ActiveUser)";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo $row["Password"];
                        }
                        $conn->close();
                    ?>
                    </div>
					<!-- <form action="../phps/update_password.php" method="post">
						Change your password 
						<input type="text" name="new_password">
						<input class="input-submit" type="submit" name="update_password_button" value="Change">
					</form> -->
				</div>
				<br />
                <br />
				<div class="show_email">
					<h3>Email Address:</h3> 
                    <div class="shower">
                    <?php
                        $conn = mysqli_connect("localhost", "birdas1", "900684102", "191_3430_102_t9");

                        if ($conn->connect_error) {
                            die("Connection failed: ". $conn->connect_error);
                        }
                        $sql = "SELECT Email FROM User WHERE Username IN (SELECT name FROM ActiveUser)";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo $row["Email"];
                        }
                        $conn->close();
                    ?>
                    </div>
                    <form action="../phps/update_email.php" method="post" target="_self">
                        Change your email address
                        <input type="text" name="new_email">
                        <input class="input-submit" type="submit" name="update_email_button" value="Change">
                    </form>
				</div>
			</div>
		</div>
        </div>
	</body>
</html>
