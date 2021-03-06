<?php
/* 
When setting configurations, remember that any app is also impacted by the configurations found in /core/config/config.php;
Most of the core configs can be overwritten here on the app level.
*/

//define('TIME_FORMAT', 'F j, Y g:ia');

//define('TIME_NOW', 'F j, Y g:ia');

# What is the name of this app?
	define('APP_NAME', 'Secure Online Forms');  

# When email is sent out from the server, where should it come from?
# Ideally, this should match the domain name
	define('APP_EMAIL', 'admin@p4.allthingseuropean.com'); 

/* 
A email designated to receive messages from the server. Examples:
 	* When there's a MySQL error on the live server it will send it to this email
 	* If you're BCCing yourself on outgoing emails you may want them to go there
 	* Logs, cron results, errors, etc.
 	
 	Some might want this to be the same as the APP_EMAIL, others might want to create a designated gmail address for it
*/ 	
	define('SYSTEM_EMAIL', 'admin@p4.allthingseuropean.com'); 

# Default DB name for this app
	define('DB_NAME', 'allthin1_p4_allthingseuropean_com'); 

# Timezone
	define('TIMEZONE', 'America/New_York');

# If your app is going to have outgoing emails, you should fill in your SMTP settings
# For this you could use gmail SMTP or something like http://sendgrid.com/
	//define('SMTP_HOST', '');
	//define('SMTP_USERNAME', '');
	//define('SMTP_PASSWORD', '');

# For extra security, you might want to set different salts than what the core uses
	define('PASSWORD_SALT', '2m7gkXbu6OW4jnypWEqevBIrHDOJit');
	define('TOKEN_SALT', 'YLQdR7gVUHoWo0mEx2yBgGzQlZMYfW9Ab');