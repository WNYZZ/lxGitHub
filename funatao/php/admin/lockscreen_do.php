<?php	require_once(dirname(__FILE__).'/../include/common.inc.php');

/*
**************************
(C)2010-2014 phpMyWind.com
update: 2013-11-27 11:27:45
person: Feng
**************************
*/


//启动SESSION
if(!isset($_SESSION)) session_start();


//初始化参数
$action = isset($action) ? $action : '';


//锁屏操作
if($action == 'lock')
{
	if(!isset($_SESSION['admin'])) exit('Request Error!');

	$_SESSION['lockname'] = $_SESSION['admin'];
	unset($_SESSION['admin']);
	exit();
}


//锁屏密码
else if($action == 'check')
{
	if(!isset($_SESSION['lockname'])) exit('Request Error!');

	$row = $dosql->GetOne("SELECT `password` FROM `#@__admin` WHERE username='".$_SESSION['lockname']."'");

	if($row['password'] == md5(md5($password)))
	{
		$_SESSION['admin'] = $_SESSION['lockname'];
		unset($_SESSION['lockname']);

		echo TRUE;
		exit();
	}
	else
	{
		echo FALSE;
		exit();
	}
}


//设置当前站点
else if($action == 'selsite')
{
	if(isset($sitekeyvalue))
	{
		$r = $dosql->GetOne("SELECT `id`,`sitekey` FROM `#@__site` WHERE `sitekey`='$sitekeyvalue'");
		if(isset($r['id']))
		{
			$_SESSION['siteid']  = $r['id'];
			$_SESSION['sitekey'] = $r['sitekey'];
		}
		else
		{
			$r = $dosql->GetOne("SELECT `id`,`sitekey` FROM `#@__site` ORDER BY id ASC");
			if(isset($r['id']))
			{
				$_SESSION['siteid']  = $r['id'];
				$_SESSION['sitekey'] = $r['sitekey'];
			}
			else
			{
				$_SESSION['siteid']  = '';
				$_SESSION['sitekey'] = '';
			}
		}
	}

	//大后台不刷新左侧菜单
	if(!empty($_SESSION['t_adminlevel']))
		echo 2;
	else if($_SESSION['adminlevel'] == 1)
		echo 1;
	else
		echo 2;
	
	exit();
}


//设置当前权限
else if($action == 'selpriv')
{
	//超级管理员才可以切换权限
	if($_SESSION['adminlevel'] == 1 && !empty($privid))
	{
		//第一次进行切换
		if(empty($_SESSION['t_adminlevel']) &&
		   $privid == 1)
		{
			echo 2;
		}

		//如果进行过切换，但本次切换和上次切换相同
		else if(!empty($_SESSION['t_adminlevel']) &&
		   $_SESSION['t_adminlevel'] == $privid)
		{
			echo 2;
		}

		//如果进行过切换，本次为新的切换
		else if(!empty($_SESSION['t_adminlevel']) &&
		   $_SESSION['t_adminlevel'] != $privid)
		{
			$_SESSION['t_adminlevel'] = $privid;

			if($privid == 1)
			{
				$_SESSION['t_adminlevel'] = '';
				unset($_SESSION['t_adminlevel']);
			}

			echo 1;
		}
		else
		{
			$_SESSION['t_adminlevel'] = $privid;
			
			echo 1;
		}
	}

	exit();
}


//删除登陆背景
else if($action == 'delloginbg')
{
	if(isset($delloginbg))
	{
		unlink(dirname(__FILE__).'/'.$delloginbg);
	}

	echo TRUE;
	exit();
}


//无条件返回
else
{
	exit('Request Error!');
}
?>