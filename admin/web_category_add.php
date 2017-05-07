<?php
//ob_start();
//session_start();
//include_once("login_check_hd.php"); 
include_once("../PhpIncludes/connection_info.php");
include_once("../PhpIncludes/database_connection.php");

$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);
?>
<script language="JavaScript" type="text/javascript" src="cbrte/html2xhtml.js"></script>
<script language="JavaScript" type="text/javascript" src="cbrte/richtext_compressed.js"></script>
<script src='../js/jquery.js'></script>
<script>

window.onload=function(){
				//document.getElementById('').onclick=; 
			}

</script>
<script type="text/javascript">
	function submitForm()
	{
		if(document.memberform.heading.value=="")
		{
			alert("Please enter category heading");
			document.memberform.heading.focus();
			return false;
		}
	}
</script>
<html>
<title>Control Panel : Orisha Holidays</title>
<link href="img/style.css" rel="stylesheet" type="text/css">
<body>
<br>
<form name="memberform" id="memberform" action="web_category_add_inter.php" method="post" enctype="multipart/form-data">
  <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#03617C" bgcolor="#FFFFFF">
    <tr>
      <td valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <th height="25" align="left" valign="middle" bgcolor="#03617C" class="style2" scope="col">&nbsp;Website Management > Add Category </th>
        </tr>
        <tr>
          <th scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th align="center" valign="top" scope="col"><table  width="100%">
            <tr>
              <td height="22" colspan="2" align="left" valign="middle" bgcolor="#FFFFD5" class="style777"><strong class="style10">Add Category Heading </strong></td>
            </tr>            
            <tr>
              <td width="213" height="22" align="left" valign="middle" class="style77">Category Heading*</td>
              <td width="471" height="22" colspan="1" align="left" valign="middle" class="style77">
			  	<input name="heading" type="text" class="style77" value="" size="50">		  </td>
            </tr>                      
            <tr>
              <td height="22" align="left" valign="middle" class="style77">Numbering</td>
              <td height="22" colspan="1" align="left" valign="middle" class="style77"><input type="text" name="numbering" value="" style="width:40px;">			  </td>
            </tr>	
			<tr>
              <td height="22" align="left" valign="middle" class="style77">Upload Image <br>
[W:288 H: 278]</td>
              <td height="22" colspan="1" align="left" valign="middle" class="style77"><input name="imgName" type="file" class="style77" id="imgName" style=" font-size:10px; "  />			  </td>
            </tr>	
            <tr>
              <td height="22" colspan="2" align="center" class="style777" ><input name="submit"   type="submit" class="style77"  value=' Add ' onClick="return submitForm();" />
                      <input name="submit"   type="reset" class="style77"  value='Reset' />              </td>
            </tr>
            <tr>
              <td height="10" colspan="2" align="center" ></td>
            </tr>
          </table></th>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>