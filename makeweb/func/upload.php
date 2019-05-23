<?php
session_start();
// 설정
$uploads_dir = '../image/big';
$uploads_thumbs_dir = '../image/thumbs';
$allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

// 변수 정리
$error = $_FILES['imgInp']['error'];
$name = $_FILES['imgInp']['name'];
$ext = array_pop(explode('.', $name));

echo "<meta charset=\"UTF-8\"/>";
// 오류 확인
if ($error != UPLOAD_ERR_OK) {
    switch ($error) {
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            echo "파일이 너무 큽니다. ($error)";
            break;
        case UPLOAD_ERR_NO_FILE:
            echo "파일이 첨부되지 않았습니다. ($error)";
            break;
        default:
            echo "파일이 제대로 업로드되지 않았습니다. ($error)";
    }
    exit;
}

// 확장자 확인
if (!in_array($ext, $allowed_ext)) {
    echo "허용되지 않는 확장자입니다.";
    exit;
}

$name = uniqid('img_') . '.' . $ext;

// 파일 복사
copy($_FILES['imgInp']['tmp_name'], "$uploads_thumbs_dir/$name");

// 파일 이동
move_uploaded_file($_FILES['imgInp']['tmp_name'], "$uploads_dir/$name");

$uploads_dir = 'image/big';
$uploads_thumbs_dir = 'image/thumbs';
$sql = "INSERT INTO upload(user_id, title, description, path, thumb_path)
VALUES ('{$_SESSION['id']}', '{$_POST['title']}', '{$_POST['description']}', '{$uploads_dir}/{$name}', '{$uploads_thumbs_dir}/{$name}')";

$db = mysqli_connect('localhost', 'root', 'apmsetup', 'makeweb');
mysqli_query($db, $sql);
mysqli_close($db);
echo "<script>alert(\"{$sql}\");</script>";
//echo "<script>location.replace('../gallery.php');</script>";