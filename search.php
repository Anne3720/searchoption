<?php

$dbname="root";
$dbpass="";
$dbhost="127.0.0.1";
$dbdatabase="word";

//生成一个连接
$db_connect=mysql_connect($dbhost,$dbname,$dbpass);

//选择一个需要操作的数据库
mysql_select_db($dbdatabase,$db_connect);

$keyword = $_GET['keyword'];
// 获取查询结果
$strsql="select * from `word` where `word` like '$keyword%'";
$result=mysql_query($strsql);

$list = [];
// 循环取出记录
while ($row=mysql_fetch_array($result))
{
    $list[] = $row['word'];
}

echo json_encode($list);