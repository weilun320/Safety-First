<!DOCTYPE html>
<html>
<head>
	<title>Register | Safety First</title>

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
    <h1 class="w3-text-blue-grey" style="text-align: center; font-size: 100px"><b>Create a new Account</b></h1><br>
    <h2 class="w3-text-blue-grey" style="text-align: center"><b>It's free and always will be.</b></h2><br><br><br>
	<?php
	// if the user clicks the submit button this script will run
			if(isset($_POST['submitted']))
			{
				// gets the user data from the forms
				$password = $_POST['pw'];
				$cfmPassword = $_POST['cfmPw'];
				$name = $_POST['username'];
				$mail = $_POST['email'];
				$y = $_POST['year'];
				$m = $_POST['month'];
				$d = $_POST['day'];
				$g = @$_POST['gender'];
				
				$dbc = mysqli_connect('localhost', 'root', '');
				if ($dbc == true)
				{
					$dbs = mysqli_select_db($dbc, 'safety_first');
					if ($dbs == true)
					{
						$query = "SELECT username, email FROM user";
						if ($r = mysqli_query($dbc, $query))
						{
							$row = mysqli_fetch_array($r);
					
							if (!empty($name) && !empty($password) && !empty($cfmPassword) && !empty($mail) && !empty($y) && !empty($m) && !empty($d) && !empty($g) && $password == $cfmPassword)
							{
								$dobArr = array("$y", "$m", "$d");
								$dob = implode('-', $dobArr);
									
								$query = "INSERT INTO user(user_id, username, email, password, dob, gender, date_created) VALUES (0, '$name', '$mail', '$password', '$dob', '$g', NOW())";
									
								if ($r = mysqli_query($dbc, $query))
								{
									header("Location: signin.php");
									exit();
								}
							}
							else
								echo '<form action="register.php" method="post">
										<p class = "w3-text-red"> * Required</p>
										'//Name input
										. '<p class="w3-text-blue-grey w3-large"><b>Username</b><font color = "red"> *</font></p>
											<p><input class="w3-input w3-padding-16" type="text" name="username" placeholder = "Username" value = "';
											if (!empty($name))
												echo "$name";
											echo '"><br>';
											if (empty($name))
												echo '<font color = "red">Username cannot be blank</font>';
											elseif ($name == $row['username'])
												echo '<font color = "red">Username has already been taken</font>';
											echo '</p><br><br>
										'//Email input
										. '<p class="w3-text-blue-grey w3-large"><b>Email</b><font color = "red"> *</font></p>
											<p><input class="w3-input w3-padding-16" type="text" name="email" placeholder = "Email" value = "';
											if (!empty($mail))
												echo "$mail";
											echo '"><br>';
											if (empty($mail))
												echo '<font color = "red">Email cannot be blank</font>';
											elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL))
												echo '<font color = "red">Invalid email</font>';
											elseif ($mail == $row['email'])
												echo '<font color = "red">Email has already been registed</font>';
											echo '</p><br><br>
										'//Password input
										. '<p class="w3-text-blue-grey w3-large"><b>Password</b><font color = "red"> *</font></p>
											<p><input class="w3-input w3-padding-16" id = "pw" type="password" name="pw" placeholder = "Password" onkeyup="check();"></p>
											<input type="checkbox" onclick="passwordVisibility()"> Show Password<br>';
											if (empty($password))
												echo '<font color = "red">Password cannot be blank</font>';
											echo'<br><br>
										'//Confirm Password input
										. '<p class="w3-text-blue-grey w3-large"><b>Confirm Password</b><font color = "red"> *</font></p>
											<p><input class="w3-input w3-padding-16" id = "cfmPw" type="password" name="cfmPw" placeholder = "Confirm Password" onkeyup="check();">
											<span id = "message"></span><br>';
											if (empty($cfmPassword))
												echo '<font color = "red">Confirm Password cannot be blank</font>';
											echo '</p><br><br><br>
										'//Birthday input
										. '<p class="w3-text-blue-grey w3-large"><b>Date of Birth</b><font color = "red"> *</font></p>
											'//Year input
											. '<p><select class="w3-input w3-padding-16" name="year">
												<option value = "">Year</option>';
												for ($i=2018 ; $i>=1900 ; $i--)
												{
													echo "<option value=\"$i\""; 
													if (!empty($y) && $y == $i)
														echo " selected = \"selected\"";
													echo ">$i</option>";
												}
												echo '</select><br>';
												if (empty($y))
													echo '<font color = "red">Date of Birth(Year) cannot be not selected</font>';
											//Month input
											echo '<select class="w3-input w3-padding-16" name="month">
												<option value = "">Month</option>';
												for ($i=1 ; $i<=12 ;$i++)
												{
													echo "<option value=\"$i\"";
													if (!empty($m) && $m == $i)
														echo " selected = \"selected\"";
													echo ">$i</option>";
												}
												echo '</select><br>';
												if (empty($m))
													echo '<font color = "red">Date of Birth(Month) cannot be not selected</font>';
											//Day input
											echo '<select class="w3-input w3-padding-16" name="day">
												<option value = "">Day</option>';
												for ($i=1 ; $i<=31 ; $i++)
												{
													echo "<option value=\"$i\"";
													if (!empty($d) && $d == $i)
														echo " selected = \"selected\"";
													echo ">$i</option>";
												}
												echo '</select><br>';
												if (empty($d))
													echo '<font color = "red">Date of Birth(Day) cannot be not selected</font>';
												echo '</p><br><br><br>
										'//Gender input
										. '<p class="w3-text-blue-grey w3-large"><b>Gender</b><font color = "red"> *</font></p>
											<input class="w3-text-blue-grey" type="radio" name="gender" value="male"><b> Male</b>&emsp;
											<input class="w3-text-blue-grey" type="radio" name="gender" value="female"><b> Female</b><br>'; 
											if (empty($g))
												echo '<font color = "red">Gender cannot be not selected</font>';
											echo '</p><br><br><br>
										<p><input class="w3-button w3-blue-grey w3-ripple" type="submit" name="submitted" value="REGISTER"></p>
									</form><br><br>
					
									<p class = "w3-text-blue-grey">Already have an account?&emsp;<a href = "signin.php">Sign In</a></p>';
						}
					}
				}
			}
			else 
			{
			?>
				<form action="register.php" method="post">
					<p class = "w3-text-red"> * Required</p>
					<!-- Name input -->
					<p class="w3-text-blue-grey w3-large"><b>Username</b><font color = "red"> *</font></p>
						<p><input class="w3-input w3-padding-16" type="text" name="username" placeholder = "Username"></p><br><br>
					<!-- Email input -->
					<p class="w3-text-blue-grey w3-large"><b>Email</b><font color = "red"> *</font></p>
						<p><input class="w3-input w3-padding-16" type="text" name="email" placeholder = "Email"></p><br><br>
					<!-- Password input -->
					<p class="w3-text-blue-grey w3-large"><b>Password</b><font color = "red"> *</font></p>
						<p><input class="w3-input w3-padding-16" id = "pw" type="password" name="pw" placeholder = "Password" onkeyup="check();"></p>
						<input type="checkbox" onclick="passwordVisibility()"> Show Password<br><br>
					<!-- Confirm Password input -->
					<p class="w3-text-blue-grey w3-large"><b>Confirm Password</b><font color = "red"> *</font></p>
						<p><input class="w3-input w3-padding-16" id = "cfmPw" type="password" name="cfmPw" placeholder = "Confirm Password" onkeyup="check();">
						<span id = "message"></span></p><br><br><br>					
					<!-- Birthday input -->
					<p class="w3-text-blue-grey w3-large"><b>Date of Birth</b><font color = "red"> *</font></p>
						<!-- Year input -->
						<p><select class="w3-input w3-padding-16" name="year">
							<option value = "">Year</option>
							<?php
								for ($i=2018 ; $i>=1900 ; $i--)
								{
									echo "<option value=\"$i\">$i</option>";
								}
							?>
						</select>
						<!-- Month input -->
						<select class="w3-input w3-padding-16" name="month">
							<option value = "">Month</option>
								<?php
									for ($i=1 ; $i<=12 ;$i++)
									{
										echo "<option value=\"$i\">$i</option>";
									}
								?>
						</select>
						<!-- Day input -->
						<select class="w3-input w3-padding-16" name="day">
							<option value = "">Day</option>
							<?php
								for ($i=1 ; $i<=31 ; $i++)
								{
									echo "<option value=\"$i\">$i</option>";
								}
							?>
						</p>
						</select><br><br><br>
					<!-- Gender input -->
					<p class="w3-text-blue-grey w3-large"><b>Gender</b><font color = "red"> *</font></p>
						<input class="w3-text-blue-grey" type="radio" name="gender" value="male"><b> Male</b>&emsp;
						<input class="w3-text-blue-grey" type="radio" name="gender" value="female"><b> Female</b></p><br><br><br>
					<p><input class="w3-button w3-blue-grey w3-ripple" type="submit" name="submitted" value="REGISTER"></p>
				</form><br><br>
				
				<p class = "w3-text-blue-grey">Already have an account?&emsp;<a href = "signin.php">Sign In</a></p>
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