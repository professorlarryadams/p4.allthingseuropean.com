<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<title>Upload Files</title>

<!-- CSS -->

<link href="/css/main.css" rel="stylesheet" type="text/css">
<link href="/css/SpryValidationTextField.css" rel="stylesheet" type="text/css">

<!--JS-->

<script src="/js/SpryValidationTextField.js" type="text/javascript"></script>

</head>

<body>
<br />
<div class="centered red">
		<?php if($user): ?>
        		<h4>You are logged in as <?=$user->first_name;?> <?=$user->last_name;?></h4>
        		<p> Welcome to the Merchant Mariner Credential Secure Electronic Application System (MMSEAS)</p>
		<?php else: ?>
        	<h2>Secure Online Forms</h2>
		<?php endif; ?></div>

	<div class="container_12 standard">
    
    <br />
    
        <div class="demo">                        
        <h1>Selecting multiple files for upload</h1>
		<p>PHP File Uploader allows you to select multiple files and upload them at once.</p>
        <p>Limit is 2 megabytes per upload!</p>
		    
			<form  enctype="multipart/form-data" method="post" action="/posts/p_uploads">
				
                <input name="uploads" type="file" id="uploads" />
				<input type="submit" id="uploads" value="submit" />
            
                    <progress id="progressBar" value="0" max="100" style="width: 300px;"></progress>
                    <h3 id="status"></h3>
                    <p id="loaded_n_total"></p>
        
        	</form>
            
            <?php if(isset($error)): ?>
            <div class="callout-error">
                <h4>Upload failed.</h4> 
                <p>Image file must be a docs, docx, xls, pdf, jpg, or png.</p>
            </div>
        <?php endif; ?> 
		
   </div>
   
     <br /> 
   
   <div class="centered">
   
    <h3>Required Format for Uploading Documents</h3>
        <p>You can upload your supporting documentation for Sea Service, TWIC, Drug Testing, Parental Consent, Course Certificates, and Militry Records.</p> 
        
        <p>Recomand that you use Microsoft Word software to cut and paste all your documents together.  Then save the MS Word documents as a Adobe pdf.  The application will be saved with your id number so you can update your documents at any time.</p> 
        
    </div>
     
</div>

</body>
 </html>