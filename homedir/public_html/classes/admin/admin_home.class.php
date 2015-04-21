<?php
class admin_home {

	function __construct(){
	}
	
	function view_home(){
	
	global $db,$smarty;
	}
	
	function view_welcome_home()
	{
	
		global $db,$smarty;
		$sqlQuery = "select * from category where cat_type='Page' and cat_name='Welcome Home'";
		$data = $db->fetchResults($sqlQuery);
		$article_type = $data[0]['cat_id'];
		$smarty->assign('article_type',$article_type);
		$sqlQuery ="select * from articles where article_deleted='N' and article_type='".$article_type."' order by 
					article_id desc";

				
		$article_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('article_detail',$article_detail);	
		
		if(file_exists('other_images/'.$article_detail[0]['article_image']) && (!empty($article_detail[0]['article_image'])))
			list($width, $height, $type, $attr) = getimagesize('other_images/'.$article_detail[0]['article_image']);
		else
		{	$width=$height=0;
		}		
	
		$smarty->assign('width',$width);
		$smarty->assign('height',$height);
		$smarty->assign('action',"edit_welcome_home");

		if(isset($_REQUEST['submit'])  && $_REQUEST['submit']=='Save')
		{
			$delQuery ="update articles set article_title='".str_replace("\`", "'", $_REQUEST['title'])."' , article_desc='".str_replace("\`", "'", $_REQUEST['desc'])."' where article_id='11'";
			$db->query($delQuery);
			
			if( !empty($_FILES['image_browse']['name'])	&& ( $_REQUEST['article_id'] !='0') )
			{
				$image_tempname = $_FILES['image_browse']['name'];
				$ImageDir ='other_images/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['image_browse']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update articles set article_image='".$image_tempname."' where article_id='".$_REQUEST['article_id']."'";
					$db->query($delQuery);
					if(!empty($_REQUEST['article_image']))
					{
						if(file_exists( "other_images/".$_REQUEST['article_image'] ))
							unlink("other_images/".$_REQUEST['article_image']);
					}
				}
			}
			redirect("admin.php?view=admin_home&action=".$_REQUEST['action']);
		}

	}
	function edit_welcome_home()
	{
		global $db,$smarty;
		$sqlQuery = "select * from category where cat_type='Page' and cat_name='Welcome Home'";
		$data = $db->fetchResults($sqlQuery);
		$article_type = $data[0]['cat_id'];
		$smarty->assign('article_type',$article_type);
	$sqlQuery ="select * from articles where article_deleted='N' and article_type='".$article_type."' order by article_id desc";

		$article_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('article_detail',$article_detail);	
		
		if(file_exists('other_images/'.$article_detail[0]['article_image']) && (!empty($article_detail[0]['article_image'])))
			list($width, $height, $type, $attr) = getimagesize('other_images/'.$article_detail[0]['article_image']);
		else
		{	$width=$height=0;
		}		
	
		$smarty->assign('width',$width);
		$smarty->assign('height',$height);
		$smarty->assign('action',"view_welcome_home");

		}
	function view_contact_us()
	{
		
		global $db,$smarty;
		$sqlQuery = "select * from category where cat_type='Page' and cat_name='Contact Us'";
		$data = $db->fetchResults($sqlQuery);
		$article_type = $data[0]['cat_id'];
		$smarty->assign('article_type',$article_type);
		$sqlQuery ="select * from articles where article_deleted='N' and article_type='".$article_type."' order by article_id desc";

				
		$article_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('article_detail',$article_detail);	
		
		if(file_exists('other_images/'.$article_detail[0]['article_image']) && (!empty($article_detail[0]['article_image'])))
			list($width, $height, $type, $attr) = getimagesize('other_images/'.$article_detail[0]['article_image']);
		else
		{	$width=$height=0;
		}		
	
		$smarty->assign('width',$width);
		$smarty->assign('height',$height);
		$smarty->assign('action',"edit_contact_us");
		
		if(isset($_REQUEST['submit'])  && $_REQUEST['submit']=='Save')
		{
			//echo "submit";
			$delQuery ="update articles set article_title='".str_replace("\`", "'", $_REQUEST['title'])."' , article_desc='".str_replace("\`", "'", $_REQUEST['desc'])."' where article_id='".$_REQUEST['article_id']."'";
			$db->query($delQuery);
			
			if( !empty($_FILES['image_browse']['name'])	&& ( $_REQUEST['article_id'] !='0') )
			{
				$image_tempname = $_FILES['image_browse']['name'];
				$ImageDir ='other_images/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['image_browse']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update articles set article_image='".$image_tempname."' where article_id='".$_REQUEST['article_id']."'";
					$db->query($delQuery);
					if(!empty($_REQUEST['article_image']))
					{
						if(file_exists( "other_images/".$_REQUEST['article_image'] ))
							unlink("other_images/".$_REQUEST['article_image']);
					}
				}
			}
			redirect("admin.php?view=admin_home&action=".$_REQUEST['action']);
		}
	}
	
	function edit_contact_us()
	{
	global $db,$smarty;
		$sqlQuery = "select * from category where cat_type='Page' and cat_name='Contact Us'";
		$data = $db->fetchResults($sqlQuery);
		$article_type = $data[0]['cat_id'];
		$smarty->assign('article_type',$article_type);
		$sqlQuery ="select * from articles where article_deleted='N' and article_type='".$article_type."' order by article_id desc";

				
		$article_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('article_detail',$article_detail);	
		
		if(file_exists('other_images/'.$article_detail[0]['article_image']) && (!empty($article_detail[0]['article_image'])))
			list($width, $height, $type, $attr) = getimagesize('other_images/'.$article_detail[0]['article_image']);
		else
		{	$width=$height=0;
		}		
	
		$smarty->assign('width',$width);
		$smarty->assign('height',$height);
		$smarty->assign('action',"view_contact_us");
	}
	function view_about_us()
	{
		global $db,$smarty;
		$sqlQuery = "select * from category where cat_type='Page' and cat_name='About Us'";
		$data = $db->fetchResults($sqlQuery);
		$article_type = $data[0]['cat_id'];
		$smarty->assign('article_type',$article_type);
		$sqlQuery ="select * from articles where article_deleted='N' and article_type='".$article_type."' order by article_id desc";

				
		$article_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('article_detail',$article_detail);	
		
		if(file_exists('other_images/'.$article_detail[0]['article_image']) && (!empty($article_detail[0]['article_image'])))
			list($width, $height, $type, $attr) = getimagesize('other_images/'.$article_detail[0]['article_image']);
		else
		{	$width=$height=0;
		}		
	
		$smarty->assign('width',$width);
		$smarty->assign('height',$height);
		$smarty->assign('action',"edit_about_us");
		
		if(isset($_REQUEST['submit'])  && $_REQUEST['submit']=='Save')
		{
			//echo "submit";
			$delQuery ="update articles set article_title='".str_replace("\`", "'", $_REQUEST['title'])."' , article_desc='".str_replace("\`", "'", $_REQUEST['desc'])."' where article_id='".$_REQUEST['article_id']."'";
			$db->query($delQuery);
			
			if( !empty($_FILES['image_browse']['name'])	&& ( $_REQUEST['article_id'] !='0') )
			{
				$image_tempname = $_FILES['image_browse']['name'];
				$ImageDir ='other_images/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['image_browse']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update articles set article_image='".$image_tempname."' where article_id='".$_REQUEST['article_id']."'";
					$db->query($delQuery);
					if(!empty($_REQUEST['article_image']))
					{
						if(file_exists( "other_images/".$_REQUEST['article_image'] ))
							unlink("other_images/".$_REQUEST['article_image']);
					}
				}
			}
			redirect("admin.php?view=admin_home&action=".$_REQUEST['action']);
		}
	}
	
	function edit_about_us()
	{
		global $db,$smarty;
		$sqlQuery = "select * from category where cat_type='Page' and cat_name='About Us'";
		$data = $db->fetchResults($sqlQuery);
		$article_type = $data[0]['cat_id'];
		$smarty->assign('article_type',$article_type);
		$sqlQuery ="select * from articles where article_deleted='N' and article_type='".$article_type."' order by article_id desc";

				
		$article_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('article_detail',$article_detail);	
		
		if(file_exists('other_images/'.$article_detail[0]['article_image']) && (!empty($article_detail[0]['article_image'])))
			list($width, $height, $type, $attr) = getimagesize('other_images/'.$article_detail[0]['article_image']);
		else
		{	$width=$height=0;
		}		
	
		$smarty->assign('width',$width);
		$smarty->assign('height',$height);
		$smarty->assign('action',"view_about_us");
	}
	function view_guest_book()
	{
	
		global $db,$smarty,$pager;
		
		if($_REQUEST['del']!='')
		{
			$delete="update careers set deleted='Y' where id='".$_REQUEST['del']."'";
			$db->query($delete);
			redirect("admin.php?view=admin_home&action=view_guest_book");
		}
		
		$sqlQuery = "select * from careers where deleted='N' order by id desc";

		$link="admin.php?admin_home&action=view_guest_book";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	

		$guest_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('guest_detail',$guest_detail);	
		
	}
	function view_guest()
	{
		global $db,$smarty;
		$sqlQuery ="select * from careers where id='".$_REQUEST['view_id']."'";

		$guest_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('guest_detail',$guest_detail);	
	}
	
	function del_guest_book()
	{
		global $db;
		$delQuery ="delete from  guestbook where book_id='".$_REQUEST['del_id']."'";
		$db->query($delQuery);
		redirect("admin.php?view=admin_home&action=view_guest_book");
	}
	
	function view_suggestion_book()
	{
	
		global $db,$smarty,$pager;
		$sqlQuery = "select * from suggestion order by book_id desc";

		$link="admin.php?admin_home&action=view_suggestion";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	

		$sugge_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('sugge_detail',$sugge_detail);	
		
	}
	function view_suggestion()
	{
		global $db,$smarty;
		$sqlQuery ="select * from suggestion where book_id='".$_REQUEST['book_id']."'";

		$sugge_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('sugge_detail',$sugge_detail);	
	}
	
	function del_suggestion()
	{
		global $db;
		$delQuery ="delete from  suggestion where book_id='".$_REQUEST['del_id']."'";
		$db->query($delQuery);
		redirect("admin.php?view=admin_home&action=view_suggestion_book");
	}
	
	function view_my_account()
	{
	
		global $db,$smarty;
		$sqlQuery ="select * from users ";
		$account_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('account_detail',$account_detail);	
		if(isset($_REQUEST['submit'])  && $_REQUEST['submit']=='Save')
		{
			//echo "submit"; 21232f297a57a5a743894a0e4a801fc3
			$user_pass = $account_detail[0]['user_pass'];
			if($user_pass == md5($_REQUEST['old_pass']))
			{		
				$updateQuery ="update users set user_pass='".md5($_REQUEST['new_pass'])."' where user_id='".$_REQUEST['user_id']."'";
				$db->query($updateQuery);
				redirect("admin.php?view=admin_home&action=view_my_account");
			}
			else
			{
				redirect("admin.php?view=admin_home&action=edit_my_account&try=err");
			}
		}
		$smarty->assign('action',"edit_my_account");	
		
		if($_REQUEST['submit_image']=='Save')
		{
			//echo "submit"; 21232f297a57a5a743894a0e4a801fc3
			//$user_pass = $account_detail[0]['user_pass'];
			
			if( !empty($_FILES['image_browse']['name'])	&& ( $_REQUEST['user_id'] !='0') )
			{
				$image_tempname = $_FILES['image_browse']['name'];
				$ImageDir ='other_images/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['image_browse']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update users set head_image='".$image_tempname."' where user_id='1'";
					$db->query($delQuery);
					if(!empty($_REQUEST['head_image']))
					{
						if(file_exists( "other_images/".$_REQUEST['head_image'] ))
							unlink("other_images/".$_REQUEST['head_image']);
					}
				}
			}
				redirect("admin.php?view=admin_home&action=view_my_account");
		}
		
		if($_REQUEST['submit_ad']=='Save Ad')
		{
			//echo "submit"; 21232f297a57a5a743894a0e4a801fc3
			//$user_pass = $account_detail[0]['user_pass'];
			
			if( !empty($_FILES['adtop']['name'])	&& ( $_REQUEST['user_id'] !='0') )
			{
				//image Top
				$image_tempname = $_FILES['adtop']['name'];
				$ImageDir ='other_images/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['adtop']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update users set head_top_image='".$image_tempname."' where user_id='1'";
					$db->query($delQuery);
					if(!empty($_REQUEST['head_top_image']))
					{
						if(file_exists( "other_images/".$_REQUEST['head_top_image'] ))
							unlink("other_images/".$_REQUEST['head_top_image']);
					}
				}
			}
			if( !empty($_FILES['adbottom']['name'])	&& ( $_REQUEST['user_id'] !='0') )
			{
				//image bottom
				$image_tempname = $_FILES['adbottom']['name'];
				$ImageDir ='other_images/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['adbottom']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update users set head_bot_image='".$image_tempname."' where user_id='1'";
					$db->query($delQuery);
					if(!empty($_REQUEST['head_bot_image']))
					{
						if(file_exists( "other_images/".$_REQUEST['head_bot_image'] ))
							unlink("other_images/".$_REQUEST['head_bot_image']);
					}
				}
			}
				redirect("admin.php?view=admin_home&action=view_my_account");
		}
		
		if(isset($_REQUEST['submit_google'])  && $_REQUEST['submit_google']=='google Ad')
		{	
				if(isset($_REQUEST['chkgoogle']))
				{$updateQuery ="update users set googlead='1' where user_id='1'";}
				else
				{$updateQuery ="update users set googlead='0' where user_id='1'";}
								
				$db->query($updateQuery);
				
		if( !empty($_FILES['adleft']['name'])	&& ( $_REQUEST['user_id'] !='0') )
			{
				//image Top
				$image_tempname = $_FILES['adleft']['name'];
				$ImageDir ='other_images/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['adleft']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update users set head_left_image='".$image_tempname."' where user_id='1'";
					$db->query($delQuery);
					if(!empty($_REQUEST['head_left_image']))
					{
						if(file_exists( "other_images/".$_REQUEST['head_left_image'] ))
							unlink("other_images/".$_REQUEST['head_left_image']);
					}
				}
			}
			if( !empty($_FILES['adright']['name'])	&& ( $_REQUEST['user_id'] !='0') )
			{
				//image bottom
				$image_tempname = $_FILES['adright']['name'];
				$ImageDir ='other_images/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['adright']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update users set head_right_image='".$image_tempname."' where user_id='1'";
					$db->query($delQuery);
					if(!empty($_REQUEST['head_right_image']))
					{
						if(file_exists( "other_images/".$_REQUEST['head_right_image'] ))
							unlink("other_images/".$_REQUEST['head_right_image']);
					}
				}
			}
				
				redirect("admin.php?view=admin_home&action=view_my_account");
		}
	
	}
	
	function edit_my_account()
	{
		global $db,$smarty;
		
		$sqlQuery ="select * from users ";
		$account_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('account_detail',$account_detail);	
		
		if( isset($_REQUEST['try'])  && $_REQUEST['try']=='err' )
			$smarty->assign('err',"<span class='alert'>Old Pass Does not match</span>");	
		
		//$article_image="";
			$image_tempname="";
			$image_tempname = $_FILES['image_browse']['name'];
			$ImageDir ='other_images/';
			$ImageName =$ImageDir . $image_tempname;
			if (move_uploaded_file($_FILES['image_browse']['tmp_name'],$ImageName)) 
			{
				list($width, $height, $type, $attr) = getimagesize($ImageName);
				switch ($type) 
				{
					case 1:
					$ext = '.gif';
					break;
					case 2:
					$ext = '.jpg';
					break;
					case 3:
					$ext = '.png';
					break;
					default:
				}
			
			}

	}
		
	function __destruct(){
	
	}
}
?>