<?php foreach($posts as $post): ?>
<h1>DESCRIPTION OF THE LOVELY GROUP THAT I AM IN</h1> 
   <p>We are having a perfectly <b><?=$post['adj1']?></b> time this evening in the <b><?=$post['adj2']?></b> home of <b><?=$post['name1']?></b>. The rooms are decorated <b><?=$post['adverb1']?></b> with many stylish <b><?=$post['plnoun1']?></b> that must have cost at least <b><?=$post['number1']?></b> dollars. The guests are all <b><?=$post['adj3']?></b> conversationalists and are all <b><?=$post['adverb2']?></b> dressed. <b><?=$post['name2']?></b> has been entertaining us by telling about the time he showed his <b><?=$post['adj4']?></b> <b><?=$post['noun1']?></b> to <b><?=$post['name3']?></b> who mistook it for an early American <b><?=$post['noun2']?></b>. The refreshments are from <b><?=$post['brand']?></b> and the idea of serving <b><?=$post['liquid']?></b> on the rocks showed <b><?=$post['adj5']?></b> imagination. Visiting here is always a (an) <b><?=$post['adj6']?></b> experience
</p>
<?php endforeach; ?>

<form method='POST' action='/posts/p_index'>
<input type='submit' id="submitval" value='RESET' ></input>

</form> 
