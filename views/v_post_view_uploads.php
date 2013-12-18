<?php foreach($posts as $post): ?>

<div class="container_12 standard">

<table width="97%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th colspan="4">Uploaded Documents</th>
  </tr>
  <tr>
    <th>User_id</th>
    <th>Upload_id</th>
    <th>Uploads</th>
    <th>Created</th>
  </tr>
  <tr>
    <td height="41"><?=$post['user_id']?></td>
    <td><?=$post['upload_id']?></td>
    <td><?=$post['uploads']?></td>
    <td><?=$post['created]?></td>
  </tr>
  </table>

</div>

<?php endforeach; ?>
