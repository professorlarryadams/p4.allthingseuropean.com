<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Upload Files</title>

<!-- CSS -->
<link href="/css/main.css" rel="stylesheet" type="text/css">
<link href="/css/SpryValidationTextField.css" rel="stylesheet" type="text/css">

<!--JS-->

<script src="/js/SpryValidationTextField.js" type="text/javascript"></script>

		<script>
  $(function() {
    $( document ).tooltip();
  });
  </script>

<br />

		<div class="centered red">
		<?php if($user): ?>
        		<h4>You are logged in as <?=$user->first_name;?> <?=$user->last_name;?></h4>
        		<p>Please upload your supporting documentation.</p>
		<?php else: ?>
        	<h2>Secure Online Forms</h2>
		<?php endif; ?></div>
</head>

<body>

	<div class="container_12 standard centered"> 

 <br />
 
  <h2>Uploading Supporting Documents</h2>
        
  <div class="demo">                        
        <h2>Required Format</h2>
		<p><strong>Step 1:</strong> Create a Microsoft Word Document with all your supporting documentations.</p>
    	<p><strong>Step 2:</strong> Save your document as a Adobe extention (filename.pdf).</p>
    	<p><strong>Step 3:</strong> Select the Browse... button to upload your document.  Then click on the submit button and you are done!</p>
    	<p>Discliamer - the file upload will replace your exisiting file so we always have the most current information. You can submit as many times as you want but we will only keep your most recent upload file.</p>
        
        <br />
		    
			<form  enctype="multipart/form-data" method="post" action="/posts/p_uploads">
				
                <input name="files" type="file" id="uploads" />
				<input type="submit" id="files" value="submit" />
            
                    <progress id="progressBar" value="0" max="100" style="width: 300px;"></progress>
                    <h3 id="status"></h3>
                    <p id="loaded_n_total"></p>
  			</form>
  </div>
  
  <br />
   
  <?php if(isset($error) && $error == 'invaild-file-type'): ?>
      
    <div class='error'>
          Upload Failed. All fields are required.
          <a href="/posts/uploads">Uploads</a>
      </div>

    <?php endif; ?>
        
        <br /><br /><br />
     
</div>

</body>
</html>

