<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'keito';
$password = 'Kei0418s';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    print "x\n";

    $id = $_POST['id'];
    print "a\n";
    $name = $_POST['name'];
    print "b\n";
    $age = $_POST['age'];
    print "c\n";

    $sql = "insert into user values(:id,:name,:age)";
    print "1\n";
    $stmt = $dbh->prepare($sql);
    print "2\n";
    $params = array(':id' => $id, ':name' => $name, ':age' => $age);
    print "3\n";

    $stmt->execute($parmas);
    print "4\n";

    header('Location: index.php?fg=1');

    // print "接続成功\n";
} catch (PDOException $e) {
    // print "接続失敗: " . $e->getMessage() . "\n";
    header('Location: index.php?fg=0?err->getMessage()');
    exit();
}
?>
