<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>

</head>

<body>
<table width="97%" border="1" cellspacing="1" cellpadding="1">
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
    <<th>Hair</th>
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
    <td>&<?=$post['hair']?></td>
  </tr>
</table>
<br />

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th>6. Contact Information and Addresses</th>
  </tr>
  <tr>
    <td><?=$post['address']?> <?=$post['state']?> <?=$post['zip']?></td>
  </tr>
  <tr>
    <th><strong>6b. Delivery Address, Phone, and email</strong></th>
  </tr>
  <tr>
    <td><?=$post['del_street']?> <?=$post['del_city']?>, <?=$post['del_state']?> <?=$post['del_zip']?> | 
    <?=$post['phone']?> | 
    <?=$post['phone_secondary']?> | 
    <?=$post['email']?></td>
  </tr>
  <tr>
    <td><strong>7a. Emergency Contact Name &amp; Address</strong></td>
  </tr>
  <tr>
    <td><?=$post['POC']?> <?=$post['street']?> <?=$post['city_emerg']?> <?=$post['state_emerg']?> <?=$post['zip_emerg']?> | 
    <?=$post['relationship']?> | 
    <?=$post['emerg_phone']?> | 
    <?=$post['cell_phone']?> | </td>
  </tr>
</table>

</body>
</html>
