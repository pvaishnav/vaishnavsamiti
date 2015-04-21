<?php

class rd_parcha
{
	
	function __construct()
	{}
	
	function list_parcha()
	{	
		global $db,$smarty,$pager;
		$sqlQuery ="select * from articles where article_status='Y' and article_deleted='N' and article_type=5 order by article_id desc ";
		
		$link="index.php?page=rd_parcha&action=list_parcha";
		
		$pager->pageCount($sqlQuery,$link);
		if(isset($_REQUEST['page_num']))
			$cnt=$pager->show * ($_REQUEST['page_num']-1);
		else
			$cnt=0;		
		$lim=" limit ".$cnt.",".$pager->show;
		
		$sqlQuery.=$lim;	
		$parcha=$db->fetchResults($sqlQuery);	
		$smarty->assign('parcha',$parcha);
		
	}
	
	function show_parcha()
	{	
		global $db,$smarty;
		$parcha=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N' and article_type=5 and article_id='".$_REQUEST['id']."'");
		$smarty->assign('parcha',$parcha);
		
	}
	
	
	function __destruct()
	{
		
	}

}
?>