<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP with PHP</title>
    <link href="style.css" rel="stylesheet">
    </link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>OOP with PHP</h1>
        <select id="chon" onChange="ajax();">
            <option value="">Chọn</option>
            <option value="giaovien">Giáo viên</option>
            <option value="sinhvien">Sinh viên</option>
            <option value="hocphan">Học phần</option>
            <select>
    </div>
    <hr>
    <div id="info" style="display:none;" class="container">

    </div>
    <script>
        function ajax() {
            var obj = document.getElementById("info");
            obj.style.display = "block";
            var value = document.getElementById("chon").value;
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = () => {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    obj.innerHTML = xmlHttp.responseText;
                }
            }
            url = "showTable.php?chon=" + value;
            xmlHttp.open("GET", url, true);
            xmlHttp.send();
        }
    </script>
</body>

</html>