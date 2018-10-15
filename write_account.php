<?php
@ $db = new mysqli('127.0.0.1','root','dlcjf2779!','AlwaysOn');
mysqli_set_charset($db, "utf8");
if (mysqli_connect_errno()){
echo "ERROR: 데이타베이스에 연결할 수 없습니다.";
exit;
}
$id = $_GET["id"];
//$pass = $_GET['pass'];
//$name = $_GET['name'];
$query = "INSERT INTO account (id,pwd,name,dept) VALUES ('$_GET[id]','$_GET[pwd]','$_GET[name]','$_GET[major]')";
$result = mysqli_query($db, $query);
if ($result) {
echo $db->affected_rows." data inserted into databases.";
}else{
echo "ERROR: 자료가 추가되지 않았습니다.";
}
mysqli_free_result($result);
mysqli_close($db);
?>
