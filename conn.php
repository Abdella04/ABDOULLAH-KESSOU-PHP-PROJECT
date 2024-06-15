<?php
$host = "localhost";
$port = 3306;
$dbname = "php_employee_management";
$username = "root";
$password = 'abcdefghijkl1234';

$dsn = "mysql:host={$host};port={$port};dbname={$dbname};ufc-charset=8";

try{
    $pdo = new PDO($dsn, $username, $password);


}catch(PDOException $e){
    echo "error" . $e->getMessage();

}