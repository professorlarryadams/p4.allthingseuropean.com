<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                                         
        <!-- CSS File we want on every page -->
        
         <link href="/css/main.css" rel="stylesheet" type="text/css">
         <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
  
          <!-- JS File we want on every page -->
        
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
                           
                                                                                
        <!-- Controller Specific JS/CSS -->
        
        <?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>  

<div class="container_12">

	<div class="header">
    <img src="/images/header-1.jpg" width="960" height="202" alt="header_image"> </div>

<div class="menu">

                <a href='/'>Home</a> | <a href="#">Contact</a> | 

                <!-- Menu for users who are logged in -->
                
				<?php if($user): ?>
                    <a href='/users/profile'>Profile</a> |
                    <a href='/posts/add'>Form</a> |
                    <a href='/posts/uploads'>Uploads</a> |
                    <a href='/posts/updates'>Updates</a> |
                    <a href='/users/logout'>Logout</a> |
        
                <!-- Menu options for users who are not logged in -->
                <?php else: ?>
        
                    <a href='/users/signup'>Sign up</a> |
                    <a href='/users/login'>Log in</a> |
        
                <?php endif; ?>
        
            </div>

	<div class="content">
        
            <?php if(isset($content)) echo $content; ?>
            
            <!--content --></div>
    <!--container_12 --></div>

</body>
</html>