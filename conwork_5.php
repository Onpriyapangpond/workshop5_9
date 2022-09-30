<?php include "connect.php"?>

<html>
<head><meta charset="utf-8"></head>
<body>
<?php

$stmt=$pdo->prepare("SELECT username,name,address,email FROM member WHERE username =?");
$stmt->bindParam(1, $_GET['username']); 
$stmt->execute();
$row=$stmt->fetch();
?>

    <div>
        <img src='member_photo/<?=$row["username"]?>.jpg' width=100>
    </div>
    <div >
        ชื่อ: <?=$row["name"]?><br>
        ที่อยู่: <?=$row["address"]?><br>
        อีเมล์: <?=$row["email"]?><br><br>
    </div>

</body>
</html> 

