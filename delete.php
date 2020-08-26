<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'keito';
$password = 'Kei0418s';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $id = $_GET['id'];
    

    $sql = "delete from user where id = :id";
    $stmt = $dbh->prepare($sql);
    $params = array(':id' => $id);

    $stmt->execute($parmas);
    
    header('Location: index.php?fg=1');


} catch (PDOException $e) {
    // print "接続失敗: " . $e->getMessage() . "\n";
    header('Location: index.php?fg=2?err='. $e->getMessage());
    exit();
}
?>
