<?php
class other_image {

	function __construct(){
	}
	
	function show_other_image()
	{
		global $db,$smarty;
		
		$sqlQuery ="select * from other_image order by id desc";;
		$other_img = $db->fetchResults($sqlQuery);
		$smarty->assign('other_img',$other_img);	
		
		if(file_exists('otherimages/'.$other_img[0]['img_path']) && (!empty($other_img[0]['img_path'])))
			list($width, $height, $type, $attr) = getimagesize('otherimages/'.$other_img[0]['img_path']);
		else
		{	$width=$height=0;
		}		
	
		$smarty->assign('width',$width);
		$smarty->assign('height',$height);
		$smarty->assign('action',"show_other_image");
		
		if(isset($_REQUEST['submit'])  && $_REQUEST['submit']=='Save')
		{
			if( !empty($_FILES['image_browse']['name']) )
		{	
			//$article_image="";
			$image_tempname="";
			$image_tempname = $_FILES['image_browse']['name'];
			$ImageDir ='otherimages/';
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
			
			$addQuery ="insert into other_image (img_path,deleted) values('".$image_tempname."','N')";
			$db->query($addQuery);
		}
			redirect("admin.php?view=other_image&action=".$_REQUEST['action']);
		}
	}
	
	
	function del_other_image()
	{
		global $db;
			$delQuery ="DELETE FROM other_image WHERE id='".$_REQUEST['del_id']."'";
			$db->query($delQuery);
		redirect("admin.php?view=other_image&action=show_other_image");
	}	
	
		
	function __destruct(){
	
	}
}
?>