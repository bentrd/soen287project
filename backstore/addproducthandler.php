<?php
$flag = true;
$newProduct = new stdClass();
if (isset($_POST['name']))
    $newProduct->name = $_POST['name'];
else $flag = false;
if (isset($_POST['price']))
    $newProduct->price = doubleval($_POST['price']);
else $flag = false;
if (isset($_POST['desc']))
    $newProduct->desc = $_POST['desc'];
else $flag = false;
$newProduct->quantity = 0;
if (isset($_POST['aisle']))
    $newProduct->aisle = $_POST['aisle'];
else $flag = false;

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
    if (!$didUpload) $flag = false;
} else {
    foreach ($errors as $error) {
        echo $error . "These are the errors" . "\n";
        $flag = false;
    }
}

$jsondata = file_get_contents("../data/products.json");
$data = json_decode($jsondata, true);
$newProduct->id = count($data);
if ($flag) array_push($data, $newProduct);
$jsondata = json_encode($data);
file_put_contents("../data/products.json", $jsondata);

echo "<script type='text/javascript'>window.location = './products.php'</script>";
