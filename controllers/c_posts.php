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
        Router::redirect("/posts/uploads"); 

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
		
		
		public function uploads() {

        # Setup view
        $this->template->content = View::instance('v_posts_uploads');
        $this->template->title   = "Updating Information";

        # Render template
        echo $this->template;

    	}
		
		public function p_uploads() {
			
		# Associate this upload with this user
        $_POST['user_id']  = $this->user->user_id;

        # Unix timestamp of when this post was created
        $_POST['created']  = Time::now();
		
		unset($_POST['submit']);
		
		if(isset($_POST['btnAdd'])) {
		
		$myFile = $_FILES['fileField']['name']; // Storing name into variable
		
		$newFileName = $anyNum.$myFile;
		//===New string is concatenated====
		//===Following Function will check if the File already exists========
		
		if (file_exists("upload/".$newFileName))
		{
		echo $newFileName." already exists. ";
		}
		//======If file already exists in your Folder, It will return zero and Will not take any action===
		//======Otherwise File will be stored in your given directory and Will store its name in Database===
		else
		{
		
		$query = "insert into uploads(file_name) values ('$newFileName')";
		
		$q = mysql_query($query);
		
		copy($_FILES['fileField']['tmp_name'],'upload/'.$newFileName);
		//===Copy File Into your given Directory,copy(Source,Destination)
		
		if($q =0)
		{
		//====$res will be greater than 0 only when File is uploaded Successfully====:)
		echo 'You have Successfulluy Uploaded File';
		}
		}
		}
			
			
		}
}
		

			
			
			
			
			
		
	