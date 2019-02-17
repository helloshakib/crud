<?php
$db = new PDO('mysql:host=localhost;dbname=bitm-joy;charset=utf8mb4', 'root', '');


 $query = "DELETE FROM `user_info` WHERE `user_info`.`id` = ".$_GET['id'];;
 $stmt = $db->exec($query);
 //$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

if($stmt){
    header ('location: all_data.php');
}


?>