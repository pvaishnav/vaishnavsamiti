<?php

class rd_ringtone
{
	
	function __construct()
	{}
	
	function list_ringtone()
	{	
		global $db,$smarty,$pager;
		$sqlQuery ="select * from album where album_status='Y' and album_deleted='N' and album_type=3 order by album_id desc ";
		$link="index.php?page=rd_ringtone&action=list_ringtone";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	
		$ringtone=$db->fetchResults($sqlQuery );
		
		$smarty->assign('ringtone',$ringtone);
		
	}
	
	function show_ringtone()
	{	
		global $db,$smarty;
		$ringtone=$db->fetchResults("select * from album_data where ad_status='Y' and ad_deleted='N' and album_id='".$_REQUEST['id']."'");
		$smarty->assign('ringtone',$ringtone);
		
		$ringtonehed=$db->fetchResults("select * from album where album_status='Y' and album_deleted='N' and album_type=3 and album_id='".$_REQUEST['id']."' limit 0,1");
		$smarty->assign('ringtonehed',$ringtonehed);
		
	}
	
		

	function __destruct()
	{
		
	}

}
?>