<?php foreach($posts as $post): ?>

<div class="container_12">

	<div class="standard centered">
    <br />

<h3>Section III - Mariner's Consent/Certification</h3>
<div class="nav"><a href="/posts/view">Page 1</a> | <a href="/posts/view2">Page 2</a> | <a href="/posts/uploads">Uploads</a> | <a href="/posts/updates">Updates</a></div>
<br />

<table width="97%" border="1" cellspacing="1" cellpadding="1">
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
	    <th>2. Did you volunteer for the Mariner Outreach System (MOS) Optional:
	      <?=$post['mos_no']?> | 
        <?=$post['mos_yes']?></th>
      </tr>
  </table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  
  <tr>
    <th><strong>3. Have you been a user of/or addicted to a dangerous drug, including marijuana, within the last 10 years?
      <?=$post['drugs']?>
      </strong></th>
  </tr>
  
</table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th>4. Did you agree to attached a signed statement of explanation for all convictions not previously disclosed?
      <?=$post['conviction_statement']?></th>
    
  </tr>
  </table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th><strong>5. The National Driver Registry (NDR) (Mandatory for Original, Renewal, or new Officer Endorsement):
      <?=$post['ndr_authorize']?>
      </strong></th>
  </tr>
  </table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th><strong>6. Document of Continuity: 
      <?=$post['continuity']?>
      </strong></th>
  </tr>
  </table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th><strong>7. Are you  under 18 years of age and a notarized statement of parental/guardian consent is attached: 
      <?=$post['parental_consent']?>
      </strong></th>
  </tr>
  </table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th colspan="4"><strong>8. Third Party Authorization (optional)</strong></tr>
  <tr>
    <td width="21%">8a. Saftey and Suitability </td>
    <td width="14%"><?=$post['sse_authorize	']?></td>
    <td width="26%">Name of Organization:      </td>
    <td width="39%"><?=$post['3rdPartyName']?></td>
    </tr>
  <tr>
    <td>8b. Medical </td>
    <td><?=$post['medical_authorize']?></td>
    <td>Point of Contact:       </td>
    <td><?=$post['3rdPartyPOC']?></td>
    </tr>
  <tr>
    <td>8c. Professional Qualifications</td>
    <td><?=$post['pq_authorize']?></td>
    <td>Address:      </td>
    <td><?=$post['3rdPartyStreet']?></td>
    </tr>
  <tr>
    <td>8d. Merchant Mariner Credential Delivery</td>
    <td><?=$post['delivery_authorize']?></td>
    <td>City, 
      
      State 
      
      , Zip Code:      </td>
    <td><?=$post['3rdPartyCity']?>
      <?=$post['3rdPartyState']?>
      <?=$post['3rdPartyZip']?></td>
    </tr>
  <tr>
    <td>8e. Act on my behalf </td>
    <td><?=$post['original_stcw']?></td>
    <td>Phone:      </td>
    <td><?=$post['3rdPartyPhone']?></td>
    </tr>
</table> 

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th><strong>10. Oath</strong> (Mandatory for Original Only):
      <?=$post['oath']?></th>
  </tr>
  
  </table>

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th>11. Applicant’s Signature: 
      <?=$post['e_signature']?></th>
  </tr>
  
  </table>
<br />
</div>
</div>
    
<?php endforeach; ?>
