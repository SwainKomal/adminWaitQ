<?php
include("includes/db.php");

if(isset($_POST['push'])){
    $userId = $_POST['userId'];
    $shopId = $_POST['shopId'];
    $shopName = $_POST['shopName'];
    $count = $_POST['count'];
    $category = $_POST['category'];
    $shopGST = $_POST['shopGST'];
    $shopLocation = $_POST['shopLocation'];
    $shopOwnerPhone = $_POST['shopOwnerPhone'];
    $shopOwner = $_POST['shopOwner'];
    $bverify = $_POST['bverify'];
    $hasbuss= $_POST['hasbuss'];

    
    $data = [
        'userId' => $userId,
        'shopId' => $shopId,
        'shopName' => $shopName,
        'count' => $count,
        'category' => $category,
        'shopGST' => $shopGST,
        'shopLocation' => $shopLocation,
        'shopOwnerPhone' => $shopOwnerPhone,
        'shopOwner' => $shopOwner,
        'bverify' => $bverify,
        'hasbuss' => $hasbuss,
    ];
    $ref = "contact_form_data/";
    $pushData = $database->getReference($ref)->push($data);
    header("Location:retrieve_data.php");
}
else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $data = [
        'name' => $name,
        'email' => $email,
        'message' => $message
    ];
    $ref = "contact_form_data/";
    $pushData = $database->getReference($ref)->set($data);
}


?>