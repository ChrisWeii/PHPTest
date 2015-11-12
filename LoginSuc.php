<?
// 取得系統組態
include ("config.php");

// 連結資料庫
include ("connect.php");

//測試試否連結上資料庫
echo $link."<br>";
if($link) echo "YES";
else      echo "NO";
?>