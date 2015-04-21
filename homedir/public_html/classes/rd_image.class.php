<?php
 
 class rd_image
{
	function __construct()
	{}
	
	function list_image()
	{	
		global $db,$smarty,$pager;
		$sqlQuery ="select * from album where album_status='Y' and album_deleted='N' and album_type=2 order by album_id desc ";
		$link="index.php?page=rd_image&action=list_image";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	
		$image=$db->fetchResults($sqlQuery );
		$smarty->assign('image',$image);
		
		
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
	}
	
	function show_image()
	{	
		global $db,$smarty;
		$image=$db->fetchResults("select * from album_data where ad_status='Y' and ad_deleted='N' and  album_id='".$_REQUEST['id']."'");
		$smarty->assign('image',$image);
		
		$imagehed=$db->fetchResults("select * from album where album_status='Y' and album_deleted='N' and album_type=2 and album_id='".$_REQUEST['id']."' limit 0,1");
		$smarty->assign('imagehed',$imagehed);
		
		
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
	}
	
	function __destruct()
	{}
}
?>