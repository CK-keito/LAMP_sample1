<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'keito';
$password = 'Kei0418s';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "update user set name = :name, age = :age where id = :id";
    $stmt = $dbh->prepare($sql);
    $params = array(':id' => $id, ':name' => $name, ':age' => $age);

    $stmt->execute($parmas);
    
    header('Location: index.php?fg=1');

    // print "接続成功\n";
} catch (PDOException $e) {
    // print "接続失敗: " . $e->getMessage() . "\n";
    header('Location: index.php?fg=2?err=' . $e->getMessage());
    exit();
}
?>