<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form gửi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php 
        if(isset($_GET['msg'])) {
            echo "<p class='text-success>".$_GET['msg']."</p>";
        }
    ?>
    <div class="container-sm mt-3">
        <form action="email.php" class="border border-info p-3 rounded" style="width: 500px; margin: 100px auto;" enctype="multipart/form-data" method="POST">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email những người nhận:</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="mb-3 mt-3">
                <label for="to_name" class="form-label">Tên những người nhận:</label>
                <input type="text" class="form-control" name="to_name" placeholder="Tên">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Tiêu đề:</label>
                <input type="text" class="form-control" name="tieude" placeholder="Tiêu đề">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Nội dung:</label>
                <textarea name="content" id="editor" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">File:</label>
                <input type="file" class="form-control" name="file">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>