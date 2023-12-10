<?php

require "../contact.class.php";
$connection = new database();

extract($_POST);

if(isset($_POST['updateId'])){
    $user_id=$_POST['updateId'];
    $connection->select("contact","*","id='$user_id'");
    $result = $connection->sql;
    $response=array();
    while($row = mysqli_fetch_assoc($result)){
        $response=$row;
    }
    echo json_encode($response);
}else{
    $response['status']=200;
    $response['message']="No data found";
}



//Update query
if(isset($_POST['hiddendata'])){
    $uniqueid= $_POST['hiddendata'];
    $updatenom= $_POST['updatenom'];
    $updateprenom= $_POST['updateprenom'];

    $connection->select("categorie","*");
    $result = $connection->sql;
    
    while($row = mysqli_fetch_assoc($result)){
        if($_POST['updatecategorie']==$row['categorie']){
            $connection->update('contact',['nom'=>$updatenom,'prenom'=>$updateprenom,'categorie_id'=>$row['id']],"id='$uniqueid'");
            break;
        }
        
    }
    

    
}

?>