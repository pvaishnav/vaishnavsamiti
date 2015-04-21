<?php

class functions
{	
	function __construct()
	{
		
	}
	
	function right_news()
	{
		global $db,$smarty,$pager;
		$rightnews=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N' and article_type=6 order by article_id desc limit 0,4 ");
		$smarty->assign('rightnews',$rightnews);
		$c_date=date('d-M-Y');
		$smarty->assign('c_date',$c_date);
	
	}
	
	function wel_come()
	{
		global $db,$smarty,$pager;
		
		$head_image = $db->fetchResults("select head_image, googlead,head_left_image,head_right_image from users where user_id=1");
		$smarty->assign('head_image',$head_image);
		
		
		$welcome=$db->fetchResults("select * from articles where article_status='Y' and article_deleted='N' and article_id=11 limit 0,1 ");
		$smarty->assign('welcome',$welcome);
	}
	
	function show_hot_news()
	{
		global $db,$smarty,$pager;
		$sqlQuery = "select * from category where cat_type='Article' and cat_name='News'";
		$data = $db->fetchResults($sqlQuery);
		$article_type = $data[0]['cat_id'];
		
		$sqlQuery ="select * from articles where article_deleted='N' and article_show='Y' and article_status='Y' and article_type='".$article_type."'  
		order by article_id desc limit 10 ";

		$hot_news = $db->fetchResults($sqlQuery);
		$smarty->assign('hot_news',$hot_news);
	}

	function show_old_festival()
	{
		global $db,$smarty,$pager;
		$sqlQuery = "select * from category where cat_type='Article' and cat_name='Festival' ";
		$data = $db->fetchResults($sqlQuery);
		$article_type = $data[0]['cat_id'];
		
		$sqlQuery ="select * from articles where article_deleted='N' and article_show='Y' and article_status='Y' and  article_type='".$article_type."'  
		order by article_id desc limit 10 ";

		$old_festival = $db->fetchResults($sqlQuery);
		$smarty->assign('old_festival',$old_festival);
	}

	function show_hot_parcha()
	{ 
		global $db,$smarty,$pager;
		$sqlQuery = "select * from category where cat_type='Article' and cat_name='parcha'";
		$data = $db->fetchResults($sqlQuery);
		$article_type = $data[0]['cat_id'];
		
		$sqlQuery ="select * from articles where article_deleted='N' and article_show='Y' and article_status='Y' and article_type='".$article_type."' order by article_id desc limit 10 ";

		$hot_parcha = $db->fetchResults($sqlQuery);
		$smarty->assign('hot_parcha',$hot_parcha);
	}
	
	function show_hot_menu()
	{ 
		global $db,$smarty,$pager;
		
		/*$sqlQuery = "select * from category where cat_type='Article' and cat_name='Menu'";
		$data = $db->fetchResults($sqlQuery);
		$article_type = $data[0]['cat_id'];
		
		$sqlQuery ="select * from articles where article_deleted='N' and article_show='Y' and article_status='Y' and article_type='".$article_type."' order by article_id desc limit 10 ";
*/

		$sqlQuery ="select * from menu_data where menu_deleted='N' and menu_show='Y'  order by menu_position asc";

		$hot_menu = $db->fetchResults($sqlQuery);
		$smarty->assign('hot_menu',$hot_menu);
	}
	
	function show_random_image()
	{
		global $db,$smarty;
		if(isset($_REQUEST['id'])  && !empty($_REQUEST['id']))
		{
			$sel="select * from banner_detail  where cat_id=".$_REQUEST['id']." and position='random' order by rand() limit 1";
			$this->db->Query($sel);
			if($this->db->num_rows)
			{
				$sel_data=$this->db->FetchAllResults($sel);
				$banner_random= $sel_data[0]['banner_image'];
				$smarty->assign("banner_random", $banner_random);
			}
		}
		else
		{
			
			$sel="select * from banner_detail  where position='random' order by rand() limit 1";
			$this->db->Query($sel);
			if($this->db->num_rows)
			{
				$sel_data=$this->db->FetchAllResults($sel);
				$banner_random= $sel_data[0]['banner_image'];
				$smarty->assign("banner_random", $banner_random);
			}
		}
	}


	function isval($sel,$iskey)
	{
		$val=explode(",",$sel);
		foreach($val as $key=>$val)
		{
			if($val==$iskey && $val!='')
			{
				return true;
				break;
			}
		}
		return false;
	}
	
	
	function getExtension($str) 
 {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l); 
         return $ext;
 }
 

		
	function __destruct()
	{
		
	}
}
?>