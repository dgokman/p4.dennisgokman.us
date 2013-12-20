<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
 
<form method='POST' action='/posts/p_add'>

    <label for='adj1'>adjective:</label><br>
    <input name='adj1' id='adj1' size='63'></textarea>

    <br><br>
   


    <label for='adj2'>adjective:</label><br>
    <input name='adj2' id='adj2' size='63'></textarea>

    <br><br>



    <label for='name1'>Name of Host or Hostess:</label><br>
    <input name='name1' id='name1' size='63'></textarea>

    <br><br>
    



    <label for='adverb1'>adverb:</label><br>
    <input name='adverb1' id='adverb1' size='63'></textarea>

    <br><br>
    


    <label for='plnoun1'>plural noun:</label><br>
    <input name='plnoun1' id='plnoun1' size='63'></textarea>

    <br><br>
    <input type='submit' id="submitval" value='sayit' ></input>

</form> 
<div id="results"></div>
<!--</div>  
      
    <form method='POST' name="message" action="/posts/p_add'">  
        <textarea name="content" type="text" id="content" size="63" />  
        <input name="submitmsg" type="submit" id="submitmsg" value="Send" />  
    </form>  
</div>  -->

<!-- Ajax results will go here -->


<!--<?  
session_start();  
if(isset($_SESSION['first_name'])){  
    $text = $_POST['content'];  
      
    $fp = fopen("log.html", 'a');    
    fclose($fp);  
}  
?>  -->



