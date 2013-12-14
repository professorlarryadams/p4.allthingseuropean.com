<?php
	class users_controller extends base_controller {

        /*-------------------------------------------------------------------------------------------------
        
        -------------------------------------------------------------------------------------------------*/
    	public function __construct() {
    
        # Makke ure the base controller construct gets called
                parent::__construct();
    	} 

	
		public function index() {
        $this->template->content = View::instance('v_index_index');
    	}

        /*-------------------------------------------------------------------------------------------------
        Display a form so users can sign up        
        -------------------------------------------------------------------------------------------------*/
    	
		 public function signup($error = NULL) {
        
        #Set up the view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title = "Sign Up";
        
        # Pass data to the view
		$this->template->content->error = $error;
        
        # Render the view (localhost/users/signup)
        echo $this->template;
    	}
    
    	/*-------------------------------------------------------------------------------------------------
    	Process the sign up form
    	-------------------------------------------------------------------------------------------------*/
		
		public function p_signup() {
    
    	# Sanitize Data Entry
    	$_POST = DB::instance(DB_NAME)->sanitize($_POST);
		
		# Check password requirements
		$pwd = $_POST['pwd'];

		if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pwd)){
   		 echo "Your password is strong.";
		
			} else {
    	
			echo "Your password is not safe.";
		}
    
    	# Set up Email / Password Query
    	$q = "SELECT * FROM users WHERE email = '".$_POST['email']."'"; 
    	
    	# Query Database
    	$user_exists = DB::instance(DB_NAME)->select_rows($q);
    	
    	# Check if email exists in database
    		if(!empty($user_exists)){
    		
    			# Send to Login page
	    		Router::redirect('/users/login');
    		}
    		
    		else {
	    		
		    	# Mail Setup
				$to = $_POST['email'];
				$subject = "Welcome to Secure Online Forms";
				$message = "Thanks for signing up with All Things European.  You now may login to our forms.";
				$from = 'ladams@allthingseuropean.com';
				$headers = "From:" . $from;         
	    		
	    		# More data we want stored with the user
				$_POST['created'] = Time::now();
				$_POST['modified'] = Time::now();
    	
				# Encrypt password
				$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
    	
				# Create encrypted token via email and random string
				$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
    	
				# Insert this user into the database
				$user_id = DB::instance(DB_NAME)->insert('users', $_POST);
    	
				# Send Email
                if(!$this->user) {
	            	mail($to, $subject, $message, $headers);
                }         
    	
				# Send to the login page
				Router::redirect('/users/login');
    		}
    	}
    
    	/*-------------------------------------------------------------------------------------------------
    	Process the login form
    	-------------------------------------------------------------------------------------------------*/
    
		public function login($error = NULL) {
        
        # Setup view
        $this->template->content = View::instance('v_users_login');
        $this->template->title   = "Login";
        
        # Pass data to the view
		$this->template->content->error = $error;
 
		# Render template
        echo $this->template;
    	}
		
		
		public function p_login() {
	    
	    # Sanitize Data Entry
    	$_POST = DB::instance(DB_NAME)->sanitize($_POST);
	    
	    # Compare password to database
		$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
	    
	    # Search the db for this email and password
		# Retrieve the token if it's available
		$q = 
			'SELECT token
			FROM users 
			WHERE email = "'.$_POST['email'].'" 
			AND password = "'.$_POST['password'].'"';
	
	    
	    # If there was, this will return the token
	    $token = DB::instance(DB_NAME)->select_field($q);
	    
	    # Login failed
		if(!$token) {
        
			 # Note the addition of the parameter "error"
			 Router::redirect("/users/login/invalid-login"); 
		}
    
		# Login passed
		else {
        	setcookie("token", $token, strtotime('+2 weeks'), '/');
			Router::redirect("/");
			}
    	}
  

        /*-------------------------------------------------------------------------------------------------
        Logout        
        -------------------------------------------------------------------------------------------------*/
    	public function logout() {

    	# Generate and save a new token for next login
    	$new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

    	# Create the data array we'll use with the update method
    	# In this case, we're only updating one field, so our array only has one entry
    	$data = Array("token" => $new_token);

    	# Do the update
    	DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

    	# Delete their token cookie by setting it to a date in the past - effectively logging them out
    	setcookie("token", "", strtotime('-2 weeks'), '/');

    	# Send them back to the main index.
    	Router::redirect("/");

		}

        /*-------------------------------------------------------------------------------------------------
        Profile
        -------------------------------------------------------------------------------------------------*/
    	public function profile($error = NULL) {
    
    	# Sanitize Data Entry
    	$_POST = DB::instance(DB_NAME)->sanitize($_POST);
    	
    	# If user is blank, they're not logged in; redirect to login page
    	if(!$this->user) {
	    	Router::redirect('/users/login');
    	}    	
 
    	# Setup view
    	$this->template->content = View::instance('v_users_profile');
    	$this->template->title = "Profile of".$this->user->first_name;
    	
    	# Query load posts from user
    	$q = 'SELECT first_name, last_name, email, created FROM users WHERE user_id = '.$this->user->user_id;
    	
    	# Run Query
    	$users = DB::instance(DB_NAME)->select_rows($q);
    	$this->template->content->users = $users;
    	
    	# Render template
    	echo $this->template;
    } 
	
	
	
} # end of class 

