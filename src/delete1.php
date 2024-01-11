<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517324-final;charset=utf8','LAA1517324','Pass0919');
    $sql=$pdo->prepare('delete from game where id=?');
    if($sql->execute([$_POST['id']])){
        echo '削除に成功しました。';
    }else{
        echo '削除に失敗しました。';
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
<button onclick="location.href='shohin.php'">一覧画面へ戻る</button>
<?php require 'footer.php'; ?>