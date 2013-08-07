<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title></title>
		
		<link rel="stylesheet" type="text/css" href="css/master.css">
		<style type="text/css">
		  	<?php echo $head; ?>
		</style>
	</head>
	<body>
		<div id = "CenterWrap">
			<div id = "Menu">
				<a id = "NITHLink" href = "http://www.nith.no"> <img src = "img/nith.png" alt = "NITH Logo"> </a>
				<a href = "index.php">Hjem</a>
				
				<div id = "BookWrap">
				<a href = "SelectStudy.php">Bøker</a>
				<div id = "StudyList">
				<a href = "Books.php?tag=spillprog">SpillProgrammering</a>
				<a href = "Books.php?tag=prog">Programmering</a>
				<a href = "Books.php?tag=app">Apputvikkling</a>
				<a href = "Books.php?tag=spilldesign">Spill Design</a>
				<a href = "Books.php?tag=3d">3D Grafikk</a>
				<a href = "Books.php?tag=design">Interaktivt Design</a>
				<a href = "Books.php?tag=markedsforing">Digital Markedsføring</a>
				<a href = "Books.php?tag=ebusiness">E-Business</a>
				<a href = "Books.php?tag=industri">Industribachelor</a>
				<a href = "Books.php">Alle</a>
				</div>
				</div>
				
				<div id = "AboutWrap">
				<a id = "About" href = "tmp.php">Om</a>
				<div id = "AboutList">
				<a href = "tmp.php">Akademika</a>
				<a href = "tmp.php">Om NITH</a>
				<a href = "tmp.php">Kontakt</a>
				</div>
				</div>
				
				<input id = "tbSearch" style = "height: 25px; width: 130px; margin: 0px" type="text" onkeydown="if (event.keyCode == 13) document.getElementById('btnSearch').click()">
				<input id = "btnSearch" style = "height: 25px; width: 40px; margin: 0px;" type="submit" value="Søk" onclick = "window.location = 'Books.php?search=' + document.getElementById('tbSearch').value;">
				
			</div>
			<div id = "content">
