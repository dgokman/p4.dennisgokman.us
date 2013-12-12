<?php
class posts_controller extends base_controller {

    public function __construct() {
        parent::__construct();

    }

    public function add() {

        # Setup view
        $this->template->content = View::instance('v_posts_add');
        $this->template->title   = "Add a new post";
        
        # Load JS files
        $client_files_body = Array(
        "http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js",
        "../js/jquery.form.js",
        "../js/posts_add.js"
        );

        $this->template->client_files_body = Utils::load_client_files($client_files_body);   

        # Render template
        echo $this->template;

    }

   public function p_add() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

        # Unix timestamp of when this post was created / modified
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('posts', $_POST);
        
        # Set up the view
        $view = View::instance('v_posts_p_add');

        # Pass data to the view
        $view->created     = $_POST['created'];
        $view->new_post_id = $new_post_id;
 
        # Render the view
        echo $view;      

        // Send a simple message back
        echo "Your post was added";
    }
    
    public function index() {

    # Set up the View
    $this->template->content = View::instance('v_posts_index');
    $this->template->title   = "Posts";

    # Query
    $q = 'SELECT 
            posts.content,
            posts.created,
            posts.user_id AS post_user_id,
            users_users.user_id AS follower_id,
            users.first_name,
            users.last_name
        FROM posts
        INNER JOIN users_users 
            ON posts.user_id = users_users.user_id_followed
        INNER JOIN users 
            ON posts.user_id = users.user_id
        WHERE users_users.user_id = '.$this->user->user_id;

    # Run the query
    $posts = DB::instance(DB_NAME)->select_rows($q);

    # Pass data to the View
    $this->template->content->posts = $posts;

    # Render the View
    echo $this->template;

    }
    
    
    public function control_panel() {

    # Setup view
        $this->template->content = View::instance('v_posts_control_panel');
        $this->template->title   = "Control Panel";

    # JavaScript files
        $client_files_body = Array(
            'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js',
            '../js/jquery.form.js', 
            '../js/posts_control_panel.js');
        $this->template->client_files_body = Utils::load_client_files($client_files_body);

    # Render template
        echo $this->template;
    }

    public function p_control_panel() {

    $data = Array();

    # Find out how many posts there are
    $q = "SELECT count(post_id) FROM posts";
    $data['post_count'] = DB::instance(DB_NAME)->select_field($q);

    # Find out how many users there are
    $q = "SELECT count(user_id) FROM users";
    $data['user_count'] = DB::instance(DB_NAME)->select_field($q);

    # Find out when the last post was created
    $q = "SELECT created FROM posts ORDER BY created DESC LIMIT 1";
    $data['most_recent_post'] = Time::display(DB::instance(DB_NAME)->select_field($q));

    # Send back json results to the JS, formatted in json
    echo json_encode($data);
    }

   #Allow image uploading
   
   public function p_upload() {
   $allowedExts = array("gif", "jpeg", "jpg", "png");
   $temp = explode(".", $_FILES["file"]["name"]);
   $filename = $_FILES["file"]["name"];
   $extension = end($temp);
   if ((($_FILES["file"]["type"] == "image/gif")
   || ($_FILES["file"]["type"] == "image/jpeg")
   || ($_FILES["file"]["type"] == "image/jpg")
   || ($_FILES["file"]["type"] == "image/pjpeg")
   || ($_FILES["file"]["type"] == "image/x-png")
   || ($_FILES["file"]["type"] == "image/png"))
   && ($_FILES["file"]["size"] < 200000)
   && in_array($extension, $allowedExts))
    {
   if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
    echo "<link rel='stylesheet' type='text/css' href='../css/sample-app.css' />" . "<p>You have uploaded a picture</p>" . "<br><a href='/users/profile'>Back to profile</a><br>";

   #Check if file exists and save to uploads folder
    if (file_exists("uploads/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploads/" . $_FILES["file"]["name"]);
      
    #Shows uploaded image
      $url = "<img src='../uploads/" . $_FILES["file"]["name"] . "'></img>";
      echo "<img src='../uploads/" . $_FILES["file"]["name"] . "'></img>";
       }
      }
     }
     else
      {
     echo "<link rel='stylesheet' type='text/css' href='../css/sample-app.css' />" . "<p>Invalid file</p>" . "<br><a href='/users/profile'>Back to profile</a><br>";
      }
  }

}
 #eoc ?>
