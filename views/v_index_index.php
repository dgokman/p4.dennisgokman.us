<link rel="stylesheet" type="text/css" href="css/sample-app.css"/>
   <div id="welcome">
      <h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1><br>
          <a href="/posts/add">Start chatting</a><br>
          
   </div>
     
