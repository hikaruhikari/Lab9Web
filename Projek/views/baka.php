<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contoh Modularisasi</title>
        <link href="/Projek/assets/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <header>
                <h1>Modularisasi Menggunakan Require</h1>
            </header>
            <nav>
                <a href="/Projek/views/dashboard.php">Home</a>
                <a href="/Projek/indeks.php">Data</a>
                <a href="/Projek/modules/auth/logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar dari akun Anda?');">
                    logout
                </a>
            </nav>