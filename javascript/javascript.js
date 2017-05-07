//javascript updateTechproStatus//
function updateUserStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updateuserstatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}



function closeResultMsg(){
	$('#result').fadeOut('1500');	
}




function updateSubCategoryStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updatesubcategorytatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}


function updateTestSubCategoryStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updatetestsubcategorytatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}
function updateGalleryStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updategallerystatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}


function updateCategoryStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updatecategorystatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}

function updateTestCategoryStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updatetestcategorystatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}



function sendMail(name,mail,msg){
	document.getElementById('sendmailmsg').style.display="none"
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			document.getElementById('loadingSendmail').style.display="none"  
			 var msg=response;
			  document.getElementById('sendmailmsg').style.display="block" 
			 document.getElementById('sendmailmsg').innerHTML= msg;
			}else{
			 document.getElementById('loadingSendmail').style.display="block"  
		   }
			}
	 xmlHttpReq.open('GET','ajaxCallToPhp/sendMail.php?name='+name+'&mail='+mail+'&msg='+msg, true);
	 xmlHttpReq.send(null); 	
}


function updatePhotoStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updatephotostatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}

function updateSubPhotoStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updatesubphotostatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}

function updateClientStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updateclientstatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}
function updatePackageStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updatepackagestatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}

function updateColorsStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updatecolorsstatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}
function updateSizesStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updatesizesstatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}

function updateMainCategoryStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updatemaincategorystatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function toggleQlook(id){
var DivID=document.getElementById('qlook'+id);
if(DivID.style.display=='none'){
	DivID.style.display='block'	
}else{
	DivID.style.display='none'
}
}


function changeImgSrc(img){
var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		    response=xmlHttpReq.responseText;
		//	alert(response)
			document.getElementById('mainImage').innerHTML= response;
		   }
			}
	 xmlHttpReq.open('GET','ajaxCallToPhp/changeimgsrc.php?img='+img, true);
	 xmlHttpReq.send(null); 	
	
	
}


function loginUser(email,pwd,pid){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
		//	alert(response)
			//alert(pid)
			if(response==1){
				var msg = "Authentication Successfull...Redirecting !";		
			    if(pid==0){
					window.location.href='index.php';	
				}else{
			    	window.location.href='address.php';
				}
			}
			if(response==0){
			var msg = "Authentication Failed !";	
			}
			 document.getElementById('loadingMsg').innerHTML=msg  
			}else{
			 document.getElementById('loadingMsg').style.display="block"  
		   }
			}
	 xmlHttpReq.open('GET','ajaxCallToPhp/loginuser.php?email='+email+'&pwd='+pwd+'&pid='+pid, true);
	 xmlHttpReq.send(null); 	
}

function goToCart(sesid,pid,color,size,qty){
// if(sesid==''){
 //	 window.location.href='signin.php?pid='+pid+'&color='+color+'&size='+size+'&qty='+qty;	 
 //}else{
 	 window.location.href='cart.php?pid='+pid+'&color='+color+'&size='+size+'&qty='+qty;	 	 
 //}
	
}

function addToCart(pid,color,size,qty){
 
 	 window.location.href='cart.php?pid='+pid+'&color='+color+'&size='+size+'&qty='+qty;	 
 
	
}

function newUserAccount(email,pwd,cpwd,name){

	var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	var password = /^[a-zA-Z0-9@-_]+$/;
	var username = /^[a-zA-Z ]+$/;
	usermail=email.value;
	userpwd=pwd.value;
	uname=name.value;
	
	if(name.value==''){
		alert('Please Fill Your Full Name');
		name.focus();
		return false;
	}
	if(!uname.match(username)){
		alert('Enter Your Full Name');
		name.focus();
		return false;
	}
	if(email.value==''){
		alert('Please Fill Email Id');
		email.focus();
		return false;
	}
	
	if(!usermail.match(emailPattern)){
		alert('Enter Valid email Address');
		email.focus();
		return false;
	}
	
	if(pwd.value==''){
		alert('Please Fill Password');
		pwd.focus();
		return false;
	}
	if(!userpwd.match(password)){
		alert('Only Alphabets,numbers [0-9] and -,_,@ are allowed');
		pwd.focus();
		return false;
	}
	if(cpwd.value==''){
		alert('Please Fill Confirm Password');
		cpwd.focus();
		return false;
	}
	if(pwd.value!=cpwd.value){
		alert('Password and Confirm Password does not Match');
		pwd.focus();
		return false;
	}
	createNewUserAct(email.value,pwd.value,name.value)
	return false;
	
}



function createNewUserAct(email,pwd,name){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			//alert(pid)
			if(response==1){
				var msg = "Available . Creating Account..... !";		
				document.getElementById('loadingNewUserMsg').innerHTML=msg  
			    window.location.href='signin.php?msg=ins';
			}
			if(response==0){
			var msg = "Not Available !";	
			}
			if(response==2){
			var msg = "Some Problem Occoured..Try Again Later!!";	
			}
			 document.getElementById('loadingNewUserMsg').innerHTML=msg  
			}else{
			 document.getElementById('loadingNewUserMsg').style.display="block"  
		   }
			}
	 xmlHttpReq.open('GET','ajaxCallToPhp/newuser.php?email='+email+'&pwd='+pwd+'&name='+name, true);
	 xmlHttpReq.send(null); 	
}
function updateNewUserAccount(pwd,cpwd,name,uid){

	var password = /^[a-zA-Z0-9@-_]+$/;
	var username = /^[a-zA-Z ]+$/;
	upwd=pwd.value;
	uname=name.value;
	
	if(name.value==''){
		alert('Please Fill Your Full Name');
		name.focus();
		return false;
	}
	if(!uname.match(username)){
		alert('Enter Your Full Name');
		name.focus();
		return false;
	}
	
	if(pwd.value==''){
		alert('Please Fill Password');
		pwd.focus();
		return false;
	}
	if(!upwd.match(password)){
		alert('Only Alphabets,numbers [0-9] and -,_,@ are allowed');
		pwd.focus();
		return false;
	}
	if(cpwd.value==''){
		alert('Please Fill Confirm Password');
		cpwd.focus();
		return false;
	}
	if(pwd.value!=cpwd.value){
		alert('Password and Confirm Password does not Match');
		pwd.focus();
		return false;
	}
	//alert(upwd);
	updateUserAccount(upwd,uname,uid)
	return false;
	
}



function updateUserAccount(pwd,name,uid){
	//alert(pwd.value);
	document.getElementById('result').style.display='none'  
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			//alert(pid)
			if(response==1){
				var msg = "Update Successfull..!";		
				document.getElementById('loadingNewUserMsg').innerHTML=msg  
			    window.location.href='modifyaccount.php?msg=ins';
			}
			
			if(response==0){
			var msg = "Some Problem Occoured..Try Again Later!!";	
			}
			 document.getElementById('loadingNewUserMsg').innerHTML=msg  
			}else{
			 document.getElementById('loadingNewUserMsg').style.display="block"  
		   }
			}
	 xmlHttpReq.open('GET','ajaxCallToPhp/updateuseract.php?pwd='+pwd+'&name='+name+'&uid='+uid, true);
	 xmlHttpReq.send(null); 	
}


function validateAddress(form){
	if(form.fname.value==''){
		alert('Please enter your First Name')
		form.fname.focus();
		return false;	
	}
	if(form.lname.value==''){
		alert('Please enter your Last Name')
		form.lname.focus();
		return false;	
	}
	if(form.address.value==''){
		alert('Please enter your Address')
		form.address.focus();
		return false;	
	}
	if(form.pin.value==''){
		alert('Please enter your pin')
		form.pin.focus();
		return false;	
	}
	if(form.mobile.value==''){
		alert('Please enter your mobile')
		form.mobile.focus();
		return false;	
	}
	
	
}



function updateProjGalleryStatus(id){
 var xmlHttpReq = false;
   
    // Mozilla/Safari
    if (window.XMLHttpRequest)
	 {
        xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
	 {
        xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	xmlHttpReq.onreadystatechange = function()
      {
		 if (xmlHttpReq.readyState == 4)
	   {    
		     response=xmlHttpReq.responseText;
			//alert(response)
			 var splitText=response.split("###");
			 var result=splitText[0];
			 var msg=splitText[1];
			 if(result=='1'){
			 document.getElementById('check'+id).checked= true;	 
			 }
			 document.getElementById('status'+id).innerHTML= msg;
			}else{
			 document.getElementById('status'+id).innerHTML="<img src='../images/loading.gif'>"  
		   }
			}
	 xmlHttpReq.open('GET','../ajaxCallToPhp/updateprojgallerystatus.php?id='+id, true);
	 xmlHttpReq.send(null); 	
}
