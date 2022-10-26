<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_error', 1);
    include('config.php');

    if(isset($_POST["btnm"])){
        $firstname = $_POST["txtfirstname"];
        $lastname = $_POST["txtlastname"];
        $filename=$_FILES["image"]["images"];
        $filetype=$_FILES["image"]["type"];
        $filesize=$_FILES["image"]["size"];
        $temp_location =$_FILES["image"]["temp_name"];
        $error=$_FILES["image"]["error"];

        $upload_path ="uploads";

        if($filesize > 1000000000){
            exit("file is too large,please upload only file lower than 10mb");

            // to check for the file extension
            $file_extension = explode(".",$filename);
            $permitted_extension = ["png","jpg","gif","jpeg"];
            if(!in_arry(strtolower($file_extension[1]),$permitted_extension)){
                exit("unsupported file format");
            } else {
                $new_name =uniqid();
                $new_name = $upload_path.$new_name .".". strtolower($file_extension[1]);

                move_uploaded_file($temp_location,$new_name);

            }
            $sql = "INSERT INTO upload ($firstname,$lastname, img)  VALUE ('$firstname','$lastname',$new_name)";

            $result = mysqli_query($conn,$sql);
            
            if(!$result){
                exit("error:".mysli_error($conne));
            } else{
                header("location:display.php");
            }
        }




    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="form.php" methos="POST" enctype="multipart/form-data">
        <input type="text" name="txtfirstname" placeholder="firstname">
        <input type="text" name="txtlastname"placeholder="lastname">
        <input type="file" name="images" placeholder="image">
        <input type="submit" name="btnm" value="submit">


    </form>
</body>
</html>