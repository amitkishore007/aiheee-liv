<?php
//ob_start();
//session_start();
//include_once("login_check_hd.php"); 
include_once("../PhpIncludes/connection_info.php");
include_once("../PhpIncludes/database_connection.php");

$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);

$categoryid = (isset($_REQUEST['categoryid']) and $_REQUEST['categoryid'] != '' ) ?  $_REQUEST['categoryid'] :  header("Location: web_category_view.php?q=err");

$categoryQuery = "select * from category where categoryid='$categoryid'";
				//echo $serviceQuery;
$categoryQueryResult = $connectionObject->executeQuery($categoryQuery);
if(!$categoryQueryResult)
{ // if query failed to execute then print error msg
	$errorMsg = mysql_errno()." : failed to display services category";
	echo $errorMsg;
	//header("location: {$_SERVER['PHP_SELF']}?error=$errorMsg");
	exit();
}
$categoryRow = mysql_fetch_assoc($categoryQueryResult);
?>
<script language="JavaScript" type="text/javascript" src="cbrte/html2xhtml.js"></script>
<script language="JavaScript" type="text/javascript" src="cbrte/richtext_compressed.js"></script>
<script src='../js/jquery.js'></script>
<script>

window.onload=function(){
				//document.getElementById('').onclick=; 
			}

</script>

<html>
<title>Control Panel : Ola & Lily</title>
<link href="img/style.css" rel="stylesheet" type="text/css">
<body>
<br>
<form name="memberform" id="memberform" action="web_category_edit_inter.php" method="post" enctype="multipart/form-data">
  <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#03617C" bgcolor="#FFFFFF">
    <tr>
      <td valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <th height="25" align="left" valign="middle" bgcolor="#03617C" class="style2" scope="col">&nbsp;Website Management > View/Edit/Delete Category Detail </th>
        </tr>
        <tr>
          <th align="right" valign="middle" scope="col"><a href="javascript:history.back();"><span class="style79">Back</span></a>&nbsp;</th>
        </tr>
        <tr>
          <th align="center" valign="top" scope="col"><table  width="100%">
            <tr>
              <td height="22" colspan="2" align="left" valign="middle" bgcolor="#FFFFD5" class="style777"><strong class="style10"> Category  Detail </strong></td>
            </tr>
            <tr>
              <td width="236" height="22" align="left" valign="middle" class="style77"> Category Heading 
                <input type="hidden" name="categoryid" id="categoryid" value="<?php echo $categoryRow['categoryid']; ?>"></td>			  
              <td width="448" height="22" align="left" valign="middle" class="style77">			  	
                	<input name="heading" type="text" class="style77" value="<?php echo stripslashes($categoryRow['heading']); ?>" size="50">               
             	  </td>
            </tr>
            
            <tr>
              <td height="22" align="left" valign="middle" class="style77">Numbering</td>
              <td height="22" colspan="2" align="left" valign="middle" class="style11"><input type="text" name="numbering" value="<?php echo $categoryRow['numbering']; ?>" style="width:40px;"></td>
            </tr> 
			<!--<tr>
              <td height="22" align="left" valign="top" class="style77">Product Image <br>              <br /></td>
              <td width="383" height="22" align="left" valign="top" class="style77"><input name="imgName" type="file" class="style77">
                <br>
                <span class="style1">[file size:upto 1 MB; width 288px,height 278px; type:.JPG,.GIF]</span> </td>
              <td width="194" align="center" valign="top" class="style77"><span class="style777"><img src="../productImage/small/<?php echo $categoryRow['imgName']; ?>" border="1" class="style8" width="100" height="97"/></span></td>
            </tr> -->          
            <tr>
              <td height="22" colspan="2" align="center" class="style777" ><input name="submit" type="submit" value="Update" onClick="return submitForm();"  />
&nbsp;&nbsp;<!-- <a href="web_category_delete.php?categoryid=<?php //echo stripslashes($categoryRow['categoryid'])?>" title="delete"><img src="img/delete.jpg"  width="50" height="50" border="0" /></a> --></td>
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