<?php
require ('conn.php');
   if (isset($_GET["id"])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM employee WHERE id=$id"; 
        $result = $pdo->query($sql);
}     
   header("location: ./index.php");
   exit;
?>