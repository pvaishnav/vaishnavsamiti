<?php

class pagination
{	

	var $dbh;
	var $pages;
	var $counts;
	var $show;
	function __construct()
	{
		global $page_row;
		$this->dbh=new db_MySQL();
		$this->dbh->Connect();
		$this->show=$page_row;
		//echo "pager";
	}
	function pageCount($Qry,$link)
	{
		//$listingQry="select * from customer where id=$id ";
		//echo $Qry;
		global $objSmarty;
		
		$this->dbh->Query($Qry);
		$this->counts=$this->dbh->num_rows;
		//echo "-".$this->dbh->num_rows."-";
	//	echo "count=".$this->counts;
		$this->pages= ceil( $this->counts/$this->show);
		//echo "page=".$this->pages;
		if(isset($_REQUEST['page_num']))
			$page_num=$_REQUEST['page_num'];
		else
			$page_num=1;
				
		$show_link=0;		
		$links='<div class="oferta_pagination">';
		if($this->pages>1)
		{
			if($page_num>5)
				$i=$page_num-5;
			else
				$i=1;
					
			for(;$i<$page_num;$i++)
			{	$links .='<span class="pagebg"><a href="'.$link.'/p-'.$i.'">'.$i.'</a></span>';	$show_link=1;		}
			
			$links .='<span class="current">'.$page_num.'</span>';
			
			for($i++,$j=1;$j<=5 and $i <= $this->pages;$i++,$j++)
			{
				$links .='<span class="pagebg"><a href="'.$link.'/p-'.$i.'">'.$i.'</a></span>';
				$show_link=1;
			}
			
		}
		$links .='</div>';
//		$links .="</tr></table>";
		//echo $links;	
			
		$objSmarty->assign("page_links", $links);
		$objSmarty->assign("show_link", $show_link);
	}
	function __destruct()
	{
		$this->dbh->Disconnect();
	}

}
?>