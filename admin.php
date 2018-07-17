<!DOCTYPE html>
<html>
<head>
	<title>Admin Control Panel | Safety First</title>

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
		<h1>Admin Control Panel</h1><br>
<?php
			$dbc = mysqli_connect('localhost', 'root', '');
			if ($dbc == true)
			{				
				$dbs = mysqli_select_db($dbc, 'safety_first');
				if ($dbs == true)
				{
					$query = "SELECT * FROM user ORDER BY username ASC";
					if ($r = mysqli_query($dbc, $query))
					{
						echo '<table border = "1" style = "border-collapse: collapse" align = "center">
								  <tr>
									  <th>Username</th>
									  <th>Email</th>
									  <th>Gender</th>
									  <th>Date of Birth</th>
									  <th>Date Joined</th>
								  </tr>';
								  
						while ($row = mysqli_fetch_array($r))
						{
							echo '<tr>
									  <td>' . $row['username'] . '</td>
									  <td>' . $row['email'] . '</td>
									  <td>' . $row['gender'] . '</td>
									  <td>' . $row['dob'] . '</td>
									  <td>' . $row['date_created'] . '</td>
								  </tr>';
						}
						
						echo '</table>
						</div>';
					}
				}
			}
	require("footer.html");
?>

</div>

<?php
	require("script.html");
?>

</body>
</html>