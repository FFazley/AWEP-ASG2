<!-- //PDO -- PHP Data Objects
// DSN - Data Source Name -- information database. -->

<?php
    $host = 'localhost'; //our client. server in the laptop.
    $port = 3306;
    $dbName = 'asg';
    $username = 'root';
    $password = 'root';

    //DSN name
    $dsn = "mysql:host{$host}; port={$port}; dbname={$dbName};charset=utf8";

    //wrap in try and catch to catch the error.
    try{
        //Create PDO instance
        $pdo = new PDO($dsn, $username,$password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Fetch as associative Array
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        echo 'Database connected...';

    }catch(PDOException $e){
        echo 'Connection failed'.$e->getMessage();
    }

?>