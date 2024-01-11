<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
    <form action="add-output.php" method="post">
        ゲーム名<input type="text" name="name"><br>
        ジャンル<input type="text" name="genre"><br>
        <button type="submit">追加</button>
    </form>
    <form action="index.php">
        <button type='submit'>戻る</button>
    </form>
<?php require 'footer.php'; ?>