<?php
define('Nome', 'db');
define ('senha', '');
define ('login', 'root');
define ('host_db', '127.0.0.1');

$connect = mysqli_connect (host_db, login, senha, Nome);
echo '<pre>';
print_r($connect);
?>