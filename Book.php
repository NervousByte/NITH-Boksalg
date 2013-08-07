<?php $head = 
"#BuyWrap { display : inline-block; }
#BuyOver { display: none; }
#BuyWrap:hover > #BuyUp { display: none; }
#BuyWrap:hover > #BuyOver { display: inline; }"; ?>
<?php include("masterStart.php"); ?>
<br/>
<?php 
	parse_str($_SERVER['QUERY_STRING']);
	  // Create connection
	  $con=mysqli_connect("mysql1.000webhost.com","a3823700_chrhen1","books123","a3823700_BookDB");
	  
	  // Check connection
	  if (mysqli_connect_errno($con))
	  {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  else //Connection is ok
	  {
	  	$result = mysqli_query($con,"select * from Books where BookID = '" . $id . "';");
	  	if ($row = mysqli_fetch_row($result))
	  	{
	  		$title = $row[1];
	  		$dec = $row[2];
	  		$tag = $row[3];
	  		$imglink = $row[4];
	  		$price = $row[5];
	  	}
	  }
?>

<div style = 'margin: 40px; float: left;'>
	<img src = '<?php echo $imglink; ?>' alt = "Bilde av boka">
	<br/><br/>
	<p style = 'display: inline;'>Tag: </p>
	<p style = 'color: gray; display: inline;'><?php echo $tag ?></p>
</div>
<div style = ''>
	<h1><?php echo $title ?></h1>
	<br/>
	<p><?php echo $dec ?></p>
	
	<p>Price: <?php echo $price; ?></p>
	
	<div id = "BuyWrap">
		<img id = "BuyUp" width = 140px src="img/Buy.png" alt = "Kjøp">
		<a id = "BuyOver" href="" onClick="document.getElementById('MessageBox').style.display = 'block';document.getElementById('MessageBoxBackground').style.display = 'block';return false;">
			<img width = 140px src="img/BuyOver.png" alt = "Kjøp">
		</a>
	</div>
</div>

<?php include("masterEnd.php"); ?>

<a id = "MessageBoxBackground" style = "display: none; position: absolute; top: 0px; right: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);" href = "" onclick = "document.getElementById('MessageBox').style.display = 'none';document.getElementById('MessageBoxBackground').style.display = 'none';return false;">
</a>
<div id = "MessageBox" style = "display: none; position: absolute; width: 400px; height: 250px; background-color: white; left: 50%; margin-left: -200px; top: 300px; border-style: solid; border-width: 2px; text-align: center;">
	<br/><br/><br/><br/><br/>
	Denne funksjonen er ikke implementert enda.
</div>