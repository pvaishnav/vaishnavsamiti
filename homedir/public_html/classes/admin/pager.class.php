<?php

class pager
{	
	var $pages;
	var $counts;
	var $show;
	function __construct()
	{
		$this->show=12;
		//echo "pager";
	}
	function pageCount($Qry,$link)
	{
		//$listingQry="select * from customer where id=$id ";
		//echo $Qry;
		global  $db,$smarty;
		
		//$db->query($Qry);
		$this->counts=$db->numRows($Qry);
		//echo "-".$this->dbh->num_rows."-";
	//	echo "count=".$this->counts;
		$this->pages= ceil( $this->counts/$this->show);
		//echo "page=".$this->pages;
		if(isset($_REQUEST['page_num']))
			$page_num=$_REQUEST['page_num'];
		else
			$page_num=1;
		$show_page=0;			
		$links='<div >';
		if($this->pages>1)
		{
			if($page_num>5)
				$i=$page_num-5;
			else
				$i=1;
					
			for(;$i<$page_num;$i++)
			{	
				$links .='<a href="'.$link.'&page_num='.$i.'"><div class="box_num">'.$i.'</div></a>';
			}
			$links .='<div class="box_num2">'.$page_num.'</div>';
			$show_page=$page_num;
			
			for($i++,$j=1;$j<=5 and $i <= $this->pages;$i++,$j++)
			{
				$links .='<a href="'.$link.'&page_num='.$i.'"><div class="box_num">'.$i.' </div></a>';	
			}
			
		}
		$links .='</div>';
//		$links .="</tr></table>";
			
		$smarty->assign("page_links", $links);
		$smarty->assign("show_page", $show_page);
	}
	function __destruct()
	{

	}

}
?>