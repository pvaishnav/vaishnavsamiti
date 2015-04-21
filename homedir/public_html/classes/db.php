<?php
class DB {

	function __construct(){
	}
	
	function connect($host,$usr,$pass,$db)
	{
		@mysql_connect($host,$usr,$pass)or die("fail");
		//echo "connected";
		@mysql_select_db($db)or die("fail again");
		//echo "db selected";
	}
	function fetchResults($qry)
	{
		$data=array();
		$res = @mysql_query($qry) or die(@mysql_error());
		if(@mysql_num_rows($res)!=0)
		{
			while($row=@mysql_fetch_array($res))
			{
					$r1=array($row);
					$data = array_merge($data,$r1); 
			}
		}
		return $data;
	}
	function numRows($qry)
	{
		return @mysql_num_rows(@mysql_query($qry));
	}
	function query($qry)
	{
		@mysql_query($qry) or die(@mysql_error());
	}	
	function __destruct(){
	
	}
	
}

?>