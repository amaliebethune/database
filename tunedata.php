<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Tunes </title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div id="container">
<h1>Add your information</h1>
<p class="middle"><a href="showtunes.php">View full database</a></p>
<div id="tunes">
<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="tuneform" method="post" action autocomplete="off">
  <label for="instrument">Instrument </label>
	<input type="text" name="instrument" id="instrument" maxlength="50" required>
    <label for="skilllevel">Skill Level </label>
    <select name="skilllevel" id="skilllevel" required>
        <option value=" "></option>
        <option value="beginner">beginner</option>
        <option value="intermediate">intermediate</option>
        <option value="advanced">advanced</option>
        <option value="expert">expert</option>
    </select>
  <label for="lessons"> Have you taken lessons? </label>
  <select name="lessons" id="lessons" required>
      <option value=" "></option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
  </select>
  <label for="years">How many years have you been playing? </label>
	<input type="number" name="years" id="years" max="999" required>
    <!-- step="0.01" (above) allows decimal to be entered -->
	<input type="submit" id="submit" value="Submit">
</form>
<!-- close the form -->
</div> <!-- close #tune -->
<!-- empty div -->
<div id="response"></div>
<p class="announce"> </p>
<p class="middle"> <a href="tunedata.php"> Submit more data</a>
</p>
</div> <!-- close container -->
<script src="javascript/enter.js"></script>
</body>
</html>
