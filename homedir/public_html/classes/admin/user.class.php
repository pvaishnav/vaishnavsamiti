<?php
class user {

	function __construct(){
	}
	
	function login()
	{
		global $db,$smarty;
		
		if( isset($_REQUEST['try'])  && $_REQUEST['try']=='err' )
			$smarty->assign('err',"<span class='alert'>Invalid Username/Password</span>");	
		
		if(isset($_REQUEST['submit']))
		{
			$sqlQuery ="select * from users ";
			$account_detail = $db->fetchResults($sqlQuery);
			$smarty->assign('account_detail',$account_detail);	
			$user_pass = $account_detail[0]['user_pass'];
			$user_name = $account_detail[0]['user_name'];
			
			if($_REQUEST['user']== $user_name && md5($_REQUEST['pass'])== $user_pass  )
			{
			
				$_SESSION['sid']=session_id();
				$_SESSION['user']='user';
				$_SESSION['pass']='pass';
				//session_unset(); 
				$url="admin.php";
	/*			if( (isset($_REQUEST['old_view']))  &&  (!empty($_REQUEST['old_view'])) )
				{	
					$url.="?view=".$_REQUEST['old_view'];
					if( (isset($_REQUEST['old_action']))  &&  (!empty($_REQUEST['old_action'])) )
						$url.="&action=".$_REQUEST['old_action'];
				}	
	*/			//echo "url=".$url;
				redirect($url);
			}
			else
				redirect("admin.php?view=user&action=login&try=err");	
		}	
	}
	
	function change_password()
	{
		global $db,$smarty;
		
		if($_REQUEST['msg']=='sucess')
			$smarty->assign('msg',"Sucessfully Change Your Password");
		if($_REQUEST['msg']=='faild')
			$smarty->assign('msg',"Please Enter Correct User Name Password");	
		
		if(isset($_REQUEST['submit']))
		{
			$listingQry="select user_name from users where user_pass='".md5($_REQUEST['oldpass'])."' and  user_name='".$_REQUEST['user']."'";  
			$user_detail = $db->fetchResults($listingQry);

			if($user_detail[0]['user_name']!='')
			{
				$ch_password="update users set user_pass='".md5($_REQUEST['newpass'])."' where user_name='".$_REQUEST['user']."'";
				$db->query($ch_password);
				redirect("admin.php?view=user&action=change_password&msg=sucess");
			}
			else
			{
				redirect("admin.php?view=user&action=change_password&msg=faild");
			}
		}
	}
	
	function upload_document()
	{
		global $db,$smarty,$functions;
		
		if($_REQUEST['del']!='')
		{
			$update="update upload_document set deleted='Y' where id='".$_REQUEST['del']."'";
			$db->query($update);
				redirect("admin.php?view=user&action=upload_document");
		}
		$sqlQuery = "select * from upload_document where deleted='N'";
		$filedata = $db->fetchResults($sqlQuery);
		$smarty->assign('filedata',$filedata);
		
		if(isset($_REQUEST['submit']))
		{
			$date=date('Y-m-d');
			if (($_FILES["upfile"]["name"]!==''))
				 {	
				
				 	$pre_fix=mktime(date(h),date(i),date(s),date(m),date(d),date(Y));
					$uploadedfile = $_FILES['upfile']['tmp_name'];
					 $filename = stripslashes($_FILES['upfile']['name']);
				 	 $extension = $functions->getExtension($filename);
					  $pdf_file_path=$pre_fix.'.'.$extension;
					  move_uploaded_file($uploadedfile, 'upload_document/'.$pdf_file_path);
					  //unlink('upload_document/'.$_REQUEST['old_pdf_file']);
				 }
				$add_upload="insert into upload_document(title,file_path,entry_date)values('".$_REQUEST['title']."','".$pdf_file_path."','".$date."')";		 
				$db->query($add_upload);
				redirect("admin.php?view=user&action=upload_document");
		}
	}
	
	function logout()
	{
		global $db,$smarty;
		//unset($_SESSION['user']);
		session_unset(); 
		session_destroy();
		redirect("admin.php?view=user&action=login");
	}
	
	function __destruct(){
	
	}
}
?>