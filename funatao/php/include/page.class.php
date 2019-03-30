<?php	if(!defined('IN_PHPMYWIND')) exit('Request Error!');

/*
 * 分页类
 *
**************************
(C)2010-2014 phpMyWind.com
update: 2011-4-26 15:00:19
person: Feng
**************************
*/


$dopage = new Page();

class Page
{
	var $page;      //当前页码
	var $totalpage; //总共页数
	var $pagenum;   //每页记录数
	var $total;     //总共记录数

    function __construct()
    {
		$this->Init();
    }

    function Page()
    {
		$this->__construct();
    }
	
	function Init()
    {
		$this->page      = '';
		$this->totalpage = '';
		$this->pagenum   = '';
		$this->total     = '';
    }

	//获取分页变量
	function GetPage($sql,$pagenum=20)
	{
		global $dosql;

		$dosql->Execute($sql);
		$this->page      = @$GLOBALS['page'];
		$this->total     = $dosql->GetTotalRow();
		$this->pagenum   = $pagenum;
		$this->totalpage = ceil($this->total / $this->pagenum);
		
		if(!isset($this->page) || !intval($this->page) || $this->page<=0 || $this->page > $this->totalpage)
		{
			$this->page = 1;
		}

		$startnum = ($this->page-1) * $this->pagenum;

		$sql .= " limit $startnum, $this->pagenum";

		return $dosql->Execute($sql);
	}

	//显示分页列表
	function GetList()
	{
		global $cfg_isreurl,$keyword;

		$pagetxt = '';

		if($this->total <= $this->pagenum)
		{
			$pagetxt = '<div id="pages_pg_2" class="pages"><span class="count">页码: 1 / 1</span><span class="number"><span title="First Page">首 页</span><span title="Prev Page">上一页</span><span title="Page 1">[1]</span><span title="Next Page">下一页</span><span title="Last Page">末 页</span></span><br></div>';
			
		}

		else
		{
			//获取除page参数外的其他参数
			$query_str = explode('&',$_SERVER['QUERY_STRING']);

			if($query_str[0] != '')
			{
				$query_strs = '';

				foreach($query_str as $k)
				{
					$query_str_arr = explode('=', $k);

					if(strstr($query_str_arr[0],'page') == '')
					{
						$query_str_arr[0] = isset($query_str_arr[0]) ? $query_str_arr[0] : '';
						$query_str_arr[1] = isset($query_str_arr[1]) ? $query_str_arr[1] : '';

						//伪静态设置
						if($cfg_isreurl == 'Y' &&
						   !isset($keyword))
						{
							$query_strs .= '-'.$query_str_arr[1];
						}
						else
						{
							$query_strs .= $query_str_arr[0].'='.$query_str_arr[1].'&';
						}
					}
				}
		
				$nowurl = '?'.$query_strs;
			}
			else
			{
				$nowurl = '?';
			}
			
			//伪静态设置
			if($cfg_isreurl == 'Y' &&
			   !isset($keyword))
			{
				$request_arr = explode('.',$_SERVER['SCRIPT_NAME']);
				$request_rui = explode('/',$request_arr[count($request_arr)-2]);

				//获取除页码以外的参数
				$nowurl      = ltrim($request_rui[count($request_rui)-1],'/').ltrim($nowurl,'?');
			}
			$previous = $this->page - 1;
			if($this->totalpage == $this->page) $next = $this->page;
			else $next = $this->page + 1;





			$pagetxt = '<div class="page_list pages" id="pages_pg_2"><span class="count">页码: '.$this->page.' / '.$this->totalpage.'</span><span class="number">';

			//上一页 第一页
			if($this->page > 1)
			{
				//伪静态设置
				if($cfg_isreurl == 'Y' &&
				   !isset($keyword))
				{
					$pagetxt .= '<span title="第一页"><a href="'.$nowurl.'-1.html">首 页</a></span>';
					$pagetxt .= '<span title="上一页"><a href="'.$nowurl.'-'.$previous.'.html">上一页</a></span>';
				}
				else
				{
					$pagetxt .= '<span title="第一页"><a href="'.$nowurl.'page=1">首 页</a></span>';
					$pagetxt .= '<span title="上一页"><a href="'.$nowurl.'page='.$previous.'">上一页</a></span>';
				}
			}
			else
			{
				$pagetxt .= '<span title="First Page">首 页</span>';
				$pagetxt .= '<span title="Prev Page">上一页</span>';
			}

			//当总页数小于10
			if($this->totalpage < 10)
			{
				for($i=1; $i <= $this->totalpage; $i++)
				{
					if($this->page == $i)
					{
						$pagetxt .= '<span title="第 '.$i.' 页">['.$i.']</span>';
					}
					else
					{
						//伪静态设置
						if($cfg_isreurl == 'Y' &&
						   !isset($keyword))
						{
							$pagetxt .= '<span title="第 '.$i.' 页"><a href="'.$nowurl.'-'.$i.'.html"   title="第 '.$i.' 页">['.$i.']</a></span>';
						}
						else
						{
							$pagetxt .= '<span title="第 '.$i.' 页"><a href="'.$nowurl.'page='.$i.'">['.$i.']</a></span>';
						}
					}
				}
			}
			else
			{
				if($this->page==1 or $this->page==2 or $this->page==3)
				{
					$m = 1;
					$b = 7;
				}

				//如果页面大于前三页并且小于后三页则显示当前页前后各三页链接
				if($this->page>3 and $this->page<$this->totalpage-2)
				{
					$m = $this->page-3;
					$b = $this->page+3;
				}

				//如果页面为最后三页则显示最后7页链接
				if($this->page==$this->totalpage or $this->page==$this->totalpage-1 or $this->page==$this->totalpage-2)
				{
					$m = $this->totalpage - 7;
					$b = $this->totalpage;
				}
				if($this->page > 4)
				{
					$pagetxt .= '<a href="javascript:;">...</a>';
				}

				//显示数字页码
				for($i=$m; $i<=$b; $i++)
				{
					if($this->page == $i)
					{
						$pagetxt .= '<span title="第 '.$i.' 页">['.$i.']</span>';
					}
					else
					{
						//伪静态设置
						if($cfg_isreurl == 'Y' &&
						   !isset($keyword))
						{
							$pagetxt .= '<a href="'.$nowurl.'-'.$i.'.html" class="num" title="第 '.$i.' 页">['.$i.']</a>';
						}
						else   
						{
							$pagetxt .= '<span title="第 '.$i.' 页"><a href="'.$nowurl.'page='.$i.'">['.$i.']</a></span>';
						}
					}
				}
				if($this->page < $this->totalpage-3)
				{
					$pagetxt .= '<a href="javascript:;">...</a>';
				}
			}

			//下一页 最后页
			if($this->page < $this->totalpage)
			{
				//伪静态设置
				if($cfg_isreurl == 'Y' &&
				   !isset($keyword))
				{
					$pagetxt .= '<span title="下一页"><a href="'.$nowurl.'-'.$next.'.html">下一页</a></span>';
					$pagetxt .= '<span title="最后一页"><a href="'.$nowurl.'-'.$this->totalpage.'.html">最后一页</a></span>';
				}
				else
				{
					$pagetxt .= '<span title="下一页"><a href="'.$nowurl.'page='.$next.'">下一页</a></span>';
					$pagetxt .= '<span title="最后一页"><a href="'.$nowurl.'page='.$this->totalpage.'">最后一页</a></span>';
				}
			}
			else
			{
				$pagetxt .= '<span title="已是最后一页">下一页</span>';
				$pagetxt .= '<span title="已是最后一页">末页</span>';
				
			}
			$pagetxt .= '</span></div>';
		}
		
		return $pagetxt;
	}
}
?>