<?php
session_start();

$timeout = 300; // 5 menit
$now = time(); // waktu saat ini

// 🔹 Cek apakah user sudah login dulu
if (isset($_SESSION['username'])) {

    // Jika ada aktivitas terakhir
    if (isset($_SESSION['LAST_ACTIVITY'])) {
        $elapsedTime = $now - $_SESSION['LAST_ACTIVITY'];

        // Jika lewat dari timeout
        if ($elapsedTime > $timeout) {
            session_unset();
            session_destroy();
            echo "<script language='javascript'>alert('Session Anda Berakhir!'); document.location='../../../index.php';</script>";
            exit();
        }
    }

    // Update waktu aktivitas terakhir
    $_SESSION['LAST_ACTIVITY'] = $now;

} else {
    // Kalau belum login, arahkan ke login
    echo "<script language='javascript'>alert('Silakan login terlebih dahulu'); document.location='../../../index.php';</script>";
    exit();
}
?>
