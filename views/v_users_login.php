<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Login Form</title>

<!-- CSS -->
<link href="/css/main.css" rel="stylesheet" type="text/css">
<link href="/js/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">


<!-- JS -->
<script src="/js/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>
<script src="/js/SpryValidationPassword.js" type="text/javascript"></script>
 
<script type='text/javascript' src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<script>
  $(function() {
    $( document ).tooltip();
  });
  </script>
 

</head>

<body>

<div class="container">

<div id="content">

<form method='POST' enctype="multipart/form-data" action='/users/p_login'>

<h1>Login</h1>

    <div><strong>Email:</strong><br>
    <span id="sprytextfield1">
    <label for="email"></label>
    <input type="text" name="email" id="email"><br />
    <span class="textfieldRequiredMsg">You must enter a email</span><span class="textfieldInvalidFormatMsg">You must enter your email</span><span class="textfieldMinCharsMsg">Minimum of 5 characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum  of 30 characters.</span></span></div><br><br>

    <div>
      <strong>Password:</strong>
      <span id="sprytextfield3">
      <label for="password"></label>
      <input type="password" name="password" id="password" title="You must enter a password!"><br />
      <span class="textfieldRequiredMsg">A password is required.</span></span>
     </div><br>
    
    <?php if (isset ($error) ): ?>
        <div class='error'>
            Login failed. Please double check your email and password.
        </div>
        <br>
    <?php endif; ?>

	 <input type='hidden' name='last_login'>
    <input type='submit' value='Log in'>

</form>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email", {hint:"name@email.com", useCharacterMasking:true, minChars:5, maxChars:30});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
</script>

	</div><!--Content end -->

</div><!-- Container end -->
</body>
</html>
