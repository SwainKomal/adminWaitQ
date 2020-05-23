<?php
include("includes/db.php");

if(isset($_POST['update'])){
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
    $ref = $_POST['ref'];
    
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
    ];
    
    $pushData = $database->getReference($ref)->update($data);
    header("Location:retrieve_data.php");
}
else if(isset($_GET['key'])){
    $database->getReference("contact_form_data/".$_GET['key'])->remove();
    header("Location:retrieve_data.php");
}

?>