<?php
// 建立資料庫連線
function create_connection()
{
    include 'config.php';
    $link = mysql_connect($cfgDB_HOST . ":" . $cfgDB_PORT, $cfgDB_USERNAME, $cfgDB_PASSWORD);
    return $link;
}

// 選擇資料庫
function execute_sql($cfgDB_NAME, $sql, $link)
{
    mysql_select_db($cfgDB_NAME, $link);
    $result = mysql_query($sql, $link);
    return $result;
}
?>