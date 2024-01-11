<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517324-final;charset=utf8','LAA1517324','Pass0919');

    $sql=$pdo->prepare('update game set name=?, genre=? where id=?');

    if (empty($_POST['name'])) {
        echo 'ゲーム名を入力してください。';
    } else
    if (empty($_POST['genre'])) {
        echo 'ジャンルを入力してください。';
    } else
    if($sql->execute([htmlspecialchars($_POST['name']), $_POST['genre'], $_POST['id']])){
        echo '更新に成功しました。';
    }else{
        echo '更新に失敗しました。';
    }
?>

<hr>
<table>
<tr><th>ゲームID</th><th>ゲーム名</th><th>ジャンル</th></tr>
<?php
    foreach ($pdo->query('select * from game') as $row) {
        echo '<tr>';
        echo '<td>', $row['id'], '</td>';
        echo '<td>', $row['name'], '</td>';
        echo '<td>', $row['genre'], '</td>';
        echo '</tr>';
        echo "\n";
    }
?>
</table>
<button onclick="location.href='shohin.php'">一覧表示へ戻る</button>
<?php require 'footer.php'; ?>