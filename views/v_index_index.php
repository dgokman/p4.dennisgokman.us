<link rel="stylesheet" type="text/css" href="css/sample-app.css"/>
   <div id="welcome">
      <h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1><br>
          
          <a href="/posts/add">Upload an Animated Gif</a><br>
          <a href="/posts/index">View Animated Gif Index</a><br>
          
   </div>
          