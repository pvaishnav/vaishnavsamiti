<?php
class parcha {

	function __construct(){
	}
	
	function show_parcha()
	{
		global $db,$smarty,$pager;

		$sqlQuery = "select * from category where cat_type='Article' and cat_name='Parcha'";
		$data = $db->fetchResults($sqlQuery);
		
		$article_type = $data[0]['cat_id'];
		$smarty->assign('article_type',$article_type);



		$sqlQuery ="select * from articles where article_deleted='N' and article_type='".$article_type."'  order by article_id desc";

		$link="admin.php?view=parcha&action=show_parcha";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	
					
		$parcha_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('parcha_detail',$parcha_detail);

	}
	function add_parcha()
	{
		global $db;
		/*** && !empty($_FILES['image_browse']['name']) 
		&& ( $_REQUEST['album_id'] !='0') 
		***/
		if( !empty($_REQUEST['title']) ) //&& !empty($_REQUEST['desc']) )
		{
			$image_tempname="";
			$image_tempname = $_FILES['image_browse']['name'];
			$ImageDir ='parcha_images/';
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
			
			
			$d=strip_tags($_REQUEST['desc']);
			if(empty($d))  
				$desc=ucfirst($_REQUEST['title']);
			else
				$desc=ucfirst($_REQUEST['desc']);		
			
			$ip = $_REQUEST['imagePosition'];
			$addQuery ="insert into articles (article_title,article_desc,article_created,article_image,image_position,article_type) values('".ucfirst($_REQUEST['title'])."','".$desc."','".date('Y/m/d')."','".$image_tempname."','".$ip."','".$_REQUEST['article_type']."')";
			$db->query($addQuery);
		}
		redirect("admin.php?view=parcha&action=show_parcha");
	}
	
	function edit_parcha()
	{
		global $db,$smarty;
		$sqlQuery = "select * from articles inner join category on category.cat_id=articles.article_type where article_id='".$_REQUEST['parcha_id']."'";
		
		$parcha_data = $db->fetchResults($sqlQuery);
		
		if(file_exists('parcha_images/'.$parcha_data[0]['article_image']) && (!empty($parcha_data[0]['article_image'])))
			list($width, $height, $type, $attr) = getimagesize('parcha_images/'.$parcha_data[0]['article_image']);
		else
		{	$width=$height=0;
		}		
		$smarty->assign('width',$width);
		$smarty->assign('height',$height);
		
		
		$smarty->assign('parcha_data',$parcha_data);
		if(isset($_REQUEST['submit']))
		{
			$d=strip_tags($_REQUEST['desc']);
			if(empty($d))  
				$desc=ucfirst($_REQUEST['title']);
			else
				$desc=ucfirst($_REQUEST['desc']);		

			$delQuery ="update articles set article_title='".ucfirst($_REQUEST['title'])."' , article_desc='".$desc."' , image_position ='".$_REQUEST['imagePosition']."' where article_id='".$_REQUEST['article_id']."'";
			$db->query($delQuery);
			
			if( !empty($_FILES['image_browse']['name'])	&& ( $_REQUEST['article_id'] !='0') )
			{
				$image_tempname = $_FILES['image_browse']['name'];
				$ImageDir ='parcha_images/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['image_browse']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update articles set article_image='".$image_tempname."' where article_id='".$_REQUEST['article_id']."'";
					$db->query($delQuery);
					
					if(!empty($_REQUEST['article_image']))
					{
						if(file_exists( "parcha_images/".$_REQUEST['article_image'] ))
							unlink("parcha_images/".$_REQUEST['article_image']);
					}
				}
			}
			
			redirect("admin.php?view=parcha&action=show_parcha");
		}
	}
	
	function del_parcha()
	{
		global $db;
		//	$delQuery ="update articles set article_deleted='Y' where article_id='".$_REQUEST['parcha_id']."'";
		$delQuery ="delete from articles where article_id='".$_REQUEST['del_id']."'";		
		$db->query($delQuery);
		redirect("admin.php?view=parcha&action=show_parcha");
	}	
	
	function set_parcha()
	{
		global $db;
		$setQuery ="update articles set article_status='".$_REQUEST['set']."' where article_id='".$_REQUEST['parcha_id']."'";
		$db->query($setQuery);
		redirect("admin.php?view=parcha&action=show_parcha");
	}	
	
	function set_show()
	{
		global $db;
		$setQuery ="update articles set article_show='".$_REQUEST['set']."' where article_id='".$_REQUEST['parcha_id']."'";
		$db->query($setQuery);
		redirect("admin.php?view=parcha&action=show_parcha");
	}	
	
		
	function __destruct(){
	
	}
}
?>