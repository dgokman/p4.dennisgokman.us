<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<form method='POST' action='/posts/p_add'>

    <label for='content'>Start Chatting:</label><br>
    <textarea name='content' id='content' rows='2' columns='25'></textarea>

    <br><br>
    <input type='submit' id="submitval" value='sayit'>

</form> 

<!-- Ajax results will go here -->
<div id="results"></div>

<?php foreach($posts as $post): ?>
   <div id="name"><?=$post['first_name']?> <?=$post['last_name']?>: </div>
   <!--<div id="chat"><b><?=$post['content']?></b></div>-->
   <div id="chat">  </div>
   
<?php endforeach; ?>

