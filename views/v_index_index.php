<div class="container_12 standard"> 

<?php if($user): ?>
<br />
       <div class="red centered"> <h3>Merchant Mariner Credential Secure Electronic Application System (MMSEAS)</h3>
        	
         <h4>You are logged in as <?=$user->first_name;?> <?=$user->last_name;?></h4>
		
        </div>
        
        <table width="97%" cellspacing="1" cellpadding="1" class="centered">
  <tr>
    <th colspan="3">Instructions</th>
    </tr>
  <tr>
    <th width="9%" rowspan="8">&nbsp;</th>
    <td width="82%" height="39">You have succefully login and are now ready to use our online forms.</td>
    <th width="9%" rowspan="8">&nbsp;</th>
  </tr>
  <tr>
    <th height="33">The above menu is our main navigation throughout the website.</th>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    </tr>
  <tr>
    <td height="26"> <strong>Contact</strong> allows you to contact us with your questions</td>
  </tr>
  <tr>
    <td><strong>Profile</strong> will give your the results of your submission</td>
  </tr>
  <tr>
    <td><strong>Form</strong> is where start the application</td>
  </tr>
  <tr>
    <td> <strong>Uploads</strong> is where you can upload your supporting documentation</td>
  </tr>
  <tr>
    <td height="27"><strong>Updates</strong> is where you can make changes to your contact information</td>
  </tr>
  <tr>
    <th colspan="3">&nbsp;</th>
  </tr>
  </table>
            
    <br /><br /><br />         
		</div>
        
        
<?php else: ?>
        
<div class="red centered"><h2>Secure Online Forms</h2></div>

	<h2>Project Overview</h2>

    <p>My project is to develop a secure online application that federal and state governments can use to help eliminate the paper world.  According to the Government Accounting Office there is way too much waste in applications, publications, and other paper products that are no longer needed.</p>
    
    <p>Technology advancements in security and low cost web hosting with secure socket layering presents an opportunity for developers to create secure online forms  for less than $10 per month.  This application was developed by using secure socket layering (SSL),  Linux, Apache, MySQL, PHP (LAMP) framework and JavaScripting validation for less than $10.</p>

	<h4>This project will be used as a discussion point in the US Coast Guard in developing low cost solutions to online applications.</h4>

	<h2>Project 4</h2>
        
        <p>In order to gain access you need to signup with your <strong>email</strong>, <strong>name</strong>, and <strong>strong password</strong> which will create an account.</p> 
        
        <p class="red"><strong>Sample login:</strong> <strong>email</strong> ladams@aol.com <strong>password</strong> F0rget1964@</p>
        
        <p>As a graduate student at Harvard University  my project is to build a secure online application with secure socket layering (SSL), ability to upload files, and to change your personal information (name, address, phone numbers, email, and emergency contacts).  This project was built by using LAMP (Linux, Apache, MySQL. PHP) with a CORE framwork to include JavaScript and jQuery validation.</p>
        
        <table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th colspan="3">Contact Information</th>
    </tr>
  <tr>
    <td><strong>School:</strong></td>
    <td colspan="2">Harvard University</td>
    </tr>
  <tr>
    <td><strong>Course:</strong></td>
    <td colspan="2">CSCI E-15</td>
    </tr>
  <tr>
    <td><strong>Graduate Student:</strong></td>
    <td colspan="2">Larry Adams</td>
    </tr>
  <tr>
    <td><strong>Email:</strong></td>
    <td colspan="2">professorlarryadams@gmail.com</td>
    </tr>
</table>
        
<br /><br /><br /><br />

</div> 
        
<?php endif; ?>