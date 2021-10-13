<?php

session_start();

include_once("conections.php");
include_once("URL.php");

$data = $_POST;
if(!empty($data)){

    if($data['type'] === "create"){
        $name = $data['name'];
        $phone = $data['phone'];
        $observations = $data['observations'];

        $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

        $stmt =$conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {

            $stmt->execute();
            $_SESSION['msg'] = "Contato adicionado com sucesso";
        
        }catch(PDOException $e) {
        
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }

    header("location:" . $BASE_URL . "../index.php");

}


else{



    $id;

    if(!empty($_GET)){
        $id = $_GET["id"];
    }

    if(!empty($id)){
        $query = "SELECT * FROM contacts WHERE id= :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();

    }

    else{


        $contacts = [];

        $stmt = $conn->prepare("SELECT * FROM contacts");
        
        $stmt->execute();
        
        $contacts = $stmt->fetchAll();





    }
}

$conn = null;

