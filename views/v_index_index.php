<?php if($user): ?>
        <div><h4>You are logged in as <?=$user->first_name;?> <?=$user->last_name;?></h4>
          <h3>Merchant Mariner Credential Secure Electronic Application System (MMSEAS)</h3>
       
        <p>You have succefully login and are now ready to use our online forms.  The above menu is our main navigation throughout the website.</p>
        
        <p>You may view your results by going to the profile page and using the sub-menu for eachpage.</p>
            
</div>
        
        
<?php else: ?>
        <div class="red"><h2>Secure Online Forms</h2></div>
<h2>Project Overview</h2>

<p>My project is to develop a secure online application that federal and state governments can use to eliminate the paper world.  The Government Accounting Office (GAO) stated that our government will waste over $440 millions dollars in 2013 on publications that were never used.</p>

<p>Technology advancements in secure and low cost for web hosting presents and opportunity for any business to conduct transaction online for less than $10 per month.  This application was built by using secure socket layering (SSL),  LAMP (Linux, Apache, MySQL, PHP) framework that incoprated JavaScripting and jquery validation for less than $10.</p>

<h3> It's not the technology that is the problem - it is the humans who do not understand it!</h3>


        
        <h2>Project 4</h2>
        
        <p>In order to gain access you need to signup with your <strong>email</strong>, <strong>name</strong>, and <strong>strong password</strong> which will create an account.</p>
        
        <p>As a graduate student at Harvard University  my project is to build a secure online application with secure socket layering (SSL), ability to upload files, and to change your personal information (name, address, phone numbers, email, and emergency contacts).  This project was built by using LAMP (Linux, Apache, MySQL. PHP) with a CORE framwork to include JavaScript and jQuery validation.</p>
        <h2>Contact Information</h2>
        <p>
        <strong>School: </strong>Harvard University<br />
        <strong>Course:</strong> <a href="http://dwa15.com/Syllabus/General" title="CSCI E-15 Course" target="_blank">CSCI E-15</a><br />
        <strong>Graduate Student: </strong>Larry Adams<br />
        <strong>Email:</strong> professorlarryadams@gmail.com</p>  
        
<?php endif; ?>