<?php
class album {

	function __construct(){
	}
	
	function show_album(){
	
	global $db,$smarty,$pager;
//		$city_id=$_REQUEST['id'];
		
//		$db->show_all_shops();
		$sqlQuery = "select * from category where cat_type='Album'";
		$data = $db->fetchResults($sqlQuery);
		$smarty->assign('data',$data);

		$sqlQuery ="select * from album 
						inner join category on album.album_type=category.cat_id and 
						category.cat_type='album' and category.cat_status='Y' and 
						category.cat_deleted='N' where album_deleted='N' order by album_id desc ";


		$link="admin.php?view=album&action=show_album";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	
					
		$album_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('album_detail',$album_detail);

	}
	function add_album()
	{
		global $db;
		if( !empty($_REQUEST['title']) && ( $_REQUEST['album_id'] !='0') )
		{
			if(!empty($_FILES['image_browse']['name']))
			{
				$image_tempname = $_FILES['image_browse']['name'];
				$ImageDir ='album_images/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['image_browse']['tmp_name'],$ImageName)) 
				{
				//get info about the image being uploaded
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
						echo 'Sorry, but the file you uploaded was not a GIF, JPG, or PNG file.<br>';
						echo "Please hit your browser’s ‘back’ button and try again.";
					}
				}
			}
			
			$d=strip_tags($_REQUEST['desc']);
			if(empty($d))  
				$desc=ucfirst($_REQUEST['title']);
			else
				$desc=ucfirst($_REQUEST['desc']);
				
				$addQuery ="insert into album (album_title,album_desc,album_image,album_created,album_type) values('".ucfirst($_REQUEST['title'])."','".$desc."','".$_FILES['image_browse']['name']."','".date('Y/m/d')."','".$_REQUEST['type']."')";
				$db->query($addQuery);

  		  
		}
		redirect("admin.php?view=album&action=show_album");
	}
	
	function edit_album()
	{
		global $db,$smarty;
		$sqlQuery = "select * from album inner join category on category.cat_id=album.album_type where album_id='".$_REQUEST['album_id']."'";
		
		$album_data = $db->fetchResults($sqlQuery);
		if(file_exists('album_images/'.$album_data[0]['album_image']) && (!empty($album_data[0]['album_image'])))
			list($width, $height, $type, $attr) = getimagesize('album_images/'.$album_data[0]['album_image']);
		else
		{	$width=$height=0;
		}		
		$smarty->assign('album_data',$album_data);
		$smarty->assign('width',$width);
		$smarty->assign('height',$height);
		if(isset($_REQUEST['submit']))
		{
			$d=strip_tags($_REQUEST['desc']);
			if(empty($d))  
				$desc=ucfirst($_REQUEST['title']);
			else
				$desc=ucfirst($_REQUEST['desc']);		
			$delQuery ="update album set album_title='".ucfirst($_REQUEST['title'])."' , album_desc='".$desc."' where album_id='".$_REQUEST['album_id']."'";
			$db->query($delQuery);
			
			if( !empty($_FILES['image_browse']['name'])	&& ( $_REQUEST['album_id'] !='0') )
			{
				$image_tempname = $_FILES['image_browse']['name'];
				$ImageDir ='album_images/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['image_browse']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update album set album_image='".$image_tempname."' where album_id='".$_REQUEST['album_id']."'";
					$db->query($delQuery);
					if(!empty($_REQUEST['album_image']))
					{
						if(file_exists( "album_images/".$_REQUEST['album_image'] ))
							unlink("album_images/".$_REQUEST['album_image']);
//						echo $_REQUEST['album_image']." unlinked";
					}
			//get info about the image being uploaded
				}
			}
			redirect("admin.php?view=album&action=show_album");
		}
	}
	function del_album()
	{
		global $db;
			//$delQuery ="update album set album_deleted='Y' where album_id='".$_REQUEST['album_id']."'";
			$delQuery ="delete from  album where album_id='".$_REQUEST['del_id']."'";
			$db->query($delQuery);
		redirect("admin.php?view=album&action=show_album");
	}	

	function set_album()
	{
		global $db;
		$setQuery ="update album set album_status='".$_REQUEST['set']."' where album_id='".$_REQUEST['album_id']."'";
		$db->query($setQuery);
		redirect("admin.php?view=album&action=show_album");
	}	
		
	function __destruct(){
	
	}
}
?>