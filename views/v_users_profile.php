<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Profile Page</title>

<!-- CSS -->
<link href="/css/main.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container_12 standard centered">
<br />
    
    <div class="red"><h2>Profile for
      <?=$user->first_name?>
      <?=$user->last_name?>
    </h2></div>
    
    <div><a href="/posts/view_add"><img src="/images/icon.png" width="35" height="35" alt="Form" title="Application page 1"></a> <a href="/posts/view_add2"><img src="/images/icon.png" width="35" height="35" alt="Page 2" title="Application page 2"></a> <a href="/posts/view_uploads"><img src="/images/files.png" width="35" height="35" alt="uploads" title="View your uploads"></a> <a href="/posts/view_updates"><img src="/images/pages.jpeg" width="35" height="35" alt="updates" title="View your updates"></a></div>
    
    <div>Navigation Menu</div>
    <br />
    
    <h4>In order to view what you have submitted please select the above images.</h4>
    <p style="color:red">When you click on a view it will be blank until you enter your data or request.</p>
    <p><strong>User ID: </strong>
      <?=$user->user_id?>
    </p>
    <p><strong>Email:</strong>
      <?=$user->email?>
    </p>
    <p><strong>Created:</strong>
      <?=$user->created?>
    </p>
    <h4>If you have any questions please feel free to contact me through the contact forms on the main menu.</h4>
    
    <br /><br /><br />
    
</div>

<br />

</body>
</html>
    
    
  
 

