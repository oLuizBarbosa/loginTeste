<?php
    $HOST = 'localhost'; 
    $BASE = 'syslogin';
    $USER = 'root';
    $PASS = '';

    try {
        $conn = new PDO("mysql:host=$HOST;dbname=$BASE", $USER, $PASS);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        
        echo "Erro na conexão: " . $e->getMessage();
    }
    ?>