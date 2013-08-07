<?php 
	$head = ""; 
	parse_str($_SERVER['QUERY_STRING']);
?>
<?php include("masterStart.php"); ?>
<p style = 'display: inline-block;'><?php if ($search != null) echo "Søk: " . $search; else if ($tag != "") echo "Hjem -> " . $tag; else echo "Hjem -> Alle"; ?></p>
<br/>
<?php
	// Create connection
	$con=mysqli_connect("127.0.0.1","chrhen12","bilen313","BookDB");
	  
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
			echo "<div style = 'text-align: center; display: inline-block; margin: 40px 70px 50px 70px;'>";
			echo "<img src = '" . $row[4] . "' alt = 'Bilde av boka'><br/>";
			echo $row[1] . "<br/>";
			echo "</div>";
			echo "</a>";
		}
	}
?>

<?php include("masterEnd.php"); ?>