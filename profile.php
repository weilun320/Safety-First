<?php
	session_start();
	if (isset($_SESSION['username']) && isset($_SESSION['password']))
	{
		$user = $_SESSION['username'];
		$pass = $_SESSION['password'];
		
		$dbc = mysqli_connect('localhost', 'root', '');
		if ($dbc == true)
		{
			$dbs = mysqli_select_db($dbc, 'safety_first');
			if ($dbs == true)
			{
				$query = "SELECT user_id, username, email, password, gender, dob, date_created FROM user WHERE username='$user'";
				if ($r = mysqli_query($dbc, $query))
				{
					$row = mysqli_fetch_array($r);
					if ($user == $row['username'] && $pass == $row['password'])
					{
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo '$user'; ?> | Safety First</title>

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
    <h1 class="w3-text-blue-grey" style="text-align: center; font-size: 50px"><b>Profile</b></h1><br>
	<img src = "images/
	<?php
	if ($row['gender'] == "male")
		echo 'male.jpg';
	elseif ($row['gender'] == "female")
		echo 'female.jpg';
	?>
	" class = "profile" alt = "<?php $row['username']; ?>"><br><br>
	<p class="w3-text-blue-grey w3-large">Username</p>&emsp;&emsp;
	<p class = "w3-text-grey"><b><?php echo $row['username']; ?></b></p><br><br>
	<p class = "w3-text-blue-grey w3-large">Email</p>&emsp;&emsp;
	<p class = "w3-text-grey"><b><?php echo $row['email']; ?></b></p><br><br>
	<p class = "w3-text-blue-grey w3-large">Password</p>&emsp;&emsp;
	<p class = "w3-text-grey"><b><?php for ($i = 1; $i <= 8; $i++) echo "*"; ?></b></p><br><br>
	<p class = "w3-text-blue-grey w3-large">Gender</p>&emsp;&emsp;
	<p class = "w3-text-grey"><b><?php echo $row['gender']; ?></b></p><br><br>
	<p class = "w3-text-blue-grey w3-large">Date of Birth</p>&emsp;&emsp;
	<p class = "w3-text-grey"><b><?php echo $row['dob']; ?></b></p><br><br>
	<p class = "w3-text-blue-grey w3-large">Date Joined</p>&emsp;&emsp;
	<p class = "w3-text-grey"><b><?php echo $row['date_created']; ?></b></p><br><br>
	<form action = "signout.php" method = "post">
		<input class="w3-button w3-red w3-ripple" type = "submit" name = "signout" value = "SIGN OUT">
	</form>
	
  </div>
<?php
	require("footer.html");
?>

</div>

<?php
	require("script.html");
?>

</body>
</html>

<?php
					}
				}
			}
		}
	}
	else
	{
		header('Location: signin.php');
		exit();
	}
?>

