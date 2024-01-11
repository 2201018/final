<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql=$pdo->prepare('insert into game(name,genre) values (?, ?, ?)');
        if(empty($_POST['name'])){
            echo 'ゲーム名を入力してください。';
        }else if(empty($_POST['genre'])){
            echo 'ジャンルを入力してください。';
        }else if($sql->execute($_POST['id'],$_POST['name'],$_POST['genre'] )){
            echo '<font color="red">追加に成功しました。</font>';
        }else{
            echo '<font color="red">追加に失敗しました。</font>';
        }
    ?>
    
    <hr>
    <table>
        <tr><th>ゲームID</th><th>ゲーム名</th><th>ジャンル</th></tr>
        <?php
        foreach($pdo->query('select * from game') as $row){
           echo '<tr>';
           echo '<td>', $row['id'], '</td>';
           echo '<td>', $row['name'], '</td>';
           echo '<td>', $row['genre'], '</td>';
           echo '</tr>';
           echo "\n";
        }
        ?>
    </table>
    <button onclick="location.href='add-input.php'">追加画面へ戻る</button>
    <button onclick="location.href='shohin.php'">一覧表示へ戻る</button>
<?php require 'footer.php'; ?>