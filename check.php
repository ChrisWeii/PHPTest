<?php 
//連結資料庫
    session_start();
    require_once("connect.php");
    $link = create_connection();
    $id = $_POST["id"]; //login.php傳來帳號欄位輸入值
    $pwd = $_POST["pwd"]; //login.php傳來密碼欄位輸入值
    $sql  =  "select MemberID from Member where MemberName='$id' and MemberPsw='$pwd'";
    $result   =  execute_sql("test", $sql, $link);
    $total=   mysql_num_rows($result);  
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>  
    <link rel="stylesheet" type="text/css" href="bootstrap.css" /> 
</head>
<body>
    <div class="span4" >
    <?php 

        //判斷所選取資料的數目是否大於0，若大於0則表示資料庫有這筆帳號和密碼，即登入成功
        if($total>0){
           $_SESSION['username'] = $id; 
           echo "歡迎" . $_SESSION['username'] . "登入成功！<br/>";             
           echo '<a class="btn btn-danger btn-small" href="logout.php">登出</a>';
        } 
        
        else{ 
           echo "帳號或密碼輸入有誤，請再重試一次！<br/>";
           echo '<a class="btn btn-info btn-small" href="logout.php">返回</a>';
        }
    ?>   
    </div>
</body>
</html>