<?php
 if(isset($_POST['title']) && isset($_FILES["fileToUpload"]))
    {
        $ext = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);
        $filename = "uploads/".$_POST['title'].".$ext";
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filename);
    }
 header("Location: index.php");
 exit;