<?php
// 여기에서 실제 로그인 처리를 수행
$username = $_POST['username'];
$password = $_POST['password'];

// 여기에서 사용자가 올바른지 검증하고 로그인 상태를 처리

if ($username === 'user' && $password === 'password') {
    // 로그인 성공
    header('Location: success.php');
    exit();
} else {
    // 로그인 실패
    header('Location: failure.php');
    exit();
}
?>