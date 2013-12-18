<?php foreach($posts as $post): ?>

<div class="container_12">

	<div class="standard centered">
    <br />

<h3>Section III - Mariner's Consent/Certification</h3>

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
    <td width="36%" style="text-align:right">8a. Saftey and Suitability </td>
    <td width="17%"><?=$post['sse_authorize	']?></td>
    <td width="16%" style="text-align:right">Name of Organization:      </td>
    <td width="31%"><?=$post['3rdPartyName']?></td>
    </tr>
  <tr>
    <td style="text-align:right">8b. Medical </td>
    <td><?=$post['medical_authorize']?></td>
    <td style="text-align:right">Point of Contact:       </td>
    <td><?=$post['3rdPartyPOC']?></td>
    </tr>
  <tr>
    <td style="text-align:right">8c. Professional Qualifications</td>
    <td><?=$post['pq_authorize']?></td>
    <td style="text-align:right">Address:      </td>
    <td><?=$post['3rdPartyStreet']?></td>
    </tr>
  <tr>
    <td style="text-align:right">8d. Merchant Mariner Credential Delivery</td>
    <td><?=$post['delivery_authorize']?></td>
    <td style="text-align:right">City, 
      
      State 
      
      , Zip Code:      </td>
    <td><?=$post['3rdPartyCity']?>
      <?=$post['3rdPartyState']?>
      <?=$post['3rdPartyZip']?></td>
    </tr>
  <tr>
    <td style="text-align:right">8e. Act on my behalf </td>
    <td><?=$post['original_stcw']?></td>
    <td style="text-align:right">Phone:      </td>
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
