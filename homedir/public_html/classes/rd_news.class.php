<?php

class rd_news
{
	
	function __construct()
	{}
	
	function list_news()
	{	
		global $db,$smarty,$pager;
		
			$sqlQuery ="select * from articles where article_status='Y' and article_deleted='N' and article_type=6 order by article_id desc ";
		$link="index.php?page=rd_news&action=list_news";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	
		
		$news=$db->fetchResults($sqlQuery );
		$smarty->assign('news',$news);
		
		
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
		
	}
	
	function show_news()
	{	
		global $db,$smarty;
		$news=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N' and article_type=6 and article_id='".$_REQUEST['id']."'");
		$smarty->assign('news',$news);
		
		
		$contact=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N'
						 and article_id=12 limit 0,1 ");
		$smarty->assign('contact',$contact);
		
	}
	
	

	function __destruct()
	{
		
	}

}
?>