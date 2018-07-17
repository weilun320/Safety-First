
<!DOCTYPE html>
<html>
<head>
	<title> Contact Form </title>
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
    <h1>Contact Us</h1><br>
	<?php
	// if the user clicks the submit button this script will run
			if(isset($_POST['submitted']))
			{
				// getting user name and feedback
				$name = $_POST['ID'];
				$fb = $_POST['feedback'];
				// validation script
				if (empty($name))
				{
					echo 'Please enter your name!!<br>
					Click <a href = "contact.php">HERE</a> to go back<br><br>';
					
				}
				
				if (empty($fb))
				{
					echo 'Please enter your feedback<br>
					Click <a href = "contact.php">HERE</a> to go back';
				}
			
				else 
				{
					header("Location: home.php");
					exit();
				}
			}
		
			else 
			{
			?>
				<form action="contact.php" method='post'> 
				<!-- Name input -->
				<p class="w3-text-blue-grey w3-large"><b>Name: </b><font color = "red">*</font></p>
				<p><input class="w3-input w3-padding-16" type="text" name="ID" placeholder = "Name"></p>
				<!-- Feedback input -->
				<p class="w3-text-blue-grey w3-large"><b>Feedback: </b><font color = "red">*</font></p>
				<p><input class="w3-input w3-padding-16" type="text" name="feedback" placeholder = "Feedback"></p><br><br><br>
				
				<!-- satisfied input -->
				<h2>How satisfied were you with the website?</h2>
				<table>
					<tr>
						<th></th>
						<th>Bad</th>
						<th>Fine</th>
						<th>Good</th>
						<th>Very Good</th>
					</tr>
					<tr>
						<td>Safety Types</td>
						<?php
						// php for loop
						for ($i=1;$i<=4;$i++)
							{
									echo "<td><input type = \"radio\" name = \"flower\" value = \"$i\"></td>";
							}
							?>
					</tr>
					<tr>
					
						<td>Navigation</td>
						<?php
						// php for loop
						for ($i=1;$i<=4;$i++)
							{
									echo "<td><input type = \"radio\" name = \"navigation\" value = \"$i\"></td>";
							}
							?>

					</tr>
					<tr>
						<td>Footer</td>
						<?php
						// php for loop
						for ($i=1;$i<=4;$i++)
							{
									echo "<td><input type = \"radio\" name = \"footer\" value = \"$i\"></td>";
							}
							?>

					</tr>
					<tr>
						<td>Overall design</td>
					<?php
					// php for loop
						for ($i=1;$i<=4;$i++)
							{
									echo "<td><input type = \"radio\" name = \"overall\" value = \"$i\"></td>";
							}
							?>

					</tr>
					<tr>
						<td>Buttons</td>
					<?php
					// php for loop
						for ($i=1;$i<=4;$i++)
							{
									echo "<td><input type = \"radio\" name = \"buttons\" value = \"$i\"></td>";
							}
							?>
					</tr>
				</table>
				<br><br><br>
				<input class = "w3-button w3-blue-grey w3-ripple" type="submit" name="submitted" value="Submit feedback">
				</form>
	</div>
		<?php
		   }
		?>
 <?php
	require("footer.html");
?>

</div>
<?php	
	require("script.html");
?>

</body>
</html>