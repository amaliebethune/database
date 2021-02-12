<?php
	include 'database.php';
	$query = "SELECT * FROM tunes ORDER BY instrument";
	$tunes = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Tunes </title>
	<link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/table.css"
</head>

<body>
<div id="container">

<h1>Musicians database</h1>

<p class="middle"><a href="tunedata.php">Add new data</a></p>


<!--
     the form below is handled by the PHP file named in the action= attribute
-->
<form class="smallform" method="post" action="tunes_edit.php" autocomplete="off">

<table class="table">
	<!-- table column headings -->
	<tr>
    <th>ID</th>
	  <th>Instrument</th>

	  <th>Skill Level</th>
	  <th>Lessons?</th>
	  <th>Years played</th>

	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
     Each time it loops, it writes ONE ROW.
	 This code depends on the first 5 lines at the start of this file.
	 $tunes comes from that code.
	 NOTE all form controls must have a name= attribute.
     -->
<?php while ($row = mysqli_fetch_assoc($tunes)) :  ?>

<tr>
  <td><input type="radio" name="id" id="<?php echo $row['id']; ?>"
	   value="<?php echo $row['id']; ?>"></td>
  <!-- notice how, above, the database record id becomes
       the id and value of the radio button -->
  <td><?php echo stripslashes($row['instrument']); ?></td>
  <td><?php echo $row['skilllevel']; ?></td>
  <td><?php echo $row['lessons']; ?></td>
  <td><?php echo $row['years']; ?></td>

</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<input type="submit" id="submit" value="Submit One Row for Editing">

<!-- close the form -->
</form>



</div> <!-- close container -->
</body>
</html>
