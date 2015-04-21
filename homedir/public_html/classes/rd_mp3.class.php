<?php

class rd_mp3
{
	
	function __construct()
	{}
	
	function list_mp3()
	{	
		global $db,$smarty,$pager;
		$sqlQuery ="select * from album where album_status='Y' and album_deleted='N' and album_type=1 order by album_id desc ";
		
		$link="index.php?page=rd_mp3&action=list_mp3";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	
		$mp3=$db->fetchResults($sqlQuery );
				
		$smarty->assign('mp3',$mp3);
		
	}
	
	function show_mp3()
	{	
		global $db,$smarty;
		$mp3=$db->fetchResults("select * from album_data where ad_status='Y' and ad_deleted='N' and album_id='".$_REQUEST['id']."'");
		$smarty->assign('mp3',$mp3);
		
		$mp3hed=$db->fetchResults("select * from album where album_status='Y' and album_deleted='N' and album_type=1 and album_id='".$_REQUEST['id']."' limit 0,1");
		$smarty->assign('mp3hed',$mp3hed);
		
	}
	

	function __destruct()
	{
		
	}

}
?>