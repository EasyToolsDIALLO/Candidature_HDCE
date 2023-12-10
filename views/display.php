

<?php
    require "../contact.class.php";
    $connection = new database();
    $connection->select("contact","*");
    $result = $connection->sql;
    extract($_POST);

    if(isset($_POST['displaySend'])){
        $tbody="";
        while($row = mysqli_fetch_assoc($result)){
            $id= $row['id'];
            $nom= $row['nom'];
            $prenom= $row['prenom'];
            $categorie= $row['categorie_id'];
            $tbody .= "<tr data-toggle='modal' data-target='#myFicheModal' data-id='$id' data-name=$nom data-prenom=$prenom data-categorie=$categorie>
            <td>$nom</td>
            <td>$prenom</td>
            <td>$categorie</td>
            </tr>";
        };
        echo $tbody;
    }
    

?>

<script type="text/javascript" src="javascript/ficheModal.js"></script>