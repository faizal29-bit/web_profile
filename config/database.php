<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root'); // Sesuaikan dengan username MySQL Anda
define('DB_PASS', '');     // Sesuaikan dengan password MySQL Anda
define('DB_NAME', 'profil_mhs');

function getDbConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        return $pdo;
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['message' => 'Koneksi database gagal: ' . $e->getMessage()]);
        exit();
    }
}
?>