<?php

class rd_menu
{
	
	function __construct()
	{}
	
	function list_menu()
	{	
		global $db,$smarty;
		$menu=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N' and article_type=10");
		$smarty->assign('menu',$menu);
		
	}
	
	function show_menu()
	{	
		global $db,$smarty;
		//$menu=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N' and article_type=10 and article_id='".$_REQUEST['id']."'");
		
		$menu=$db->fetchResults("select * from menu_data where menu_id='".$_REQUEST['id']."' order by menu_position asc");
		
		$smarty->assign('menu',$menu);
		
	}
	
	
	function __destruct()
	{
		
	}

}
?>