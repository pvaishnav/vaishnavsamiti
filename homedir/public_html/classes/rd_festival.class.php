<?php

class rd_festival
{
	
	function __construct()
	{}
	
	function list_festival()
	{	
		global $db,$smarty,$pager;
		$sqlQuery = "select * from articles where article_status='Y' and article_deleted='N' and article_type=4 order by article_id desc " ;	
		$link="index.php?page=rd_festival&action=list_festival";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	

		$festival=$db->fetchResults($sqlQuery);
		$smarty->assign('festival',$festival);
		
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
		
		
	}
	
	function show_festival()
	{	
		if ($_REQUEST['id']== '11')
			$articletype=7;
		else
			$articletype=4;
		global $db,$smarty;
		$festival=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N' and ".$articletype." and article_id='".$_REQUEST['id']."'");
		$smarty->assign('festival',$festival);
		
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
		
	}
	
		function get_image($path,$image,$size)
	{
	global $site_url;
	
	if($image=="")
		$image="empty";
	if(file_exists('.'.$path.$image))
		$imageinfo=getimagesize('.'.$path.$image);
	$width=$imageinfo[0];
	$height=$imageinfo[1];
	
	if($size<=$width && $size<=$height)
	{
		if($width<=$height)
		{
			$iheight=$size;
			$per=($size/$height)*100;
			$iwidth=($per*$width)/100;
		}
		else if($height<=$width)
		{
			$iwidth=$size;
			$per=($size/$width)*100;
			$iheight=($per*$height)/100;
		}
	}
	else if($size<=$width && $size>=$height)
	{
		$iwidth=$size;
		$per=($size/$width)*100;
		$iheight=($per*$height)/100;
	}
	else if($size<=$height && $size>=$width)
	{
		$iheight=$size;
		$per=($size/$height)*100;
		$iwidth=($per*$width)/100;
	}
	else if($size>=$height && $size>=$width)
	{
		$iheight=$height;
		$iwidth=$width;
	}
	echo '<img src="'.$site_url.$path.$image.'" alt="'.$image.'" height="'.$iheight.'" width="'.$iwidth.'"/>';
	
	
	$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
  }

	function __destruct()
	{
		
	}

}
?>