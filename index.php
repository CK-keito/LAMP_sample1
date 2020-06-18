<?php
$dsn = 'mysql:dbname=user;host=localhost;';
$user = 'keito';
$password = 'Kei0418s';
try {
    $dbh = new PDO($dsn, $user, $password);

    $sql = "select * from user"
    $result = $dbh->query($sql);

    print "接続成功\n";
} catch (PDOException $e) {
    print "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
<h1>hello,world</h1>
<?php foreach($result as $value){
    echo "<h1>$value[id] $value[name] $value[age]</h1>"
} ?>
</div>
    
</body>
</html>

