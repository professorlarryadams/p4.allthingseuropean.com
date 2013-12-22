<br />
<?php 
if(isset($_POST['submit'])){
    $to = "admin@p4.allthingseuropean.com"; //  your Email address
    $from = $_POST['email']; // gets the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Online Secure Forms Customer Service";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<br />

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Contact Form</title>

<!-- CSS -->
<link href="/css/main.css" rel="stylesheet" type="text/css">
<link href="/js/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="/js/SpryValidationTextarea.css" rel="stylesheet" type="text/css">

<script src="/js/SpryValidationTextField.js" type="text/javascript"></script>
<script src="/js/SpryValidationTextarea.js" type="text/javascript"></script>

</head>
<body>
<br />
<div class="centered red">
			<?php if($user): ?>
        		<h3>You are logged in as <?=$user->first_name;?> <?=$user->last_name;?></h3>
        		<p>Please complete the required fields on this form.</p>
			<?php else: ?>
        		<h3>Secure Online Forms</h3>
			<?php endif; ?>
            </div>

<div class="containter">

<div id="content">

<form action="" enctype="multipart/form-data" method="post">
<h1>Contact</h1>

<span id="sprytextfield1">
<label for="first_name"><strong>First Name:</strong></label>
<br />
<input type="text" name="first_name" id="first_name"><br />
<span class="textfieldRequiredMsg">A value is required.</span></span><br />

<span id="sprytextfield2">
<label for="last_name"><strong>Last Name:</strong></label>
<br />
<input type="text" name="last_name" id="last_name">
<br />
<span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span><br />

<span id="sprytextfield3">
<label for="email">Email:</label>
<input type="text" name="email" id="email">
<span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span> <strong>

<span id="sprytextarea2">
<label for="message">Message:</label>
</span></strong><span id="sprytextarea2"><br />
<textarea name="message" id="message" cols="45" rows="5"></textarea><br />
<span class="textareaRequiredMsg">A value is required.</span></span>
<input type="submit" name="submit" value="Submit">

</form>


</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {hint:"First Name"});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {hint:"Last Name", minChars:1});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {hint:"name@email.com", useCharacterMasking:true, minChars:4});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
</script>

</body>
</html> 
