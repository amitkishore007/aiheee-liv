<?php
session_start();
?>
<html>
<title>Control Panel : Grace Wallpaper</title>
<link href="img/style.css" rel="stylesheet" type="text/css">
<body>
<br>
<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#03617C" bgcolor="#FFFFFF">
  <tr>
    <td valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="80%" height="25" align="left" valign="middle" bgcolor="#03617C" class="style2" scope="col">&nbsp;Welcome <?php $username = $_SESSION['username'];?> <?php echo $username ;?>				</th>
        <th width="20%" align="center" valign="middle" bgcolor="#03617C" class="style2" scope="col">
			<?php			
				echo date('F d');
				echo ', ';
				echo date('Y');
			?></th>
      </tr>
      <tr>
        <th colspan="2" class="style77" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th height="22" colspan="2" class="style77" scope="col">Please use left navigation menu for various tasks. </th>
      </tr>
      <tr>
        <th colspan="2" align="center" valign="top" class="style77" scope="col">&nbsp;</th>
      </tr>
    </table></td>
  </tr>
</table>


</body>
</html>