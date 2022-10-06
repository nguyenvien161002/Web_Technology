
<?php
    require "../vendor/autoload.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
    if (isset($_POST)) {
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
        try {
            //  $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
            $mail->isSMTP();
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $nguoigui = 'nguyenvien161002@gmail.com';
            $matkhau = 'dtvcfouibjygruri'; // đã tạo ở bước 3
            $tennguoigui = 'Nguyễn Văn Viên';
            $mail->Username = $nguoigui; // SMTP username
            $mail->Password = $matkhau;   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom($nguoigui, $tennguoigui);
            $to_name = $_POST["to_name"];
            $tieude = $_POST["tieude"];
            $recipients = $_POST['email'];
            $email_array = explode(",",$recipients);
            $to_name = explode(",",$to_name);
            foreach($email_array as $email)
            {
               $to = $email;
               $mail->addAddress($to, $to_name); 
            }
            foreach ($to_name as $key => $value) {
                $noidungthu = '
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><b>Xin chào bạn!</b></h5>
                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                <p class="card-text">' . $_POST['content'] . '</p>
                            </div>
                        </div> ';
                $mail->Body =  $noidungthu;
            }
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = $tieude;
            if (isset($_FILES['file']['name'])) {
                $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['file']['name']));
                if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
                    $mail->addAttachment($uploadfile, $_FILES['file']['name']);
            }
            $mail->smtpConnect(array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $guithanhcong = "Gửi email thành công!";
            if ($mail->send()) {
                header("Location:index.php?msg=$guithanhcong");
            }
        } catch (Exception $e) {
            echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
        }
    }
?>