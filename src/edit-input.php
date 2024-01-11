<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
    echo '<table>';
    echo '<tr><th>ゲームID</th><th>ゲーム名</th><th>ジャンル</th></tr>';
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517324-final;charset=utf8','LAA1517324','Pass0919');
    $sql=$pdo->prepare('select * from game where id=?');
	$sql->execute([$_POST['id']]);
	foreach ($sql as $row) {
        echo '<tr>';
		echo '<form action="edit-output.php" method="post">';
		echo '<td> ';
		echo '<input type="text" name="id" value="', $row['id'], '">';
		echo '</td> ';
		echo '<td>';
		echo '<input type="text" name="name" value="', $row['name'], '">';
		echo '</td> ';
		echo '<td>';
		echo ' <input type="text" name="genre" value="', $row['genre'], '">';
		echo '</td> ';
		echo '<td><input type="submit" value="更新"></td>';
		echo '</form>';
        echo '</tr>';
		echo "\n";
	}
    echo '</table>';
?>
<form action="update.php">
    <button type='submit'>戻る</button>
</form>
<?php require 'footer.php'; ?>