<?php foreach($posts as $post): ?>

<br />

		<?php if($user): ?>
        		<div class="red"><h4>You are logged in as <?=$user->first_name;?> <?=$user->last_name;?></h4>
        		<p> Welcome to the Merchant Mariner Credential Secure Electronic Application System (MMSEAS)</p></div>
		<?php else: ?>
        	<div class="red"><h2>Secure Online Forms</h2></div>
		<?php endif; ?>
        
        <br />
        
        <p><a href="/posts/view_add"><img src="/public_html/images/icon.png" width="35" height="35" alt="Form" title="Application page 1"></a> <a href="/posts/view_add2"><img src="/public_html/images/icon.png" width="35" height="35" alt="Page 2" title="Application page 2"></a> <a href="/posts/view_uploads"><img src="/public_html/images/files.png" width="35" height="35" alt="uploads" title="View your uploads"></a> <a href="/posts/view_updates"><img src="/public_html/images/pages.jpeg" width="35" height="35" alt="updates" title="View your updates"></a></p>

	<div class="container_12 standard centered">
    <br />

<h3>Section I - Personal Data</h3>

<br />
  <div>
    <strong> 1 - 4. Legal Name, Alias, Social Security #, Reference #, Alien Registration #, Birthdate, and Nationality</strong></div>
    
<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th>First</th>
    <th>Middle</th>
    <th>Last</th>
    <th>Suffix</th>
    <th>Alias</th>
    <th>SSN</th>
    <th>Refernce #</th>
    <th>ARN</th>
    <th>DOB</th>
    <th>Nationality</th>
  </tr>
  <tr>
    <td><?=$post['fname']?></td>
    <td><?=$post['mname']?></td>
    <td><?=$post['lname']?></td>
    <td><?=$post['suffix']?></td>
    <td><?=$post['alias']?></td>
    <td><?=$post['ssn']?></td>
    <td><?=$post['ref_num']?></td>
    <td><?=$post['arn']?></td>
    <td><?=$post['birthDate']?></td>
    <td><?=$post['nationality']?></td>
  </tr>
</table>

	<strong>5. Birth Place (City, State, Country) and 6. Primary address</strong>
<table width="97%" border="1" cellspacing="1" cellpadding="1">
	  <tr>
    <th>City</th>
    <th>State</th>
    <th>Country</th>
    <th>Eye Color</th>
    <th>Hair Color</th>
    <th>Primary Address (No P.O. Boxes)</th>
    <th>City</th>
    <th>State</th>
    <th>Zip</th>
  </tr>
  <tr>
    <td><?=$post['birthCity']?></td>
    <td><?=$post['birthState']?></td>
    <td><?=$post['birthCountry']?></td>
    <td><?=$post['eyes']?></td>
    <td><?=$post['hair']?></td>
    <td><?=$post['address']?></td>
    <td><?=$post['city']?></td>
    <td><?=$post['state']?></td>
    <td><?=$post['zip']?></td>
  </tr>
</table>
    <strong>6b. Delivery Address, Phone, and email</strong>
<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zip</th>
    <th>Primary Phone</th>
    <th>Secondary Phone</th>
    <th>email</th>
  </tr>
  <tr>
    <td><?=$post['del_street']?></td>
    <td><?=$post['del_city']?></td>
    <td><?=$post['del_state']?></td>
    <td><?=$post['del_zip']?></td>
    <td><?=$post['phone']?></td>
    <td><?=$post['phone_secondary']?></td>
    <td><?=$post['email']?></td>
  </tr>
</table>
<strong>7a. Emergency Contact name &amp; address</strong>
<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th>Full Name</th>
   <th>Street</th>
    <th>City</th>
    <th>State</th>
    <th>Zip</th>
    <th>Relationship</th>
    <th>Phone</th>
    <th>Cell</th>
    <th>Email</th>
  </tr>
  <tr>
    <td><?=$post['POC']?></td>
    <td><?=$post['street']?></td>
    <td><?=$post['city_emerg']?></td>
    <td><?=$post['state_emerg']?></td>
    <td><?=$post['zip_emerg']?></td>
    <td><?=$post['relationship']?></td>
    <td><?=$post['emerg_phone']?></td>
    <td><?=$post['cell_phone']?></td>
    <td><?=$post['emerg_email']?></td>
  </tr>
</table>
<strong>7b. Relationship</strong>
<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th>Relationship</th>
    <th>Phone</th>
    <th>Cell Phone</th>
    <th>Email</th>
  </tr>
  <tr>
    <td><?=$post['relationship']?></td>
    <td><?=$post['emerg_phone']?></td>
    <td><?=$post['cell_phone']?></td>
    <td><?=$post['emerg_email']?></td>
  </tr>
</table>

<h3>Section II - Coast Guard Crednetials or Endorcement Type(s)<br />
</h3>
<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th><strong>Endorcement Categories:</strong></th>
    <th>Original</td>
    <th>Renewal</td>
    <th>Duplicate</td>
    <th>Raise in Grade</td>
    <th>Increase in Scope</td>
    <th>Document of Continiuty</td>
  </tr>
  <tr>
    <th>Officer:</th>
    <td><?=$post['original_officer']?></td>
    <td><?=$post['renewal_officer']?></td>
    <td><?=$post['duplicate_officer']?></td>
    <td><?=$post['raise_officer']?></td>
    <td><?=$post['increase_officer']?></td>
    <td><?=$post['continuity_officer']?></td>
  </tr>
  <tr>
    <th>Qualified Ratings</strong>:</th>
    <td><?=$post['original_qr']?></td>
    <td><?=$post['renewal_qr']?></td>
    <td><?=$post['duplicate_qr']?></td>
    <td><?=$post['raise_qr']?></td>
    <td><?=$post['increase_qr']?></td>
    <td><?=$post['continuity_qr']?></td>
  </tr>
  <tr>
    <th>Entry Level:</strong></th>
    <td><?=$post['original_entry']?></td>
    <td><?=$post['renewal_entry']?></td>
    <td><?=$post['duplicate_entry']?></td>
    <th colspan="3">&nbsp;</th>
  </tr>
  <tr>
    <th>STCW</strong></th>
    <td><?=$post['original_stcw']?></td>
    <td><?=$post['renewal_stcw']?></td>
    <td><?=$post['duplicate_stcw']?></td>
    <td><?=$post['raise_stcw']?></td>
    <td><?=$post['increase_stcw']?></td>
    <th>&nbsp;</th>
  </tr>
</table>
<br />
<table width="97%" height="68" border="1" cellpadding="1" cellspacing="1">
  <tr>
    <th>Description of Endorcement(s):</strong></th>
  </tr>
  <tr>
    <td><?=$post['description']?></td>
  </tr>
</table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
  	<th>Renewal Transaction only!</th>
  </tr>
  <tr>
    <td><?=$post['renewal_transaction']?></td>
  </tr>
</table>
<br />
</div>
</div>
</div>

<?php endforeach; ?>
