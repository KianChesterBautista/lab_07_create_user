<?php
$db_host = getenv('DB_HOST');
$db_port = getenv('DB_PORT') ?: 3306;
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');
$db_name = getenv('DB_NAME');

$db = mysqli_init();
$db->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, false);

try {
    $db->real_connect($db_host, $db_user, $db_pass, $db_name, $db_port, NULL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
} catch (mysqli_sql_exception $e) {
    die("Database Connection Error: " . $e->getMessage());
}
?>
