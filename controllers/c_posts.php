<?php

class posts_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            die("You must login. <a href='/users/login'>Login</a>");
        }
    }

    /*-------------------------------------------------------------------------------------------------
    Display a form for page 1 application so users can apply for a MMC        
    -------------------------------------------------------------------------------------------------*/
	
	public function add() {

        # Setup view
        $this->template->content = View::instance('v_posts_form');
        $this->template->title   = "719B Application";

        # Render template
        echo $this->template;

    	}

    /*-------------------------------------------------------------------------------------------------
    Controller for page 1        
    -------------------------------------------------------------------------------------------------*/
	
	
	public function p_add() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

        # Unix timestamp of when this post was created / modified
        $_POST['created']  = Time::now();
		
		unset($_POST['submit']);

        # Insert
		$record_id = DB::instance(DB_NAME)->insert('719B', $_POST);

        # Redirect to second page
        Router::redirect('/posts/add2/'.$record_id);

    	}
	
	/*-------------------------------------------------------------------------------------------------
    Display a form for page 2 application so users can apply for a MMC        
    -------------------------------------------------------------------------------------------------*/
	
	public function add2($record_id) {
	  
	   # Passing the arguement to the view
	   $this->template->content = View::instance('v_posts_form_2');
	   $this->template->content->record_id = $record_id;
	   $this->template->title = "719B page 2";

        # Render template
        echo $this->template;

    	}

    /*-------------------------------------------------------------------------------------------------
    Controller for page 2 application       
    -------------------------------------------------------------------------------------------------*/
	
	public function p_add2() {	
			
		$record_id = $_POST['record_id'];
		unset($_POST['record_id']);
		
		DB::instance(DB_NAME)->update('719B', $_POST, 'WHERE 719b_id = '.$record_id); 
		
		# Send them back to uploads page
        Router::redirect('/posts/uploads'); 

    	}
	
	/*-------------------------------------------------------------------------------------------------
    Display a form for uploads page so users can upload their supporting documents       
   	-------------------------------------------------------------------------------------------------*/	
	
	public function uploads() {
		
		# Setup view
        $this->template->content = View::instance('v_posts_uploads');
        $this->template->title   = "Uploading files";

        # Render template
        echo $this->template;
	
	}		

	/*-------------------------------------------------------------------------------------------------
    Controller for uploads form       
    -------------------------------------------------------------------------------------------------*/
	
	public function p_uploads($error = NULL) {
			 
		# Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;
		
		$_POST['created'] = Time::now();
		
			
			# if user specified a new image file, upload it to folder
			if ($_FILES['uploads']['error'] == 0)
			{
				# upload an image
				$uploads = Upload::upload($_FILES, "/uploads/", array("pdf", "PDF"), $this->user->user_id);
	
				if($uploads == 'invalid-file-type.') {
					# return an error
					Router::redirect("/posts/uploads/error"); 
				}
				else {
					# Insert this user into the database
                	$uploads = DB::instance(DB_NAME)->insert('uploads', $_POST);
		
					# process the upload
					$data = Array("uploads" => $uploads);
					DB::instance(DB_NAME)->update("uploads", $data, "WHERE user_id = ".$this->user->user_id);
					
				}
			}
			else
			{
				# return an error
				Router::redirect("/posts/uploads/error");  
			}
	
			# Redirect back to the profile page
			router::redirect('/posts/uploads'); 
    	}   
			                          
		
		/*-------------------------------------------------------------------------------------------------
        Display a form for updates page so users can update their contact information       
        -------------------------------------------------------------------------------------------------*/
		
		public function updates() {

        # Setup view
        $this->template->content = View::instance('v_posts_updates');
        $this->template->title   = "Updating Information";

        # Render template
        echo $this->template;

    	}
		
		/*-------------------------------------------------------------------------------------------------
        Controller for updates page       
        -------------------------------------------------------------------------------------------------*/

    	public function add_updates() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

        # Unix timestamp of when this post was created / modified
        $_POST['created']  = Time::now();
		
		unset($_POST['submit']);

        # Insert
		DB::instance(DB_NAME)->insert('updates', $_POST);

        # Redirect to second page
        Router::redirect('/users/profile');

    	}
		
		/*-------------------------------------------------------------------------------------------------
        Display a the results for page 1 application         
        -------------------------------------------------------------------------------------------------*/
		
		public function view_add() {
			
		# Set up the View
    	$this->template->content = View::instance('v_posts_view');
    	$this->template->title   = "View Page 1";
		
		# Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;
		
		# Build the query
    	$q = "SELECT 
            * 
        FROM 719B
        WHERE user_id = ".$this->user->user_id;

		# Run the query
		$posts = DB::instance(DB_NAME)->select_rows($q);
	
		# Pass data to the View
		$this->template->content->posts = $posts;
	
		# Render the View
		echo $this->template;
			
		}
		
		/*-------------------------------------------------------------------------------------------------
        Display a the results for page 2 application         
        -------------------------------------------------------------------------------------------------*/
		
		public function view_add2() {
			
		# Set up the View
    	$this->template->content = View::instance('v_posts_view_2');
    	$this->template->title   = "View Page 2";
		
		# Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;
		
		# Build the query
    	$q = "SELECT 
            * 
        FROM 719B
        WHERE user_id = " .$this->user->user_id;

		# Run the query
		$posts = DB::instance(DB_NAME)->select_rows($q);
	
		# Pass data to the View
		$this->template->content->posts = $posts;
	
		# Render the View
		echo $this->template;
			
		}
		
		/*-------------------------------------------------------------------------------------------------
        Display a the results for uploads        
        -------------------------------------------------------------------------------------------------*/
		
		public function view_uploads() {
			
		# Set up the View
    	$this->template->content = View::instance('v_posts_view_uploads');
    	$this->template->title   = "View Uploads";
		
		# Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;
		
		# Build the query
    	$q = "SELECT 
            * 
        FROM uploads
        WHERE user_id = ".$this->user->user_id;

		# Run the query
		$posts = DB::instance(DB_NAME)->select_rows($q);
	
		# Pass data to the View
		$this->template->content->posts = $posts;
	
		# Render the View
		echo $this->template;
			
		}
		
		/*-------------------------------------------------------------------------------------------------
        Display a the results for updates        
        -------------------------------------------------------------------------------------------------*/
		
		public function view_updates() {
			
		# Set up the View
    	$this->template->content = View::instance('v_posts_view_updates');
    	$this->template->title   = "View Updates";
		
		# Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;
		
		# Build the query
    	$q = "SELECT 
            * 
        FROM updates
        WHERE user_id = ".$this->user->user_id;

		# Run the query
		$posts = DB::instance(DB_NAME)->select_rows($q);
	
		# Pass data to the View
		$this->template->content->posts = $posts;
	
		# Render the View
		echo $this->template;
			
		}	
		
} # end of file
		

			
			
			
			
			
		
	