<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<title>Upload Files</title>

<!-- CSS -->

<link href="../css/main.css" rel="stylesheet" type="text/css">
<link href="../css/SpryValidationTextField.css" rel="stylesheet" type="text/css">

<!--JS-->

<script src="../js/SpryValidationTextField.js" type="text/javascript"></script>

<script>

            function _(el) {
                return document.getElementById(el);
            }

            function uploadFile() {
                 var file = _("file1").files[0];
                alert (file.name+" - "+file.size+" - "+file.type);
                var formdata = new FormData();
                formdata.append("file1", file);
                var ajax = new XMLHttpRequest();
                ajax.upload.addEventListener("progress", progressHandler, false);
                ajax.addEventListener("load", completeHandler, false);
                ajax.addEventListener("error", errorHandler, false);
                ajax.addEventListener("abort", abortHandler, false);
                ajax.open("POST", "upload_parser.php");
                ajax.send("POST","uploads");
            }

            function progressHandler (event) {
                _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
                var percent = (event.loaded / event.total) * 100;
                _("progressBar").value = Math.round(percent);
                _("status").innerHTML = Math.round(percent) +"% uploaded... please wait";
            }

            function completeHandler (event) {
                _("status").innerHTML = event.target.responseText;
                _("progressBar").value = 0;
            }

            function errorHandler (event) {
                _("status").innerHTML = "Upload Failed";
            }

            function abortHandler (event) {
                _("status").innerHTML = "Upload Aborted";
            }


        </script>


	
</head>

<body>

<div class="container">
    
        <div class="demo">                        
        <h1>Selecting multiple files for upload</h1>
		<p>PHP File Uploader allows you to select multiple files and upload them at once.</p>
        <p>Limit is 10 megabytes per upload!</p>
		    
			<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="p_uploads">
			
			<input type="file" name="fileField" id="fileField" />

			<input type="submit" name="btnAdd" id="btnAdd" value="Upload" />
            
            <progress id="progressBar" value="0" max="100" style="width: 300px;"></progress>
            <h3 id="status"></h3>
            <p id="loaded_n_total"></p>
        
        	</form>
			
   </div>
   </div>         
            

</body>
 </html>