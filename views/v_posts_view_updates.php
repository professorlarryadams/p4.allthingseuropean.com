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

<div class="container_12 standard">

<br />

<table width="97%" border="1" cellspacing="1" cellpadding="1">

<tr>
<td colspan="10"><h3>Section III - Mariner's Consent/Certification</h3></td>
</tr>

  <tr>
    <th colspan="10"><strong>1 - 4. Legal Name, Alias, Social Security #, Reference #, Alien Registration #, Birthdate, and Nationality</strong></th>
  </tr>
  <tr>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name </th>
    <th>Suffix</th>
    <th>Alias</th>
    <th>Reference #</th>
    <th>ARN</th>
    <th>Nationality</th>
    <th>Eyes</th>
    <th>Hair</th>
  </tr>
  <tr>
    <td><?=$post['fname']?></td>
    <td><?=$post['mname']?></td>
    <td><?=$post['lname']?></td>
    <td><?=$post['suffix']?></td>
    <td><?=$post['alias']?></td>
    <td><?=$post['ref_num']?></td>
    <td><?=$post['arn']?></td>
    <td><?=$post['birthDate']?></td>
    <td><?=$post['eyes']?></td>
    <td><?=$post['hair']?></td>
  </tr>
</table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th colspan="10">6. Contact Information (Address, Phone, Email) </th>
    </tr>
  <tr>
    <th>Street</th>
    <th>City</th>
    <th>State</th>
    <th>Zip Code</th>
    <th>Primary Phone</th>
    <th>Secondary Phone</th>
    <th>Email</td>
    </tr>
  <tr>
    <td><?=$post['address']?></td>
    <td><?=$post['city']?></td>
    <td><?=$post['state']?></td>
    <td><?=$post['zip']?></td>
    <td><?=$post['phone']?></td>
    <td><?=$post['phone_secondary']?></td>
    <td><?=$post['email']?></td>
    </tr>
</table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th colspan="4">6b. Delivery Address (Street, City, State, Zip)</th>
    </tr>
  <tr>
    <th>Street</th>
    <th>City</th>
    <th>State</th>
    <th>Zip Code</th>
    </tr>
  <tr>
    <td><?=$post['del_street']?></td>
    <td><?=$post['del_city']?></td>
    <td><?=$post['del_state']?></td>
    <td><?=$post['del_zip']?></td>
    </tr>
</table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th colspan="9">7a. Emergency Contact Information</th>
    </tr>
  <tr>
    <th>Contact Name</th>
    <th>Street</th>
    <th>City</th>
    <th>State</th>
    <th>Zip Code</th>
    <th>Relationship</th>
    <th>Phone</th>
    <th>Cell</th>
    <th>Email</th>
    </tr>
  <tr>
    <td><?=$post['emerg_contact']?></td>
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


<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th>Additional Comments</th>
  </tr>
  <tr>
    <td><?=$post['comments']?></td>
  </tr>
</table>

  </div>

<?php endforeach; ?>