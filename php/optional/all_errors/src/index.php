<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>

<body>
    <h2>Upload Image</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        Select image:
        <input type="file" name="fileUpload" accept=".png">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <?php
    if (isset($_FILES['fileUpload'])) {
        $file = $_FILES['fileUpload'];
        try {
            if ($file['type'] != "image/png") {
                throw new Exception("not an image", 1);
            } else {
                $target_dir = "photos/";
                $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
                move_uploaded_file($file['tmp_name'], $target_file);
                throw new Exception("image uploaded successfully!", 1);
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    ?>
</body>

</html>