<?php
class image_gallery {

	function __construct(){
	}
	
	function show_image_gallery()
	{
	
		global $db,$smarty,$pager;
		$sqlQuery="SELECT * FROM album inner join category on album.album_type=category.cat_id and 
				category.cat_status='Y' and category.cat_deleted='N' 
				where category.cat_name='Image Gallery' and album.album_status='Y' 
				and album.album_deleted='N'";

		$imageAlbums = $db->fetchResults($sqlQuery);
	
		$smarty->assign('imageAlbums',$imageAlbums);
		$sqlQuery="select * from album_data inner join album  on album.album_id = album_data.album_id
				and album.album_deleted='N'  
				inner join category  on category.cat_id= album.album_type 
				and category.cat_status='Y' and category.cat_deleted='N' 
				where album_data.ad_deleted='N' and category.cat_name='Image Gallery'";
		
		$link="admin.php?view=image_gallery&action=show_image_gallery";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	
				
		$image_album_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('image_album_detail',$image_album_detail);	
	}
	
	function add_image_gallery()
	{
		global $db;
		if( !empty($_REQUEST['title'])  
			&& ( $_REQUEST['album_id'] !='0') )
		{
			if(!empty($_FILES['image_browse']['name']))
			{
				$image_tempname = $_FILES['image_browse']['name'];
				$imageDir ='album_image_gallery/';
				$imageName =$imageDir . $image_tempname;
				move_uploaded_file($_FILES['image_browse']['tmp_name'],$imageName);
			}
			
			$d=strip_tags($_REQUEST['desc']);
			if(empty($d))  
				$desc=ucfirst($_REQUEST['title']);
			else
				$desc=ucfirst($_REQUEST['desc']);		
				
				$addQuery ="insert into album_data (ad_title,ad_desc,ad_data,ad_created,album_id) values('".ucfirst($_REQUEST['title'])."','".$desc."','".$_FILES['image_browse']['name']."','".date('Y/m/d')."','".$_REQUEST['album_id']."')";
				$db->query($addQuery);
			
		}
		redirect("admin.php?view=image_gallery&action=show_image_gallery");
	
	}
	
	function edit_gallery()
	{
		global $db,$smarty;
		$sqlQuery = "select * from album_data inner join album on album.album_id=album_data.album_id where ad_id='".$_REQUEST['image_id']."'";
		
		$gallery_data = $db->fetchResults($sqlQuery);
		$smarty->assign('gallery_data',$gallery_data);
		$smarty->assign('gal_title','Image Gallery');
		$smarty->assign('gallery','image_gallery');
		$smarty->assign('browse_title','Image Name');
		if(isset($_REQUEST['submit']))
		{
			$d=strip_tags($_REQUEST['desc']);
			if(empty($d))  
				$desc=ucfirst($_REQUEST['title']);
			else
				$desc=ucfirst($_REQUEST['desc']);		
		
			$delQuery ="update album_data set ad_title='".ucfirst($_REQUEST['title'])."' , ad_desc='".$desc."' where
			 ad_id='".$_REQUEST['ad_id']."'";
			$db->query($delQuery);
			
			if( !empty($_FILES['image_browse']['name'])	&& ( $_REQUEST['album_id'] !='0') )
			{
				$image_tempname = $_FILES['image_browse']['name'];
				$ImageDir ='album_image_gallery/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['image_browse']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update album_data set ad_data='".$image_tempname."' where ad_id='".$_REQUEST['ad_id']."'";
					$db->query($delQuery);
					if(!empty($_REQUEST['ad_data']))
					{
						if(file_exists( "album_image_gallery/".$_REQUEST['ad_data'] ))
							unlink("album_image_gallery/".$_REQUEST['ad_data']);

					}
				}
			}
			
			
			redirect("admin.php?view=image_gallery&action=show_image_gallery");
		}
	}

	function del_gallery()
	{
		global $db;
			//$delQuery ="update album_data set ad_deleted='Y' where ad_id='".$_REQUEST['image_id']."'";
			$delQuery ="delete from album_data where ad_id='".$_REQUEST['del_id']."'";
			$db->query($delQuery);
		redirect("admin.php?view=image_gallery&action=show_image_gallery");
	}	
	
	function set_gallery()
	{
		global $db;
		$setQuery ="update album_data set ad_status='".$_REQUEST['set']."' where ad_id='".$_REQUEST['image_id']."'";
		$db->query($setQuery);
		redirect("admin.php?view=image_gallery&action=show_image_gallery");
	}	
	
	function __destruct(){
	
	}
}
?>