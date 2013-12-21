<?php foreach($posts as $post): ?>

<br />

		<?php if($user): ?>
        		<div class="red"><h4>You are logged in as <?=$user->first_name;?> <?=$user->last_name;?></h4>
        		<p> Welcome to the Merchant Mariner Credential Secure Electronic Application System (MMSEAS)</p></div>
		<?php else: ?>
        	<div class="red"><h2>Secure Online Forms</h2></div>
		<?php endif; ?>
        
        <div><a href="/posts/view_add"><img src="/images/home.png" width="35" height="35" alt="Form" title="Application page 1"></a> <a href="/posts/view_add"><img src="/images/icon.png" width="35" height="35" alt="Form" title="Application page 1"></a> <a href="/posts/view_add2"><img src="/images/icon.png" width="35" height="35" alt="Page 2" title="Application page 2"></a> <a href="/posts/view_uploads"><img src="/images/files.png" width="35" height="35" alt="uploads" title="View your uploads"></a> <a href="/posts/view_updates"><img src="/images/pages.jpeg" width="35" height="35" alt="updates" title="View your updates"></a></div>
        <div>Navigation Menu</div>
<div class="container_12 standard centered">
<br />


<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
  <td><h3>Section III - Mariner's Consent/Certification</h3></td>
  </tr>
  
  <tr>
    <th>1. Transportation Workers's ID Credential (TWIC)</th>
    </tr>
  <tr>
    <td>Have you applied for a TWIC? <?=$post['twic_receipt']?></td>
    </tr>
  
  <tr>
    <td>Are you exempt from holding a valid TWIC?
      <?=$post['twic_exempt']?></td>
  </tr>
</table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
	  <tr>
	    <th>2. Did you volunteer for the Mariner Outreach System (MOS) Optional</th>
      </tr>
	  <tr>
	    <td><?=$post['mos_no']?>
|
  <?=$post['mos_yes']?></td>
      </tr>
  </table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  
  <tr>
    <th><strong>3. Have you been a user of/or addicted to a dangerous drug, including marijuana, within the last 10 years?
      
      </strong></th>
  </tr>
  <tr>
    <td><strong>
      <?=$post['drugs']?>
    </strong></td>
  </tr>
  
</table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th>4. Did you agree to attached a signed statement of explanation for all convictions not previously disclosed?      </th>
    
  </tr>
  <tr>
    <td><?=$post['conviction_statement']?></td>
  </tr>
  </table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th><strong>5. The National Driver Registry (NDR) (Mandatory for Original, Renewal, or new Officer Endorsement):
      
      </strong></th>
  </tr>
  <tr>
    <td><strong>
      <?=$post['ndr_authorize']?>
    </strong></td>
  </tr>
  </table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th><strong>6. Document of Continuity: 
      
      </strong></th>
  </tr>
  <tr>
    <td><strong>
      <?=$post['continuity']?>
    </strong></td>
  </tr>
  </table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th><strong>7. Are you  under 18 years of age and a notarized statement of parental/guardian consent is attached: 
      
      </strong></th>
  </tr>
  <tr>
    <td>
      <?=$post['parental_consent']?>
    </td>
  </tr>
  </table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th colspan="4"><strong>8. Third Party Authorization (optional)</strong></tr>
  <tr>
    <td width="26%" style="text-align:left"><strong>8a. Saftey and Suitability :</strong></td>
    <td width="7%"><?=$post['sse_authorize']?></td>
    <td width="27%" style="text-align:right"><strong>Organization:</strong></td>
    <td width="40%"><?=$post['3rdPartyName']?></td>
    </tr>
  <tr>
    <td style="text-align:left"><strong>8b. Medical :</strong></td>
    <td><?=$post['medical_authorize']?></td>
    <td style="text-align:right"><strong>Point of Contact:       </strong></td>
    <td><?=$post['3rdPartyPOC']?></td>
    </tr>
  <tr>
    <td style="text-align:left"><strong>8c. Professional Qualifications:</strong></td>
    <td><?=$post['pq_authorize']?></td>
    <td style="text-align:right"><strong>Address:      </strong></td>
    <td><?=$post['3rdPartyStreet']?></td>
    </tr>
  <tr>
    <td style="text-align:left"><strong>8d. Merchant Mariner Credential Delivery:</strong></td>
    <td><?=$post['delivery_authorize']?></td>
    <td style="text-align:right"><strong>City, 
      
      State 
      
      , Zip:      </strong></td>
    <td><?=$post['3rdPartyCity']?>
      <?=$post['3rdPartyState']?>
      <?=$post['3rdPartyZip']?></td>
    </tr>
  <tr>
    <td style="text-align:left"><strong>8e. Act on my behalf :</strong></td>
    <td><?=$post['original_stcw']?></td>
    <td style="text-align:right"><strong>Phone:      </strong></td>
    <td><?=$post['3rdPartyPhone']?></td>
    </tr>
</table> 

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th><strong>10. Oath</strong> (Mandatory for Original Only):      </th>
  </tr>
  <tr>
    <td><?=$post['oath']?></td>
  </tr>
  
  </table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th>11. Applicant’s Signature:      </th>
  </tr>
  <tr>
    <td><?=$post['e_signature']?></td>
  </tr>
  
  </table>
<br />
</div>
</div>
    
<?php endforeach; ?>
