<?php foreach($posts as $post): ?>
<h1>A MODERN FABLE</h1> 
   <p>There once was a <b><?=$post['adj1']?></b> boat docked in a <b><?=$post['adj2']?></b> town by the name of <b><?=$post['name1']?></b>.
The sea <b><?=$post['adverb1']?></b> shook the boat until all of its <b><?=$post['plnoun1']?></b> fell in the water. <b><?=$post['number1']?></b> people ran over to try and recover them. One person looked <b><?=$post['adj3']?></b> as he <b><?=$post['adverb2']?></b> grabbed all that he could. Suddenly, a dog named <b><?=$post['name2']?></b> jumped onto the boat, looking <b><?=$post['adj4']?></b>. The dog found a <b><?=$post['noun1']?></b> that was left there by an explorer named <b><?=$post['name3']?></b>, who had discovered the <b><?=$post['noun2']?></b>. Impressed by the dog, an employee of <b><?=$post['brand']?></b> threw his <b><?=$post['liquid']?></b> into the water and ran over to grab it. The dog looked <b><?=$post['adj5']?></b>. As he went to grab the dog, the <b><?=$post['brand']?></b> employee fell into the water and drowned.<br><br>
MORAL: Do not try to grab <b><?=$post['adj6']?></b> dogs
</p>
<?php endforeach; ?>

<form method='POST' action='/posts/p_index'>
<input type='submit' class='submitval' id="reset" value='RESET' >

</form> 