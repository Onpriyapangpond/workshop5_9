<?php include "connect.php"?>
<html>
<head><meta charset="utf-8"></head>
<body style="display:flex;">
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();

while($row=$stmt->fetch()):
?>
    <div style="margin-left:1em;">
        <a href="conwork_5.php?username=<?=$row["username"]?>" style="text-decoration: none;">
        <img src="member_photo/<?=$row["username"]?>.jpg" width=100><br>
        <?=$row["name"]?>
    </div>
<?php endwhile;?>
</body>
</html>