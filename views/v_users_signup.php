<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Registration Form</title>

<!-- CSS -->
<link href="/css/main.css" rel="stylesheet" type="text/css">
<link href="/js/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="/js/SpryValidationPassword.css" rel="stylesheet" type="text/css">



<!-- JS -->

<script src="/js/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="/js/Script/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="/js/Script/jquery.password-strength(new).min.js" type="text/javascript"></script>
<script src="/js/SpryValidationPassword.js" type="text/javascript"></script>


<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2527523" binding="#password" />
</oa:widgets>
-->
</script>

 <script type="text/javascript">
  $(document).ready(function() {
	
	var password_settings = { minLength: '10', 
		maxLength: '20', 
		specialLength: '1', 
		upperLength: '1',
		numberLength: '1' 
	 	 
		 }; 
     
	   var myPSPlugin = $("[id$='password']").password_strength(password_settings);

    });    
	 
  </script>
</head>

<body>

<div class="container">

<div id="content">

<form method='POST' enctype="multipart/form-data"  action="/users/p_signup">

<h1>Signup</h1>

    <div><strong>First Name:</strong><br />
    <span id="sprytextfield4">
    <label for="first_name"></label>
    <input type="text" name="first_name" id="first_name" title="Enter your first name."><br />
    <span class="textfieldRequiredMsg">You must enter your first name</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span>
    <span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></div><br />

    <div><strong>Last Name:</strong><br />
    <span id="sprytextfield3">
    <label for="last_name"></label>
    <input type="text" name="last_name" id="last_name" title="Enter your last name."><br />
    <span class="textfieldRequiredMsg">You must enter your last name</span>
    <span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></div>
    <br>

    <div><strong>Email:</strong><br />
      <span id="sprytextfield1">
      <label for="email"></label>
      <input type="text" name="email" id="email" title="Enter your email.">
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span><br /></div>

    <div><strong>Password:</strong><br />
      <span id="sprypassword1">
      <label for="password"></label>
      <input type="password" name="password" id="password" placeholder="password" title="Must have MIN 10 and MAX 20 charcters, 1 lower, 1 UPPER, 1 Special Chararcter"><br />
      <span class="passwordRequiredMsg">A value is required.</span><span class="passwordMinCharsMsg">Minimum number of characters not met.</span><span class="passwordMaxCharsMsg">Exceeded maximum number of characters.</span><span class="passwordInvalidStrengthMsg">The password doesn't meet the specified strength.</span></span> </div>
	
	
	
	<?php if(isset($error) && $error == 'blank-fields'): ?>
    <div class='error'>
          Signup Failed. All fields are required.
          <a href="/users/signup">Signup</a>
      </div>

    <?php endif; ?>
    

    <?php if(isset($error) && $error == 'users-exists'): ?>
        <div class='error'>
            This email is all ready associate with an account. 
          <a href="/users/login">Login</a>
        </div>

    <?php endif; ?>
    
    
  <input type='hidden' name='timezone'>
  <input type='submit'  value='submit'>

</form>

<script type="text/javascript">
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {hint:"Last Name", minChars:1, maxChars:40, hint:"Last Name"});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {hint:"First Name", minChars:1, maxChars:40});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email", {useCharacterMasking:true, hint:"name@email.com", minChars:4});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minChars:10, maxChars:20, minAlphaChars:1, minNumbers:1, minUpperAlphaChars:1, minSpecialChars:1, maxSpecialChars:1, maxUpperAlphaChars:1});
</script>

	</div><!--Content -->
</div><!-- Container -->
</body>
</html>

