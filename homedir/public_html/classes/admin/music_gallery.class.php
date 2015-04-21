<?php
class music_gallery {

	function __construct(){
	}
	
	function show_music_gallery()
	{
	
		global $db,$smarty,$pager;
		$sqlQuery="SELECT * FROM album inner join category on album.album_type=category.cat_id and 
					category.cat_status='Y' and category.cat_deleted='N' 
					where category.cat_name='Music Gallery' and album.album_status='Y' 
					and album.album_deleted='N'";
	
		$musicAlbums = $db->fetchResults($sqlQuery);
		$smarty->assign('musicAlbums',$musicAlbums);
	
	/////   album.album_status='Y' and 
		$sqlQuery="select * from album_data inner join album  on album.album_id = album_data.album_id
					and album.album_deleted='N'  
					inner join category  on category.cat_id= album.album_type 
					and category.cat_status='Y' and category.cat_deleted='N' 
					where album_data.ad_deleted='N' and category.cat_name='Music Gallery'";
		
		$link="admin.php?view=music_gallery&action=show_music_gallery";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	
		
		$music_album_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('music_album_detail',$music_album_detail);

	}
	function add_music_gallery()
	{
		global $db;
		if( !empty($_REQUEST['title']) && ( $_REQUEST['album_id'] !='0') )
		{
			if (!empty($_FILES['music_browse']['name']) ) 
			{
				$song_tempname = $_FILES['music_browse']['name'];
				$songDir ='album_songs/';
				$songName =$songDir . $song_tempname;
				move_uploaded_file($_FILES['music_browse']['tmp_name'],$songName);
			}
			
			$d=strip_tags($_REQUEST['desc']);
			if(empty($d))  
				$desc=ucfirst($_REQUEST['title']);
			else
				$desc=ucfirst($_REQUEST['desc']);		

				$addQuery ="insert into album_data (ad_title,ad_desc,ad_data,ad_created,album_id) values('".ucfirst($_REQUEST['title'])."','".$desc."','".$_FILES['music_browse']['name']."','".date('Y/m/d')."','".$_REQUEST['album_id']."')";
				$db->query($addQuery);
			
		}
		redirect("admin.php?view=music_gallery&action=show_music_gallery");
	
	}
	
	function edit_gallery()
	{
		global $db,$smarty;
		$sqlQuery = "select * from album_data inner join album on album.album_id=album_data.album_id where ad_id='".$_REQUEST['song_id']."'";
		
		$gallery_data = $db->fetchResults($sqlQuery);
		$smarty->assign('gallery_data',$gallery_data);
		$smarty->assign('gal_title','Music Gallery');
		$smarty->assign('browse_title','Song Name');
		$smarty->assign('gallery','music_gallery');
		
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
				$ImageDir ='album_songs/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['image_browse']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update album_data set ad_data='".$image_tempname."' where ad_id='".$_REQUEST['ad_id']."'";
					$db->query($delQuery);
					if(!empty($_REQUEST['ad_data']))
					{
						if(file_exists( "album_songs/".$_REQUEST['ad_data'] ))
							unlink("album_songs/".$_REQUEST['ad_data']);
//						echo $_REQUEST['album_image']." unlinked";
					}
			//get info about the image being uploaded
				}
			}
			
			
			redirect("admin.php?view=music_gallery&action=show_music_gallery");
		}
	}
	
	
	function del_gallery()
	{
		global $db;
		//	$delQuery ="update album_data set ad_deleted='Y' where ad_id='".$_REQUEST['song_id']."'";
			$delQuery ="delete from album_data where ad_id='".$_REQUEST['del_id']."'";
			$db->query($delQuery);
		redirect("admin.php?view=music_gallery&action=show_music_gallery");
	}	
	
	function set_gallery()
	{
		global $db;
		$setQuery ="update album_data set ad_status='".$_REQUEST['set']."' where ad_id='".$_REQUEST['song_id']."'";
		$db->query($setQuery);
		redirect("admin.php?view=music_gallery&action=show_music_gallery");
	}	
	
	
	function __destruct(){
	
	}
}
?>