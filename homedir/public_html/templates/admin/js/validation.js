var xmlHttp

function showHint(str)
{
	if (str.length==0)
	{ 
		document.getElementById("txtHint").innerHTML="";
		return;
	}

	xmlHttp=GetXmlHttpObject();
	if (xmlHttp==null)
	{
		alert ("Your browser does not support AJAX!");
		return;
	}
	var url="get.php";
	url=url+"?q="+str;
	url=url+"&sid="+Math.random();
	xmlHttp.onreadystatechange=stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}

function ajax() {
	// Make a new XMLHttp object
	if (typeof window.ActiveXObject != 'undefined' ) doc = new ActiveXObject("Microsoft.XMLHTTP");
	else doc = new XMLHttpRequest();
}


function GetXmlHttpObject()
{
	var xmlHttp=null;
	try
	{
		// Firefox, Opera 8.0+, Safari
		xmlHttp=new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer
		try
		{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}
function stateChanged() 
{
	if (xmlHttp.readyState==4)
	{
		document.getElementById("txtHint").innerHTML=xmlHttp.responseText;
	}
}
function del_album(frm,id)
{
	if(confirm("are you sure,confirm delete to this album"))
	{
		document.forms[1].del_id.value=id
		document.forms[1].submit();
	}
}

function del_guest_book(id)
{
	//alert(id);
	if(confirm("are you sure,confirm delete to this guest"))
	{
//		alert(id);
		document.forms[0].del_id.value=id
		
		document.forms[0].submit();
	}
}

function del_gallery(id)
{
	if(confirm("are you sure,confirm delete to this gallery"))
	{
		document.forms[1].del_id.value=id
		document.forms[1].submit();
	}
}


valid_add_other_image
function valid_add_other_image(frm)
{
	var valid=0;

	var ext=frm.image_browse.value.substr( frm.image_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);

	if(frm.image_browse.value=='')
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Browse Other Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else if( ext!='.JPEG' && ext != '.GIF' && ext != '.PNG' && ext != '.JPG' )
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Select .JPEG,.JPG,.GIF or .PNG Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	
	if(valid==1)
		return false;
	else
		return true;		
}


function valid_add_album(frm)
{
	var valid=0;
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

/*	if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";	
	*/
	if(frm.type.value=='0')
	{	
		document.getElementById("type").innerHTML="<span class='alert'>Please Select Album Type.</span>";
			if(valid!=1)
			{	frm.type.focus();				var valid=1;			}
	}
	else
		document.getElementById("type").innerHTML="";	

	var ext=frm.image_browse.value.substr( frm.image_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);

	if(frm.image_browse.value=='')
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Browse Album Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else if( ext!='.JPEG' && ext != '.GIF' && ext != '.PNG' && ext != '.JPG' )
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Select .JPEG,.JPG,.GIF or .PNG Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	
	if(valid==1)
		return false;
	else
		return true;		
}
function valid_edit_article(frm)
{
	var valid=0;
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

	/*if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";	*/
	
	if(valid==1)
		return false;
	else
		return true;		

}
function valid_edit_album(frm)
{
	var valid=0;
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

	var ext=frm.image_browse.value.substr( frm.image_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);
	if( ext!='.JPEG' && ext != '.GIF' && ext != '.PNG' && ext != '.JPG' &&  frm.image_browse.value!='' )
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Select .JPEG,.JPG,.GIF or .PNG Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	
	/*if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";	*/
	
	
	/*
	if(frm.image_browse.value=='')
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Browse Album Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	*/
		
	if(valid==1)
		return false;
	else
		return true;		
}

function valid_edit_gallery(frm)
{
	var valid=0;
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

	/*if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";	*/
	
	var ext=frm.image_browse.value.substr( frm.image_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);

	if(frm.gal_type.value=='Image Gallery')
	{
		if( ext!='.JPEG' && ext != '.GIF' && ext != '.PNG' && ext != '.JPG' &&  frm.image_browse.value!='' )
		{	
			document.getElementById("image_browse").innerHTML="<span class='alert'>Please Select .JPEG,.JPG,.GIF or .PNG Image.</span>";
				if(valid!=1)
				{	frm.image_browse.focus();				var valid=1;			}
		}
		else
			document.getElementById("image_browse").innerHTML="";	
	}
	else
	{
		if( ext!='.MP3' && ext != '.RM' && ext != '.WMA' && ext != '.WAV' )
		{	
			document.getElementById("image_browse").innerHTML="<span class='alert'>Please Select .MP3,.RM,.WMA or .WAV Files.</span>";
				if(valid!=1)
				{	frm.image_browse.focus();				var valid=1;			}
		}
		else
			document.getElementById("image_browse").innerHTML="";	
	}
		
		
	
	/*
	if(frm.image_browse.value=='')
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Browse Album Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	*/
		
	if(valid==1)
		return false;
	else
		return true;		
}

function valid_edit_account(frm)
{

	var valid=0;
	if(frm.old_pass.value=='')
	{	
		document.getElementById("old_pass").innerHTML="<span class='alert'>Please Enter Old Password.</span>";
			if(valid!=1)
			{	frm.old_pass.focus();				var valid=1;			}
	}
	else
		document.getElementById("old_pass").innerHTML="";	

	if(frm.new_pass.value=='')
	{	
		document.getElementById("new_pass").innerHTML="<span class='alert'>Please Enter New Password.</span>";
			if(valid!=1)
			{	frm.new_pass.focus();				var valid=1;			}
	}
	else if(frm.conf_pass.value!='' && frm.new_pass.value != frm.conf_pass.value)
	{	
		document.getElementById("new_pass").innerHTML="<span class='alert'>Please Enter Same Password As New Password.</span>";
			if(valid!=1)
			{	frm.new_pass.focus();				var valid=1;			}
	}
	else
		document.getElementById("new_pass").innerHTML="";	
	
	if(frm.conf_pass.value=='')
	{	
		document.getElementById("conf_pass").innerHTML="<span class='alert'>Please Enter Confirm Password.</span>";
			if(valid!=1)
			{	frm.conf_pass.focus();				var valid=1;			}
	}
	else if(frm.new_pass.value!='' && frm.new_pass.value != frm.conf_pass.value)
	{	
		document.getElementById("conf_pass").innerHTML="<span class='alert'>Please Enter Same Password As Confirm Password.</span>";
			if(valid!=1)
			{	frm.conf_pass.focus();				var valid=1;			}
	}

	else
		document.getElementById("conf_pass").innerHTML="";	
	
	
	
	
		
		
	
	/*
	if(frm.image_browse.value=='')
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Browse Album Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	*/
		
	if(valid==1)
		return false;
	else
		return true;		

}

function valid_add_song(frm)
{
	var valid=0;
//	alert( 	frm.music_browse.value.substr( frm.music_browse.value.indexOf("."))  );

	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

	/*if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";	*/
	
	if(frm.album_id.value=='0')
	{	
		document.getElementById("album_id").innerHTML="<span class='alert'>Please Select Album.</span>";
			if(valid!=1)
			{	frm.album_id.focus();				var valid=1;			}
	}
	else
		document.getElementById("album_id").innerHTML="";	
	
	var ext=frm.music_browse.value.substr( frm.music_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);
	
	if(frm.music_browse.value=='')
	{	
		document.getElementById("music_browse").innerHTML="<span class='alert'>Please Browse Album Song.</span>";
			if(valid!=1)
			{	frm.music_browse.focus();				var valid=1;			}
	}
	else if( ext!='.MP3' && ext != '.RM' && ext != '.WMA' && ext != '.WAV' )
	{	
		document.getElementById("music_browse").innerHTML="<span class='alert'>Please Select .MP3,.RM,.WMA or .WAV Song.</span>";
			if(valid!=1)
			{	frm.music_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("music_browse").innerHTML="";	

	
		
	if(valid==1)
		return false;
	else
		return true;		
}

function valid_edit_festival(frm)
{

	var valid=0;
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

	/*if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";	*/
	var ext=frm.image_browse.value.substr( frm.image_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);
	if( ext!='.JPEG' && ext != '.GIF' && ext != '.PNG' && ext != '.JPG' &&  frm.image_browse.value!='' )
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Select .JPEG,.JPG,.GIF or .PNG Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	
	if(valid==1)
		return false;
	else
		return true;		

}

function valid_edit_parcha(frm)
{

	var valid=0;
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

	/*if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";	*/
	
	var ext=frm.image_browse.value.substr( frm.image_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);
	if( ext!='.JPEG' && ext != '.GIF' && ext != '.PNG' && ext != '.JPG' &&  frm.image_browse.value!='' )
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Select .JPEG,.JPG,.GIF or .PNG Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	
		
	if(valid==1)
		return false;
	else
		return true;		

}

function valid_edit_news(frm)
{

	var valid=0;
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

	/*if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";	*/
	
	var ext=frm.image_browse.value.substr( frm.image_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);
	if( ext!='.JPEG' && ext != '.GIF' && ext != '.PNG' && ext != '.JPG' &&  frm.image_browse.value!='' )
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Select .JPEG,.JPG,.GIF or .PNG Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	
		
	if(valid==1)
		return false;
	else
		return true;		

}


function valid_add_festival(frm)
{

	var valid=0;
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

	/*if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";*/	
	var ext=frm.image_browse.value.substr( frm.image_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);
	if( ext!='.JPEG' && ext != '.GIF' && ext != '.PNG' && ext != '.JPG' &&  frm.image_browse.value!='' )
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Select .JPEG,.JPG,.GIF or .PNG Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	

	if(valid==1)
		return false;
	else
		return true;		

}

function valid_add_parcha(frm)
{

	var valid=0;
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

	/*if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";*/	

	var ext=frm.image_browse.value.substr( frm.image_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);
	if( ext!='.JPEG' && ext != '.GIF' && ext != '.PNG' && ext != '.JPG' &&  frm.image_browse.value!='' )
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Select .JPEG,.JPG,.GIF or .PNG Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	

	if(valid==1)
		return false;
	else
		return true;		

}


function valid_add_news(frm)
{

	var valid=0;
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

	/*if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";	*/
	
	var ext=frm.image_browse.value.substr( frm.image_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);
	if( ext!='.JPEG' && ext != '.GIF' && ext != '.PNG' && ext != '.JPG' &&  frm.image_browse.value!='' )
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Select .JPEG,.JPG,.GIF or .PNG Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	
	
	if(valid==1)
		return false;
	else
		return true;		

}

function valid_add_image(frm)
{
	var valid=0;
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

	/*if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";	*/
	
	if(frm.album_id.value=='0')
	{	
		document.getElementById("album_id").innerHTML="<span class='alert'>Please Select Album.</span>";
			if(valid!=1)
			{	frm.album_id.focus();				var valid=1;			}
	}
	else
		document.getElementById("album_id").innerHTML="";	
	
	var ext=frm.image_browse.value.substr( frm.image_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);
	
	if(frm.image_browse.value=='')
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Browse Album Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else if( ext!='.JPEG' && ext != '.GIF' && ext != '.PNG' && ext != '.JPG' )
	{	
		document.getElementById("image_browse").innerHTML="<span class='alert'>Please Select .JPEG,.JPG,.GIF or .PNG Image.</span>";
			if(valid!=1)
			{	frm.image_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("image_browse").innerHTML="";	

	
		
	if(valid==1)
		return false;
	else
		return true;		
}


function valid_add_ringtone(frm)
{
	var valid=0;
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter Title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	

	/*if(frm.desc.value=='')
	{	
		document.getElementById("desc").innerHTML="<span class='alert'>Please Enter Descrption.</span>";
			if(valid!=1)
			{	frm.desc.focus();				var valid=1;			}
	}
	else
		document.getElementById("desc").innerHTML="";	*/
	
	if(frm.album_id.value=='0')
	{	
		document.getElementById("album_id").innerHTML="<span class='alert'>Please Select Album.</span>";
			if(valid!=1)
			{	frm.album_id.focus();				var valid=1;			}
	}
	else
		document.getElementById("album_id").innerHTML="";	

	var ext=frm.music_browse.value.substr( frm.music_browse.value.indexOf("."));
	ext=ext.toUpperCase(ext);

	if(frm.music_browse.value=='')
	{	
		document.getElementById("music_browse").innerHTML="<span class='alert'>Please Browse Album Ringtone.</span>";
			if(valid!=1)
			{	frm.music_browse.focus();				var valid=1;			}
	}
	else if( ext!='.MP3' && ext != '.RM' && ext != '.WMA' && ext != '.WAV' )
	{	
		document.getElementById("music_browse").innerHTML="<span class='alert'>Please Select .MP3,.RM,.WMA or .WAV Ringtone.</span>";
			if(valid!=1)
			{	frm.music_browse.focus();				var valid=1;			}
	}
	else
		document.getElementById("music_browse").innerHTML="";	

	
		
	if(valid==1)
		return false;
	else
		return true;		
}


function isNum(val,id) {
   if (val.value.length != 0) {
   
      for (i = 0; i < val.value.length; i++) 
	  {
         var ch = val.value.charAt(i);
		 
         if ((ch >= "0" && ch <= "9") || ch==".")
		 {document.getElementById(id).innerHTML="";
		  continue;
		 }
          else 
		  	{
				document.getElementById(id).innerHTML="Please Enter Numeric value";
				val.value = "";
		 		val.focus();
		  		//sel_id.select();
			false;
          	}
      	}
   	}
   return true;
} 


function Valid_change_password(frm)
{
	//alert("dfsdfsdf");
		 var checkFocus=0;							
		//same for all
	
			if(frm.user.value=='')
			{	
				document.getElementById("alert_user").innerHTML="<span class='alert'>Please Enter User Name.</span>";
				if(checkFocus!=1)
				{	frm.user.focus();			var	checkFocus=1;			}
			}
			else
			document.getElementById("alert_user").innerHTML="";
				
		
		
		if(frm.oldpass.value=='')
		{
			document.getElementById("alert_oldpass").innerHTML="Please Enter Old Password.";
			if(checkFocus!=1)
			{	frm.oldpass.focus();			var	checkFocus=1;			} 
		}
			else
 			 document.getElementById("alert_oldpass").innerHTML="";	
			 
			 
		if(frm.newpass.value=='')
	{	
		document.getElementById("alert_newpass").innerHTML="<span class='alert'>Please Enter New Password.</span>";
			if(checkFocus!=1)
			{	frm.newpass.focus();				var checkFocus=1;			}
	}
	else
		document.getElementById("alert_newpass").innerHTML="";	
		
	if(frm.copass.value=='')
	{	
		document.getElementById("alert_copass").innerHTML="<span class='alert'>Please Enter Confirm Password.</span>";
			if(checkFocus!=1)
			{	frm.copass.focus();				var checkFocus=1;			}
	}
	else
	{
		if(frm.copass.value!=frm.newpass.value)
		{	
			document.getElementById("alert_copass").innerHTML="<span class='alert'>Please Enter Same Password.</span>";
				if(checkFocus!=1)
				{	frm.copass.focus();				var checkFocus=1;			}
		}
		else
		document.getElementById("alert_copass").innerHTML="";
	}	 
			 
	
	
	/**/
		
		//alert(checkFocus);
		
		if(checkFocus==1)
			return false;
		else
		{
			return true;
		}
 
}


function Valid_upload_document(frm)
{
	//alert("dfsdfsdf");
		 var checkFocus=0;							
		//same for all
	
			if(frm.title.value=='')
			{	
				document.getElementById("alert_title").innerHTML="<span class='alert'>Please Enter Title.</span>";
				if(checkFocus!=1)
				{	frm.title.focus();			var	checkFocus=1;			}
			}
			else
			document.getElementById("alert_title").innerHTML="";
			
			
			if(frm.upfile.value=='' )
		{	
			document.getElementById("alert_upfile").innerHTML="<span class='alert'>Please Upload Document File.</span>";
				if(checkFocus!=1)
				{
					frm.upfile.focus();
					var checkFocus=1;
				}
		}	
		else  if(frm.upfile.value!='')
		   {
			 
			var file = frm.upfile.value;
			var mime = file.substr(file.lastIndexOf('.'));
	
			if (mime!= '.docx' && mime!= '.pdf' )
			  {
				document.getElementById("alert_upfile").innerHTML="<span class='alert'>Please Upload Proper Document File.</span>";
				if(checkFocus!=1)
				  {
					frm.upfile.focus();
					var checkFocus=1;
				  }
			 }
				else
					document.getElementById("alert_upfile").innerHTML="";		   
		   }
		   else
				document.getElementById("alert_upfile").innerHTML="";
				
		
		
		
			 
	
	
	/**/
		
		//alert(checkFocus);
		
		if(checkFocus==1)
			return false;
		else
		{
			return true;
		}
 
}


