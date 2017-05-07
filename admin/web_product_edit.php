<?php
ob_start();
session_start();
//include_once("login_check_hd.php"); 
include_once("../PhpIncludes/connection_info.php");
include_once("../PhpIncludes/database_connection.php");

$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);



$productid = (isset($_REQUEST['productid']) and $_REQUEST['productid'] != '' ) ?  $_REQUEST['productid'] :  header("Location: web_product_view.php?q=err");


$productQuery = "select * from product where productid = '$productid'";
				
$productQueryResult = $connectionObject->executeQuery($productQuery);
if(!$productQueryResult)
{ // if query failed to execute then print error msg
	$errorMsg = mysql_errno()." : failed to display Product";
	echo $errorMsg;
	//header("location: {$_SERVER['PHP_SELF']}?error=$errorMsg");
	exit();
}
$productRow = mysql_fetch_assoc($productQueryResult);

$categoryid=$productRow['categoryid'];
$subcategoryid=$productRow['subcategoryid'];
$subsubcategoryid=$productRow['subsubcategoryid'];

                  
?>
<script language="JavaScript" type="text/javascript" src="cbrte/html2xhtml.js"></script>
<script language="JavaScript" type="text/javascript" src="cbrte/richtext_compressed.js"></script>
<script src='../js/jquery.js'></script>
<script src='../js/ajaxfunction.js'></script>
<html>
<title>Control Panel : Crown Hearware</title>
<link href="img/style.css" rel="stylesheet" type="text/css">
<body>
<br>

  <table width="700" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#03617C" bgcolor="#FFFFFF">
    <tr>
      <td valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <th height="25" align="left" valign="middle" bgcolor="#03617C" class="style2" scope="col">&nbsp;Website Management > View Product/Service </th>
        </tr>
        <tr>
          <th align="right" valign="middle" scope="col"><a href="javascript:history.back();"><span class="style79">Back</span></a>&nbsp;</th>
        </tr>
        <tr>
          <th align="center" valign="top" scope="col"><table  width="100%">
            <tr>
              <td height="22" colspan="3" align="left" valign="middle" bgcolor="#FFFFD5" class="style777"><strong class="style10"> Product/Service Detail </strong></td>
            </tr>
			<form name="memberform1" id="memberform1" action="web_product_edit.php?productid=<?php echo $productid;?>" method="post">
            <tr>
              <td height="22" align="left" valign="middle" class="style77"> Category*  </td>		  			   		  
              <td height="22" colspan="2" align="left" valign="middle" class="style77">
			  <select name="categoryid" class="style77" id="categoryid" onChange="this.form.submit();">
			  <option value="" selected="selected">Select Category</option>
			  <?php
			    $catid=$_REQUEST['categoryid'];
				$catid  = $_REQUEST['categoryid'];
				  if ($catid=='')
				  {
					$catid = $categoryid;
				  }
			  	$categoryQuery = "select categoryid, heading from category order by categoryid asc";
				$categoryQueryResult = $connectionObject->executeQuery($categoryQuery);
				if(!$categoryQueryResult)
  				{
					echo mysql_error()." Error: failed to display category data";
					exit();
  				}
				while($categoryRow = mysql_fetch_assoc($categoryQueryResult))
				{
			  ?>
			  		<option value="<?php echo $categoryRow['categoryid']; ?>" <?php if ($categoryRow['categoryid']==$catid) echo 'selected';?>><?php echo $categoryRow['heading']; ?></option>
              <?php
			  	}
			  ?>            
              </select>		  </td>
            </tr>
			</form>
			
			<form name="memberform2" id="memberform2" action="web_product_edit.php?productid=<?php echo $productid;?>" method="post">
            <tr>
              <td width="117" height="22" align="left" valign="middle" class="style77"> Subcategory</td>
              <td height="22" colspan="2" align="left" valign="middle" class="style77">
			  <?php
			  $catid  = $_REQUEST['categoryid'];
				  if ($catid=='')
				  {
					$catid = $categoryid;
				  }
			  $subcatid  = $_REQUEST['subcategoryid'];
				  if ($subcatid=='')
				  {
					$subcatid = $subcategoryid;
				  }
			  ?>
			  <div id="divSubcategory">
			  <select name="subcategoryid" class="style77" id="subcategoryid" style="width:175px;" onChange="this.form.submit();" >
			  	<option value="" <?php if ($subcatid=='') echo 'selected';?>>Select Subcategory</option>   
				<?php
				$subcategoryQuery = "select subcategoryid, heading from subcategory where categoryid='$catid' order by subcategoryid asc";
				$subcategoryQueryResult = $connectionObject->executeQuery($subcategoryQuery);
				if(!$subcategoryQueryResult)
  				{
					echo mysql_error()." Error: failed to display sub category data";
					exit();
  				}
				while($subcategoryRow = mysql_fetch_assoc($subcategoryQueryResult))
				{
				?>
				<option value="<?php echo $subcategoryRow['subcategoryid']; ?>" <?php if ($subcategoryRow['subcategoryid']==$subcatid) echo 'selected';?>><?php echo $subcategoryRow['heading']; ?></option>
              <?php
			  	}
			  ?>            
              </select>	
			  <input name="categoryid" type="hidden" value="<?php echo $catid;?>">
			  </div></td>
            </tr>
			</form>
			
			<form name="memberform" id="memberform" action="web_product_edit_inter.php" method="post" enctype="multipart/form-data">
            <tr>
             <!-- <td height="22" align="left" valign="middle" class="style77">Sub Subcategory</td>
              <td height="22" colspan="2" align="left" valign="middle" class="style77">
			  	<div id="divSubsubcategory">
			  <?php
			  /*$catid  = $_REQUEST['categoryid'];
				  if ($catid=='')
				  {
					$catid = $categoryid;
				  }
			  $subcatid  = $_REQUEST['subcategoryid'];
				  if ($subcatid=='')
				  {
					$subcatid = $subcategoryid;
				  }
			   $subsubcategoryid = $_REQUEST['subsubcategoryid'];
				  if ($subsubcatid=='')
				  {
					$subsubcatid = $subsubcategoryid;
				  }*/
			  ?>
			  <select name="subsubcategoryid" class="style77" id="subsubcategoryid" style="width:175px;">
			  	<option value="" <?php //if ($subsubcatid=='') echo 'selected';?>>Select Sub Subcategory</option> 
				<?php
				/*$subsubcategoryQuery = "select subsubcategoryid, heading from subsubcategory where subcategoryid='$subcatid' and categoryid='$catid' order by subcategoryid asc";
				$subsubcategoryQueryResult = $connectionObject->executeQuery($subsubcategoryQuery);
				if(!$subsubcategoryQueryResult)
  				{
					echo mysql_error()." Error: failed to display subsub category data";
					exit();
  				}
				while($subsubcategoryRow = mysql_fetch_assoc($subsubcategoryQueryResult))
				{*/
				?>
				<option value="<?php //echo $subsubcategoryRow['subsubcategoryid']; ?>" <?php //if ($subsubcategoryRow['subsubcategoryid']==$subsubcatid) echo 'selected';?>><?php //echo $subsubcategoryRow['heading']; ?></option>
              <?php
			  	//}
			  ?>                       
              </select>	-->
			  <input name="categoryid" type="hidden" value="<?php echo $catid;?>">
			  <input name="subcategoryid" type="hidden" value="<?php echo $subcatid;?>">
			  </div>			  </td>
            </tr>
            <tr>
              <td height="22" align="left" valign="middle" class="style77"> Product Heading*
			    <input type="hidden" name="productid" id="productid" value="<?php echo $productRow['productid']; ?>">			  </td>			  
              <td height="22" colspan="2" align="left" valign="middle" class="style77"><input name="heading" type="text" class="style77" id="heading" value="<?php echo stripslashes($productRow['heading'])?>" size="70" /></td>
            </tr>
			<tr>
              <td height="22" align="left" valign="middle" class="style77">Product ID</td>
              <td height="22" colspan="2" align="left" valign="middle" class="style77"><input name="product_id" type="text" class="style77" value="<?php echo $productRow['product_id']; ?>"> 
              </td>
            </tr>
		    <tr>
              <td height="22" align="left" valign="middle" class="style77">Price</td>
              <td height="22" colspan="2" align="left" valign="middle" class="style77"><input name="price" type="text" class="style77" value="<?php echo $productRow['price']; ?>"> 
              [INR 50,000] </td>
            </tr>
			<tr>
              <td height="22" align="left" valign="middle" class="style77">Numbering</td>
              <td height="22" colspan="1" align="left" valign="middle" class="style77"><input type="text" name="numbering" value="<?php echo $productRow['numbering']; ?>" style="width:40px;"></td>
            </tr>			
            <!--<tr>
              <td height="22" align="left" valign="middle" class="style77">Website URL </td>
              <td height="22" colspan="2" align="left" valign="middle" class="style77"><input name="URL" type="text" class="style77" id="URL" value="http://www." size="70" /></td>
            </tr>-->
            <tr>
              <td height="22" align="left" valign="middle" class="style77">Priority</td>
              <td height="22" colspan="2" align="left" valign="middle" class="style77">
			  <?php
			  	$priority = $productRow['priority'];
				if($priority==1)
				{
			  ?>
			  	<input type="checkbox" name="priority" checked="checked">
			  	&nbsp;<span class="style11">[if you do not wanted to show this Product on home page please click on checkbox.]</span>
			  <?php
			  	}elseif($priority==0)
				{
			  ?>
			  	<input type="checkbox" name="priority">&nbsp;<span class="style11">[if you wanted to show this Product on home page please click on checkbox.]</span>			  <?php
			  	}
			  ?>			  </td>
            </tr>
            			
            <tr>
              <td height="22" align="left" valign="middle" class="style77">Description/Detail</td>
              <td height="22" colspan="2" align="left" valign="middle" class="style11">&nbsp;</td>
            </tr>
            <tr>
              <td height="22" colspan="3" align="left" valign="middle" class="style77">
			    <?php
				function rteSafe($strText) {
					//returns safe code for preloading in the RTE
					$tmpString = $strText;
					
					//convert all types of single quotes
					$tmpString = str_replace(chr(145), chr(39), $tmpString);
					$tmpString = str_replace(chr(146), chr(39), $tmpString);
					$tmpString = str_replace("'", "&#39;", $tmpString);
					
					//convert all types of double quotes
					$tmpString = str_replace(chr(147), chr(34), $tmpString);
					$tmpString = str_replace(chr(148), chr(34), $tmpString);
				//	$tmpString = str_replace("\"", "\"", $tmpString);
					
					//replace carriage returns & line feeds
					$tmpString = str_replace(chr(10), " ", $tmpString);
					$tmpString = str_replace(chr(13), " ", $tmpString);
					
					return $tmpString;
				}
				?>
				
				<script>
				function submitForm() {
				
				
					//make sure hidden and iframe values are in sync for all rtes before submitting form
					updateRTEs();
					
					if (document.memberform.categoryid.value=="")
					{
						alert("Please select category heading");
						document.memberform.categoryid.focus()  
						return false;
					}
					if (document.memberform.heading.value=="")
					{
						alert("Please enter product name");
						document.memberform.heading.focus()  
						return false;
					}
					/*
					if (document.memberform.subcategoryid.value=="")
					{
						alert("Please select subcategory heading");
						document.memberform.subcategoryid.focus()  
						return false;
					}
					
					if(document.memberform.heading.value=="")
					{
						alert("Please enter Product heading");
						document.memberform.heading.focus();
						return false;
					}
					*/	
					if(document.getElementById('memberform').submit())
					{
						return true;
					}											
					
				}
				initRTE("cbrte/images/", "cbrte/", "", true);
				</script>
				<noscript>
				<p><b>Javascript must be enabled to use this form.</b></p>
				</noscript>
				<script language="JavaScript" type="text/javascript">
				<!--
				//build new richTextEditor
				var rte1 = new richTextEditor('newsContent');
				
				rte1.html ='<?php echo rteSafe(stripslashes($productRow['detail']))?>';
				//enable all commands for demo
				rte1.cmdFormatBlock = true;
				rte1.cmdFontName = true;
				rte1.cmdFontSize = true;
				rte1.cmdIncreaseFontSize = true;
				rte1.cmdDecreaseFontSize = true;
				
				rte1.cmdBold = true;
				rte1.cmdItalic = true;
				rte1.cmdUnderline = true;
				rte1.cmdStrikethrough = true;
				rte1.cmdSuperscript = true;
				rte1.cmdSubscript = true;
				
				rte1.cmdJustifyLeft = true;
				rte1.cmdJustifyCenter = true;
				rte1.cmdJustifyRight = true;
				rte1.cmdJustifyFull = true;
				rte1.cmdInsertUnorderedList = true;
				
				rte1.cmdOutdent = true;
				rte1.cmdIndent = true;
				
				rte1.cmdInsertHorizontalRule = true;
				rte1.cmdInsertOrderedList = true;
				rte1.cmdForeColor = true;
				rte1.cmdHiliteColor = true;
				rte1.cmdInsertLink = true;
				rte1.cmdInsertImage = false;
				rte1.cmdInsertSpecialChars = true;
				rte1.cmdInsertTable = true;
				rte1.cmdSpellcheck = true;
				
				rte1.cmdCut = true;
				rte1.cmdCopy = true;
				rte1.cmdPaste = true;
				rte1.cmdUndo = true;
				rte1.cmdRedo = true;
				rte1.cmdRemoveFormat = true;
				rte1.cmdUnlink = true;
				
				rte1.toggleSrc = true;
				
				rte1.build();
				//-->
				</script>			  </td>
              </tr>           
            <tr>
              <td height="22" colspan="3" align="left" valign="top" class="style11">&nbsp;</td>
              </tr>
            <tr>
              <td height="22" align="left" valign="top" class="style77">Product Image               <br /></td>
              <td width="369" height="22" align="left" valign="top" class="style77"><input name="imgName" type="file" class="style77">
                <br>
                <span class="style1">[file size:upto 1 MB; width 380px,height 285px; type:.JPG,.GIF]</span> </td>
              <td width="194" align="center" valign="top" class="style77"><span class="style777"><img src="../productImage/thumb/<?php echo $productRow['imgName']?>" border="1" class="style8" width="120" height="70"/></span></td>
            </tr>
            <tr>
              <td height="32" align="left" class="style77">Upload File </td>
              <td height="32" align="left" class="style77"><input name="fileUpload" type="file" class="style77" id="fileUpload" />
                  <br />
                [<em>file size:upto 2 MB; type:.doc, .pdf, .zip</em>] </td>
              <td align="center" valign="top" class="style77">&nbsp;</td>
            </tr>
			    
			<tr>
            <td width="265" bgcolor="#FBFBFB" class="style77">Title</td>
             <td width="423" bgcolor="#FBFBFB"><input name="Add_title" type="text" value="<?php echo stripslashes($productRow['Add_title'])?>" style="width:300px;" id="title" />
			</td>
          </tr>
          
            <tr>
            <td width="265" bgcolor="#FBFBFB" class="style77">Key Words</td>
             <td width="423" bgcolor="#FBFBFB"><input name="Key_word" type="text" value="<?php echo stripslashes($productRow['Key_word'])?>" style="width:300px;" id="Key_word" />
			</td>
          </tr>
           <tr>
            <td width="265" bgcolor="#FBFBFB" class="style77">Description</td>
             <td width="423" bgcolor="#FBFBFB"><textarea name="Description" rows="4" cols="30"><?php echo stripslashes($productRow['Description'])?></textarea>			</td>
          </tr>
            <tr>
              <td height="22" colspan="3" align="center" class="style777" ><input name="submit" type="submit" value="Update" onClick="return submitForm();"  />
</td>
            </tr>
			<script language="javascript">
				function deleteAlert(service)
				{
					if(confirm("Really want to delete this Product?"))
					return true;
					else
					return false;
				}				
			</script>
            <tr>
              <td height="10" colspan="3" align="center" ></td>
            </tr>
			</form>
          </table></th>
        </tr>
      </table></td>
    </tr>
  </table>

</body>
</html>