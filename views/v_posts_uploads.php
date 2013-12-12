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
<script src="../js/Script/jquery-1.4.4.min.js" type="text/javascript"></script>
</head>

<body>

<div class="container">

	<div id="content">
    
        <form enctype="multipart/form-data" action="/posts/uploads" method="post">
        
        	<h1>Uploads</h1>
        
         <fieldset>
         <p><strong>File format:</strong><br /> 
         (docs, docx, pdf, jpeg, jpg, png, xls)</p><br />
        
          <div><strong>Sea Service:</strong></div>
          <span id="sprytextfield5">
          <label for="sea_service"></label>
          <input type="file" name="sea_service" id="sea_service" title="Upload your proof of sea service."><br />
          <span class="textfieldRequiredMsg">A value is required.</span></span><br />
          
<div><strong>TWIC Receipt:</strong></div>
         <div>
           <span id="sprytextfield6">
           <label for="twic_receipt2"></label>
           <input type="file" name="twic_receipt" id="twic_receipt" title="Upload your proof of a TWIC."><br />
           <span class="textfieldRequiredMsg">A value is required.</span></span></div><br />
        
         <div><b>Conviction Statement:</b></div>
         <div> 
           <span id="sprytextfield7">
           <label for="convictions2"></label>
           <input type="file" name="convictions" id="convictions" title="Upload your criminal record."><br />
           <span class="textfieldRequiredMsg">A value is required.</span></span></div><br />
         
         <div><b>Course Certificates:</b></div>
         <div> <span id="sprytextfield8">
           <label for="certificates2"></label>
           <input type="file" name="certificates" id="certificates" title="Upload your proof of course completition."><br />
           <span class="textfieldRequiredMsg">A value is required.</span></span></div><br />
        
         </fieldset>
          
          <input type="hidden"name="MAX_FILE_SIZE" value="524288">
          <input type='submit'  value='submit'>
         
         </form>
         
 </div><!-- Content end tag -->
 </div><!-- Container end tag -->

<script type="text/javascript">
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
</script>

</body>
 </html>