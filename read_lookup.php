<?php
@ $db = new mysqli('127.0.0.1','root','dlcjf2779!','AlwaysOn');
mysqli_set_charset($db, "utf8");
if (mysqli_connect_errno()){
        echo "ERROR: 데이타베이스에 연결할 수 없습니다.";
        exit;
}
$res = mysqli_query($db,"select e_id from lookup where u_id='$_GET[userid]'");
$result = array();
while($row = mysqli_fetch_array($res)){
        array_push($result, array('e_id'=>$row[0]));
}
$data = array('data'=>$result);
$json = json_encode($data);
echo $json;
mysqli_close($db);
?>
