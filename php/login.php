<?php

include('config.php');
$link = @mysqli_connect(HOST,USER,PASS) or die('数据库连接失败');
mysqli_select_db($link,DBNAME);
mysqli_set_charset($link,'utf8');
//接收传值
$name = $_POST['email'];
$pass = $_POST['password'];

//验证数据库里的账号 密码
$sql = "select * from user where name='{$name}' or  email='{$name}'";
$result = mysqli_query($link,$sql);
if($result && mysqli_num_rows($result)>0){//用户存在
    $row = mysqli_fetch_assoc($result);
    if($pass != $row['pass']){//判断密码
        echo "<script>alert('密码错误，请重新输入！');history.go(-1);</script>";
        exit;
    }
    echo "<script>alert('登录成功！');location.href='../login.html'</script>";
    exit;

}else{//用户不存在
    echo "<script>alert('帐号不存在，请重新输入！');history.go(-1);</script>";
    exit;
}

?>
