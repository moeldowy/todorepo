<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload">
    </form>
    <?php
        if(isset($_FILES["file"])){
            $errors=array();
            $name=$_FILES["file"]["name"];
            $size=$_FILES["file"]["size"];
            $temp=$_FILES["file"]["tmp_name"];
            $explode=explode(".",$name);
            $ext=end($explode);
           $allowedExt=["jpg","png","JPG","PNG","jpeg","gif"];
           if(in_array($ext,$allowedExt)==false){
               $errors[]="Sorry, Your file type is not allowed to upload";
           }
           if($size>2097152){
               $errors[]="Sorry, Your file is bigger than 2 MB";
           }
           if( move_uploaded_file($temp,"media/".$name)==false){
               $errors[]="Sorry, Your does not uploaded successfuly";
           }
           if(empty($errors)){
               move_uploaded_file($temp,"media/".$name);
               $newSrc="media/$name";
                echo"<img src='$newSrc'/>";
           }else{
               foreach ($errors as $error){
                   echo $error;
               }
           }

        }
    ?>
</body>
</html>