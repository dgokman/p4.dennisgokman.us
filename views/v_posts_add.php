<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
 
<form method='POST' action='/posts/p_add'>

    <label for='content'>Start Chatting:</label><br>
    <input name='content' id='content' size='63'></textarea>

    <br><br>
    <input type='submit' id="submitval" value='sayit' ></input>

</form> 
<!--<div id="chatbox"></div>  
      
    <form method='POST' name="message" action="/posts/p_add'">  
        <textarea name="content" type="text" id="content" size="63" />  
        <input name="submitmsg" type="submit" id="submitmsg" value="Send" />  
    </form>  
</div>  -->

<!-- Ajax results will go here -->

<?php foreach($posts as $post): ?>
   <div id="name"><?=$post['first_name']?> <?=$post['last_name']?>: <b><?=$post['content']?></b></div>
<?php endforeach; ?>

<!--<?  
session_start();  
if(isset($_SESSION['first_name'])){  
    $text = $_POST['content'];  
      
    $fp = fopen("log.html", 'a');    
    fclose($fp);  
}  
?>  -->



