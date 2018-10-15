<?php
@ $db = new mysqli('127.0.0.1','root','dlcjf2779!','AlwaysOn');
mysqli_set_charset($db, "utf8");
if (mysqli_connect_errno()){
   // echo "ERROR: 데이타베이스에 연결할 수 없습니다.";
    exit;
}
$data = $_GET["id"];
$res = mysqli_query($db,"select id,pwd,name,dept from account where id='$_GET[id]'");
//$res = mysqli_query($db,"select * from identity");
$result = array();
while($row = mysqli_fetch_array($res)){
        array_push($result, array('id'=>$row[0],'pwd'=>$row[1],'name'=>$row[2],'major'=>$row[3]));        
}   
$data = array('data'=>$result);

$json = json_encode($data);

echo $json;
mysqli_close($db);

?>
