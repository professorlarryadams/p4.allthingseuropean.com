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
    <td><?=$post['created']?></td>
  </tr>
  </table>

</div>

<?php endforeach; ?>
