<?php if($user): ?>
        <div><h4>You are logged in as <?=$user->first_name;?> <?=$user->last_name;?></h4>
        
        <p> Welcome to the Merchant Mariner Credential Secure Electronic Application System (MMSEAS)</p></div>
<?php else: ?>
        <div class="red"><h2>Secure Online Forms</h2></div>
<h2>Project Oview</h2>
<p>The purpose of this project is to provide a economic solution to paper forms in the federal government.  The forms allow a secure connection to a database which elimates the need for paper applications and manual data processing.  In order to gain access you need to signup with your email, name, and password which will create an account.</p>
        
        <h2>Project 4</h2>
        
        <p>I am a graduate student at Harvard Universiy and this project includes secure online forms, ability to upload files, and to update personal information (name change, address, phone numbers, email, and emergency contacts).  The project was built in a LAMP enviroment (Linux, Apache, MySQL. PHP) with a CORE framwork with JavaScript and jQuery validation.</p>
        <h2>Contact Information</h2>
        <p><strong>Student: </strong>Larry Adams</p>
        <p><strong>Email:</strong> professorlarryadams@gmail.com</p>
        <p><strong>Course:</strong> <a href="http://dwa15.com/Syllabus/General" title="CSCI E-15 Course" target="_blank">CSCI E-15</a></p>
        <p><strong>School: </strong>Harvard University</p>
        
<?php endif; ?>