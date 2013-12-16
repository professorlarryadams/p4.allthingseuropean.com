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

<div class="container">
    
        <div class="demo">                        
        <h1>Selecting multiple files for upload</h1>
		<p>PHP File Uploader allows you to select multiple files and upload them at once.</p>
        <p>Limit is 2 megabytes per upload!</p>
		    
			<form  enctype="multipart/form-data" method="post" action="/posts/upload">
			
            <input name="uploads" type="file" id="uploads" />

			<input type="submit" id="uploads" value="Uploads" />
            
            <input type="hidden" name="MAX_FILE_SIZE" value="20000000">
            
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
   </div>         
            

</body>
 </html>