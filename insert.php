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

    $sql = "insert into user values(:id,:name,:age)";
    $stmt = $dbh->prepare($sql);
    $params = array(':id' => $id, ':name' => $name, ':age' => $age);

    $stmt->execute($parmas);

    header('Location: index.php?fg=1');

    print "接続成功\n";
} catch (PDOException $e) {
    print "接続失敗: " . $e->getMessage() . "\n";
    header('Location: index.php?fg=0?err=' $e->getMessage())
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="tab2" class="tab-pane">
                <form action="./insert.php" class="mt-5" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="id">Id</label>
                        <div class="col-sm-10">
                    <input class="form-control" type="text" name="id" id="id">
                    </div>
                </div>

                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                        <div class="col-sm-10>"
                    <input class="form-control" type="text" name="name" id="name">
                        </div>
                </div>

                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="age">Age</label>
                        <div class="col-sm-10>"
                    <input class="form-control" type="text" name="age" id="age">
                        </div>
                </div>

                <button type="submit" class="btn btn-primary">Insert<button>

                </form>

                            
            
            
            </div>
    
</body>
</html>