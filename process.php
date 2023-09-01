<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "files/";
    $imageFileType = strtolower(pathinfo($_FILES["profileImage"]["name"], PATHINFO_EXTENSION));

    $uniqueFileName = uniqid() . "_" . bin2hex(random_bytes(8)) . "." . $imageFileType;
    $targetFile = $targetDir . $uniqueFileName;
    $uploadOk = 1;

    
    $check = getimagesize($_FILES["profileImage"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    
    if ($_FILES["profileImage"]["size"] > 500000) {
        echo "File is too large.";
        $uploadOk = 0;
    }

    
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Only JPG, JPEG, and PNG files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFile)) {
            
            $id = $_POST["id"];
            $name = $_POST["name"];
            $dob = $_POST["dob"];
            $position = $_POST["position"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $photoFilePath = $targetFile; 

            include 'id_card_template.php';
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    echo "Invalid request.";
}
?>
