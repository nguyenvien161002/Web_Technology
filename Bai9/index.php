<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Uploads file image</title>
    <style>
        form {
            border: 2px solid #000;
            width: max-content;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            padding: 10px;
        }
        div {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        input[type="file"] { 
            width: 60%;
        }
        label {
            margin-right: 5px;
        }
        p {
            margin: 10px 0 0 0;
        }
    </style>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000"><!-- gioi han file upload - don vi la byte -->
        <div>
            <label for="ufile">Upload</label>
            <input type="file" name="ufile" id="ufile" />
        </div>
        <p>
            <input type="submit" name="upload" id="upload" value="Up load" />
        </p>
    </form>
    <?php
        $target_path = "./images/";
        if (isset($_FILES['ufile'])) {
            $target_path = $target_path . basename($_FILES['ufile']['name']);
            if (!preg_match('/\.(jpg|gif)$/i', basename($_FILES['ufile']['name']))) {
                echo "Khong phai file anh!";
            } else
                if (file_exists($target_path)) {
                    echo basename($_FILES['ufile']['name']) . " already exists. ";
                } else 
        if (move_uploaded_file($_FILES['ufile']['tmp_name'], $target_path)) {
            echo "The file " .  basename($_FILES['ufile']['name']) .
                " has been uploaded";
            } else {
                echo "There was an error uploading the file, please try again!";
            }
        }
    ?>
</body>

</html>