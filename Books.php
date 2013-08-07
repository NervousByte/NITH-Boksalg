<?php 
	$head = ""; 
	parse_str($_SERVER['QUERY_STRING']);
?>
<?php include("masterStart.php"); ?>
<p style = 'display: inline-block;'><?php if ($search != null) echo "Søk: " . $search; else if ($tag != "") echo "Hjem -> " . $tag; else echo "Hjem -> Alle"; ?></p>
<br/>
<?php
	// Create connection
	$con=mysqli_connect("mysql1.000webhost.com","a3823700_chrhen1","books123","a3823700_BookDB");
	  
	// Check connection
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else //Connection is ok
	{
		if ($search != "")
			$result = mysqli_query($con,"select * from Books where Title like '%" . $search . "%';");
		else
			if ($tag != null)
				$result = mysqli_query($con,"select * from Books where Tag like '" . $tag . "';");
			else
				$result = mysqli_query($con,"select * from Books;");
		while ($row = mysqli_fetch_row($result))
		{
			echo "<a href = 'Book.php?id=" . $row[0] . "'>";
			echo "<div style = 'text-align: center; display: inline-block; width: 200px; margin: 40px 0px 50px 70px;'>";
			echo "<img src = '" . $row[4] . "' alt = 'Bilde av boka'><br/>";
			echo $row[1] . "<br/>";
			echo "</div>";
			echo "</a>";
		}
	}
?>

<?php include("masterEnd.php"); ?>