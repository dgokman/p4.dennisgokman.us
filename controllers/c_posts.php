<?php
class posts_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        
    }

    public function add() {

        # Setup view
        $this->template->content = View::instance('v_posts_add');
        $this->template->title   = "Create your MAAD Lib";
        
        # Load JS files
        $client_files_body = Array(
       
        "/js/jquery.form.js",
        "/js/posts_add.js"
        );

        $this->template->client_files_body = Utils::load_client_files($client_files_body);   
        
        # Render the View
        echo $this->template;

    }

    public function p_add() {

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('posts', $_POST);
        

    }
    
    public function index() {

    # Set up the View
    $this->template->content = View::instance('v_posts_index');
    $this->template->title   = "Posts";

    # Query
    $q = "SELECT FROM `dennisgo_p4_dennisgokman_us`
            posts .*      
        FROM posts
        LIMIT 0, 100 ";

    # Run the query
    $posts = DB::instance(DB_NAME)->select_rows($q);

    # Pass data to the View
    $this->template->content->posts = $posts;
    
    # Render the View
    echo $this->template;

    }
    
    public function p_index() {

    # Reset database
    $q = "DELETE FROM `dennisgo_p4_dennisgokman_us`
          posts .*      
          FROM posts ";

    # Run the query
    $posts = DB::instance(DB_NAME)->select_rows($q);
    
    # Re-direct back to form page
    header("Location: ../posts/add");
    exit;

    }
    
}
 #eoc ?>
