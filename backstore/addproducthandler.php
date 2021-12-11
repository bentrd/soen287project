<?php
$newProduct = new stdClass();
$newProduct->name = $_POST['name'];
$newProduct->price = doubleval($_POST['price']);
$newProduct->desc = $_POST['desc'];
$newProduct->quantity = 0;
$newProduct->aisle = filter_input(INPUT_POST, 'aisle', FILTER_SANITIZE_STRING);

$uploadDirectory = "../products/";

$errors = []; // Store errors here

$fileExtensionsAllowed = ['jpeg', 'jpg', 'png']; // These will be the only file extensions allowed 
$fileName = $_FILES['picture']['name'];
$fileSize = $_FILES['picture']['size'];
$fileTmpName  = $_FILES['picture']['tmp_name'];
$fileType = $_FILES['picture']['type'];
$tmp = explode('.', $fileName);
$fileExtension = strtolower(end($tmp));
$pictureName = $_POST['name'] . "." . $fileExtension;

$newProduct->img = "/" . $pictureName;

$uploadPath = $uploadDirectory . $pictureName;

if (!in_array($fileExtension, $fileExtensionsAllowed)) {
    $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
}

if ($fileSize > 4000000) {
    $errors[] = "File exceeds maximum size (4MB)";
}

if (empty($errors)) {
    $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

    if ($didUpload) {
        echo "The file " . basename($fileName) . " has been uploaded";
    } else {
        echo "An error occurred.";
    }
} else {
    foreach ($errors as $error) {
        echo $error . "These are the errors" . "\n";
    }
}

$jsondata = file_get_contents("../data/products.json");
$data = json_decode($jsondata, true);
array_push($data, $newProduct);
$jsondata = json_encode($data);
file_put_contents("../data/products.json", $jsondata);

echo "<script type='text/javascript'>window.location = './products.php'</script>";
