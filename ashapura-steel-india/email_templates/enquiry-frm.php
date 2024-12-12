<?php 
$site_path = 'http://localhost/creative-leather/';
$message='  
<html>
<table width="600" class="table" style="border:1px solid #333; text-align: center;">
<thead style="background-color: blue;color: #fff;">
<tr>
<th colspan="4" style="padding: 10px 0">
Enquiry Information
</th>
</tr>
</thead>
<tbody>
<tr>
<td style="padding: 10px 0;border: 1px solid">Name</td>
<td style="padding: 10px 0;border: 1px solid">'.trim($_POST['name']).' </td>
</tr>
<tr>
<td style="padding: 10px 0;border: 1px solid">Email ID</td>
<td style="padding: 10px 0;border: 1px solid">'.trim($_POST['email']).' </td>
</tr>
<tr>
<td style="padding: 10px 0;border: 1px solid">Phone</td>
<td style="padding: 10px 0;border: 1px solid">'.trim($_POST['phone']).' </td>
</tr>
<tr>
<td style="padding: 10px 0;border: 1px solid">Message</td>
<td style="padding: 10px 0;border: 1px solid">'.trim($_POST['message']).' </td>
</tr>
</tbody>
</table>
</html>';
                  
                  
                  
?>