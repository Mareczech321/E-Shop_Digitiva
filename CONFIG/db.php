<?php 

    require_once 'config.php';

    try{
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "; charset=utf8mb4", DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<script>console.log('Database successfully connected!')</script>";
    }catch (PDOException $e){
        die("Error while loading database: ". $e->getMessage());
    }

?>