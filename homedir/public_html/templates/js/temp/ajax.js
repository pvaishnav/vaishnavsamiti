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
function showcats(id)
{
	//alert(id);
	ajax();
						//alert(document.getElementById("chk_"+id).checked);
	if(document.getElementById("chk_"+id).checked==true)
	{
	  document.getElementById("cat_"+id).style.display="block";
	  document.getElementById("count_cats").value= parseInt(document.getElementById("count_cats").value)+1;
	}
	else
	{
		if (doc)
	   {
		   doc.open("GET", "ajax.php?section=show_cats&id="+id, false);   
		   doc.send(null);
	   }	
	   if(doc.responseText!="")
	   {
		   var ids = doc.responseText.split(",");
			for(var idnum in ids)
			{
				if(parseInt(idnum)>0)
				{
					if(document.getElementById("chk_"+ids[idnum]).checked)
			 	 	  	document.getElementById("count_cats").value=parseInt(document.getElementById("count_cats").value)-1;
					 document.getElementById("chk_"+ids[idnum]).checked=false;
					 document.getElementById("cat_"+ids[idnum]).style.display="none";
				}
			}

	   }	
 	   document.getElementById("count_cats").value=parseInt(document.getElementById("count_cats").value)-1;
		document.getElementById("cat_"+id).style.display="none";
	}
//	alert(document.getElementById("count_cats").value);
}

function valid_guest_book(frm)
{	alert("dsfsdfsdF");
	var valid=0;	
	if(frm.title.value=='')
	{	
		document.getElementById("title").innerHTML="<span class='alert'>Please Enter title.</span>";
			if(valid!=1)
			{	frm.title.focus();				var valid=1;			}
	}
	else
		document.getElementById("title").innerHTML="";	
	
	if(frm.descript.value=='')
	{	
		document.getElementById("descript").innerHTML="<span class='alert'>Please Enter descript.</span>";
			if(valid!=1)
			{	frm.descript.focus();				var valid=1;			}
	}
	else
		document.getElementById("descript").innerHTML="";	

	if(ckeckFocus==1)
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
