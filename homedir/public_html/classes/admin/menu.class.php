<?php
class menu {

	function __construct(){
	}
	
	function show_menu()
	{
		global $db,$smarty,$pager;

		$sqlQuery ="select * from menu_data where menu_deleted='N' order by menu_position asc";

		$link="admin.php?view=menu&action=show_menu";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		//$sqlQuery.=$lim;	
					
		$menu_detail = $db->fetchResults($sqlQuery);
		$smarty->assign('menu_detail',$menu_detail);

	}
	function change_menu_pos()
	{
		global $db;
		$change= $_REQUEST['change'];  // dec
		$cur_menu= $_REQUEST['menu_id'];  // 3
		
		$sqlQuery="select * from menu_data where menu_id='".$cur_menu."'";
		$menu_data = $db->fetchResults($sqlQuery);
		$next_menu=$menu_data[0]['menu_id'];	
		$menu_pos=$menu_data[0]['menu_position'];	
		if(empty($menu_pos))
			$menu_pos =0;
			
		if($_REQUEST['change'] =='dec' )
		{
			$changeQuery ="update menu_data set menu_position=menu_position - 1 where menu_id='".$cur_menu."'";
			$nextQuery ="update menu_data set menu_position=menu_position + 1 where menu_position='".($menu_pos-1)."'";
	
		}
		else
		{
			$changeQuery ="update menu_data set menu_position=menu_position + 1 where menu_id='".$cur_menu."'";	
		$nextQuery ="update menu_data set menu_position =menu_position - 1 where menu_position ='".($menu_pos+1)."'";
		
		}

		$db->query($nextQuery);
		
		$db->query($changeQuery);
		redirect("admin.php?view=menu&action=show_menu");
	
	}
	function add_menu()
	{
		global $db;
		/*** && !empty($_FILES['image_browse']['name']) 
		&& ( $_REQUEST['album_id'] !='0') 
		***/
		if( !empty($_REQUEST['title'])  )  ///&& !empty($_REQUEST['desc']) )
		{
			$image_tempname="";
			$image_tempname = $_FILES['image_browse']['name'];
			$ImageDir ='menu_images/';
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
			$sqlQuery="select max(menu_data.menu_position) as menu_pos  from menu_data";
			$menu_data = $db->fetchResults($sqlQuery);
			$menu_pos=$menu_data[0]['menu_pos'];	
			if(empty($menu_pos))
				$menu_pos=1;
			else
				$menu_pos +=1;			
			
			$d=strip_tags($_REQUEST['desc']);
			if(empty($d))  
				$desc=ucfirst($_REQUEST['title']);
			else
				$desc=ucfirst($_REQUEST['desc']);

			$ip = $_REQUEST['imagePosition'];
			$addQuery ="insert into menu_data (menu_title,menu_desc,menu_created,menu_image,menu_position) values('".ucfirst($_REQUEST['title'])."','".$desc."','".date('Y/m/d')."','".$image_tempname."','".$menu_pos."')";
			$db->query($addQuery);
		}
		redirect("admin.php?view=menu&action=show_menu");
	}
	
	function edit_menu()
	{
		global $db,$smarty;
		$sqlQuery = "select * from menu_data where menu_id='".$_REQUEST['menu_id']."'";
		
		$menu_data = $db->fetchResults($sqlQuery);
		
		if(file_exists('menu_images/'.$menu_data[0]['menu_image']) && (!empty($menu_data[0]['menu_image'])))
			list($width, $height, $type, $attr) = getimagesize('menu_images/'.$menu_data[0]['menu_image']);
		else
		{	$width=$height=0;
		}		
		$smarty->assign('width',$width);
		$smarty->assign('height',$height);
		
		
		$smarty->assign('menu_data',$menu_data);
		if(isset($_REQUEST['submit']))
		{
			$d=strip_tags($_REQUEST['desc']);
			if(empty($d))  
				$desc=ucfirst($_REQUEST['title']);
			else
				$desc=ucfirst($_REQUEST['desc']);	
			$delQuery ="update menu_data set menu_title='".$_REQUEST['title']."' , menu_desc='".$desc."'  where menu_id='".$_REQUEST['menu_id']."'";
			$db->query($delQuery);
			
			if( !empty($_FILES['image_browse']['name'])	&& ( $_REQUEST['menu_id'] !='0') )
			{
				$image_tempname = $_FILES['image_browse']['name'];
				$ImageDir ='menu_images/';
				$ImageName =$ImageDir . $image_tempname;
				if (move_uploaded_file($_FILES['image_browse']['tmp_name'],$ImageName)) 
				{
					$delQuery ="update menu_data set menu_image='".$image_tempname."' where menu_id='".$_REQUEST['menu_id']."'";
					$db->query($delQuery);
					
					if(!empty($_REQUEST['menu_image']))
					{
						if(file_exists( "menu_images/".$_REQUEST['menu_image'] ))
							unlink("menu_images/".$_REQUEST['menu_image']);
					}
				}
			}
			
			redirect("admin.php?view=menu&action=show_menu");
		}
	}
	
	function del_menu()
	{
		global $db;
//			$delQuery ="update menu_data set menu_deleted='Y' where menu_id='".$_REQUEST['menu_id']."'";
		$delQuery ="delete from  menu_data where menu_id='".$_REQUEST['menu_id']."'";
		$db->query($delQuery);
		redirect("admin.php?view=menu&action=show_menu");
	}	
	
	function set_menu()
	{
		global $db;
		$setQuery ="update menu_data set menu_status='".$_REQUEST['set']."' where menu_id='".$_REQUEST['menu_id']."'";
		$db->query($setQuery);
		redirect("admin.php?view=menu&action=show_menu");
	}	
	
	function set_show()
	{
		global $db;
		$setQuery ="update menu_data set menu_show='".$_REQUEST['set']."' where menu_id='".$_REQUEST['menu_id']."'";
		$db->query($setQuery);
		redirect("admin.php?view=menu&action=show_menu");
	}	
	
		
	function __destruct(){
	
	}
}
?>