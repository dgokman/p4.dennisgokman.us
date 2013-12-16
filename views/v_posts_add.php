<link rel="stylesheet" type="text/css" href="../css/sample-app.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<form method='POST' action='/posts/p_add'>

    <label for='content'>Start Chatting:</label><br>
    <textarea name='content' id='content' rows='2' columns='25'></textarea>

    <br><br>
    <input type='submit' value='say it!'>

</form> 

<!-- Ajax results will go here -->
<div id='results'></div>

<?php foreach($posts as $post): ?>
   <p><?=$post['first_name']?> <?=$post['last_name']?>: <b><?=$post['content']?></b></p>
<?php endforeach; ?>
