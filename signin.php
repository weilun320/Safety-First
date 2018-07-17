<!DOCTYPE html>
<html>
<head>
	<title>Sign In | Safety First</title>

<meta charset="UTF-8">

<?php
	require("stylesheet.html");
?>
</head>
<body onload = "startTime()">
<?php
	require("header.php");
?>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px">
  <div class="w3-container w3-padding-64" id="order">
    <h1>Sign In</h1><br><br>
	<?php
	// if the user clicks the submit button this script will run
			if(isset($_POST['submitted']))
			{
				// getting user id
				$username = $_POST['id'];
				$password = $_POST['pass'];
				
				if ($username == "admin" && $password == "hengonghuat")
				{
					header("Location: admin.php");
					exit();
				}
				else
				{
					$dbc = mysqli_connect('localhost', 'root', '');
					if ($dbc == true)
					{
						$dbs = mysqli_select_db($dbc, 'safety_first');
						if ($dbs == true)
						{
							if (!empty($username) && !empty($password))
							{
								$query = "SELECT username, password FROM user";
								if ($r = mysqli_query($dbc, $query))
								{
									$row = mysqli_fetch_array($r);
									echo '<form action="signin.php" method="post">
											'//Username Input
											. '<p class="w3-text-blue-grey w3-large"><b>Username</b></p>
													<p><input class="w3-input w3-padding-16" type="text" name="id" placeholder = "Username" ';
													if (!empty($username))
														echo "value = $username";
													echo "><br>";
													if (empty($username))
														echo '<font color = "red">Username is required!</font>';
													elseif ($username != $row['username'])
														echo '<font color = "red">Username doesn\'t exist!</font>';
													echo '</p><br>
											'//Password Input
											. '<p class="w3-text-blue-grey w3-large"><b>Password</b></p>
													<p><input class="w3-input w3-padding-16" id = "pw" type="password" name="pass" placeholder = "Password"><br>
													<input type="checkbox" onclick="passwordVisibility()"> Show Password<br>';
													if (empty($password))
														echo '<font color = "red">Password is required!</font>';
													elseif ($password != $row['password'])
														echo '<font color = "red">Incorrect Password!</font>';
													echo '</p><br><br>
												<input class="w3-button w3-blue-grey w3-ripple" type="submit" name="submitted" value="Sign In">
											</form><br><br>
						
											<a href = "register.php" class = "w3-text-blue-grey">Don\'t have an account? Create one</a>';
											
									if ($username == $row['username'] && $password == $row['password'])
									{
										session_start();
										$_SESSION['username'] = $username;
										$_SESSION['password'] = $password;
										
										header('Location: home.php');
										exit();
									}
								}
							}
							else
								echo '<form action="signin.php" method="post">
										'//Username Input
										. '<p class="w3-text-blue-grey w3-large"><b>Username</b></p>
												<p><input class="w3-input w3-padding-16" type="text" name="id" placeholder = "Username" ';
												if (!empty($username))
													echo "value = $username";
												echo "><br>";
												if (empty($username))
													echo '<font color = "red">Username is required!</font>';
												echo '</p><br>
										'//Password Input
										. '<p class="w3-text-blue-grey w3-large"><b>Password</b></p>
												<p><input class="w3-input w3-padding-16" id = "pw" type="password" name="pass" placeholder = "Password"><br>
												<input type="checkbox" onclick="passwordVisibility()"> Show Password<br>';
												if (empty($password))
													echo '<font color = "red">Password is required!</font>';
												echo '</p><br><br>
											<input class="w3-button w3-blue-grey w3-ripple" type="submit" name="submitted" value="Sign In">
										</form><br><br>
						
										<a href = "register.php" class = "w3-text-blue-grey">Don\'t have an account? Create one</a>';
						}
					}
				}
			}
			else 
			{
			?>
				<form action="signin.php" method="post">
					<!-- Username Input -->
					<p class="w3-text-blue-grey w3-large"><b>Username</b></p>
						<p><input class="w3-input w3-padding-16" type="text" name="id" placeholder = "Username"></p>
					<!-- Password Input -->
					<p class="w3-text-blue-grey w3-large"><b>Password</b></p>
						<p><input class="w3-input w3-padding-16" id = "pw" type="password" name="pass" placeholder = "Password"><br>
						<input type="checkbox" onclick="passwordVisibility()"> Show Password</p><br><br>
					<input class="w3-button w3-blue-grey w3-ripple" type="submit" name="submitted" value="Sign In">
				</form><br><br>
				
				<a href = "register.php" class = "w3-text-blue-grey">Don't have an account? Create one</a>
	</div>
		<?php
			}
			
			require("footer.html");
		?>
</div>

<?php
	require("script.html");
?>

</body>
</html>