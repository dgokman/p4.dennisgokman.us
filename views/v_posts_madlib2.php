<?php foreach($posts as $post): ?>
<h1>AT THE DOCTOR'S OFFICE</h1> 
   <p>The <b><?=$post['adj1']?></b> doctor went into the room where his <b><?=$post['adj2']?></b> patient, <b><?=$post['name1']?></b> was waiting. The patient gazed <b><?=$post['adverb1']?></b> at the doctor's <b><?=$post['plnoun1']?></b> which clearly showed he was making at least <b><?=$post['number1']?></b> dollars a year. The doctor began treatment, asking the <b><?=$post['adj3']?></b> patient to <b><?=$post['adverb2']?></b> open up and say "ahh". Just then, <b><?=$post['name2']?></b> ran into the room, looking <b><?=$post['adj4']?></b>. <b><?=$post['name2']?></b> showed both the doctor and patient a <b><?=$post['noun1']?></b> that was written by <b><?=$post['name3']?></b>, on the history of the <b><?=$post['noun2']?></b>. Neither of them seemed interested, until this person claimed to be employed by <b><?=$post['brand']?></b>, which recently started selling gallons of <b><?=$post['liquid']?></b>. Convinced of this <b><?=$post['adj5']?></b> person's prestige, the doctor left the <b><?=$post['adj6']?></b> patient hanging and went to go buy the book.
</p>
<?php endforeach; ?>

<form method='POST' action='/posts/p_index'>
<input type='submit' class='submitval' id="reset" value='RESET' >
</form> 