<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Login Form</title>

<!-- CSS -->
<link href="/css/main.css" rel="stylesheet" type="text/css">
<link href="/js/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="../js/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">


<!-- JS -->
<script src="/js/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="/js/SpryValidationPassword.js" type="text/javascript"></script>
<script src="/js/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 
<script>
$(function() {
    $( document ).tooltip();
  });
  </script>
  <style>
  label {
    display: inline-block;
    width: 5em;
  }
  </style>

</head>

<body>

<div class="container">

	<div id="content">

		<form method='POST' enctype="multipart/form-data" action='/users/p_login'>

			<h1>Login</h1>

            <div><strong>Email:</strong>
            <span id="sprytextfield1">
            <label for="email"></label><br />
            <input type="text" name="email" id="email" title="You must enter your email as your username"><br />
            <span class="textfieldRequiredMsg">You must enter a email</span> <span class="textfieldInvalidFormatMsg">You must enter your email</span>
            <span class="textfieldMinCharsMsg">Minimum of 10 characters not met.</span> <span class="textfieldMaxCharsMsg">Exceeded maximum  of 30 characters.</span></span></div><br />
        
          
          <div><strong>Password:</strong>
            <span id="sprypassword2">
              <label for="password"></label> <br />
              <input type="password" name="password" id="password" title="You password must have 10 characters, 1 specials character, 1 number, 1 lower and 1 upper case letter."><br />
          <span class="passwordRequiredMsg">A value is required.</span><span class="passwordMinCharsMsg">Minimum number of characters not met.</span><span class="passwordMaxCharsMsg">Exceeded maximum number of characters.</span><span class="passwordInvalidStrengthMsg">The password doesn't meet the specified strength.</span></span> </div><br>
            
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
</script>

	</div><!--Content end -->

</div><!-- Container end -->
<script type="text/javascript">
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2", {minChars:10, maxChars:20, minAlphaChars:1, minNumbers:1, minUpperAlphaChars:1, minSpecialChars:1});
</script>
</body>
</html>
