<?php
$redis = new Redis();
if($redis->connect('127.0.0.1', 6379)){
    echo "Connection to server sucessfully";
//查看服务是否运行
    echo "Server is running: " . $redis->ping();
}
//设置 redis 字符串数据
$redis->set("name", "wzy");
echo "<br><br>";
// 获取存储的数据并输出
echo $redis->get("name");
echo "<br><br>";
$redis->lpush("tutorial-list", "Redis");
$redis->lpush("tutorial-list", "Mongodb");
$redis->lpush("tutorial-list", "Mysql");
// 获取存储的数据并输出
$arList = $redis->lrange("tutorial-list", 0 ,6);
print_r($arList);
echo "<br><br>";
$arList = $redis->keys("*");
print_r($arList);
