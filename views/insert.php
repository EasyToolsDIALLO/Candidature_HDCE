<?php

require "../contact.class.php";
$connection = new database();

extract($_POST);


if(isset($_POST['name']) && isset($_POST['prenoms']) && isset($_POST['categories'])){
    $connection->select("categorie","*");
    $result = $connection->sql;
    
    while($row = mysqli_fetch_assoc($result)){
        if($_POST['categories']==$row['categorie']){
            $connection->insert('contact',['nom'=>$_POST['name'],'prenom'=>$_POST['prenoms'],'categorie_id'=>$row['id']]);
            break;
        }
        
    }
    
}

?>