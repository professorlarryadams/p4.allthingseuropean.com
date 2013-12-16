<?php

class posts_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            die("You must login. <a href='/users/login'>Login</a>");
        }
    }

    public function add() {

        # Setup view
        $this->template->content = View::instance('v_posts_form');
        $this->template->title   = "719B Application";

        # Render template
        echo $this->template;

    	}

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
	
	public function add2($record_id) {
	  
	   # Passing the arguement to the view
	   $this->template->content = View::instance('v_posts_form_2');
	   $this->template->content->record_id = $record_id;
	   $this->template->title = "719B page 2";

        # Render template
        echo $this->template;

    	}

    public function p_add2() {
		
			
		$record_id = $_POST['record_id'];
		unset($_POST['record_id']);
		
		DB::instance(DB_NAME)->update('719B', $_POST, 'WHERE 719b_id = '.$record_id); 
		
		# Send them back to uploads page
        Router::redirect('/posts/uploads'); 

    	}
		
	public function upload() {
		
		# Setup view
        $this->template->content = View::instance('v_posts_uploads');
        $this->template->title   = "Uploading files and images";

        # Render template
        echo $this->template;
	
	}		

		 public function p_uploads() {
			
			# if user specified a new image file, upload it
			if ($_FILES['uploads']['error'] == 0)
			{
				# upload an image
				$upload = Upload::upload($_FILES, "/uploads/", array("JPG", "JPEG", "jpg", "jpeg", "png", "PNG", "pdf", "PDF", "DOCS", "docs", "xls"), $this->user->user_id);
	
				if($upload == 'Invalid file type.') {
					# return an error
					Router::redirect("/users/profile/error"); 
				}
				else {
					# process the upload
					$data = Array("uploads" => $uploads);
					DB::instance(DB_NAME)->update("uploads", $data, "WHERE user_id = ".$this->user->user_id);
	
					# resize the image
					$imgObj = new Image($_SERVER["DOCUMENT_ROOT"] . '/uploads/' . $upload);
					$imgObj->resize(100,100, "crop");
					$imgObj->save_image($_SERVER["DOCUMENT_ROOT"] . '/uploads/' . $upload); 
				}
			}
			else
			{
				# return an error
				Router::redirect("/users/profile/error");  
			}
	
			# Redirect back to the profile page
			router::redirect('/users/profile'); 
    	} 
			

		
		public function updates() {

        # Setup view
        $this->template->content = View::instance('v_posts_updates');
        $this->template->title   = "Updating Information";

        # Render template
        echo $this->template;

    	}

    	public function p_updates() {

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
		
		
		
}
		

			
			
			
			
			
		
	