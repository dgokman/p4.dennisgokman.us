<link rel="stylesheet" type="text/css" href="../css/sample-app.css" />

<form action="/posts/p_upload" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>



<!-- Ajax results will go here -->
<div id='results'></div>