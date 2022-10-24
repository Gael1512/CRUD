<!--arquivo extremamente importante que faz o acesso entre a página web com o banco de dados mysql-->

<?php

$db_name = 'cadastro';
$db_host = 'localhost';
$db_user = "root";
$db_password = '';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);	