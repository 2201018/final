<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
    echo '<table>';
    echo '<tr><th>ゲームID</th><th>ゲーム名</th><th>ジャンル</th></tr>';
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517324-final;charset=utf8','LAA1517324','Pass0919');
    $sql=$pdo->query('select * from game');
    foreach($sql as $row){
            echo '<tr>';
            echo '<td>', $row['id'], '</td>';
            echo '<td>', $row['name'], '</td>';
            echo '<td>', $row['genre'], '</td>';
            echo '</tr>';
    
    }
    echo '</table>';
?>
<form action="index.php">
    <button type='submit'>戻る</button>
</form>
<?php require 'footer.php'; ?>