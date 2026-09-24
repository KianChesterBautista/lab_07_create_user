<?php
$host = getenv('DB_HOST');
$port = getenv('DB_PORT') ?: 3306;
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db_name = getenv('DB_NAME');

$connection = mysqli_init();
$connection->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, false);

try {
    $connection->real_connect($host, $user, $pass, $db_name, $port, NULL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
} catch (mysqli_sql_exception $e) {
    die("Database Connection Error: " . $e->getMessage());
}
?>
