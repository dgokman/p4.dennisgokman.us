<?php foreach($posts as $post): ?>
   <div id="name"><?=$post['first_name']?> <?=$post['last_name']?>: <b><?=$post['content']?></b></div>
<?php endforeach; ?>