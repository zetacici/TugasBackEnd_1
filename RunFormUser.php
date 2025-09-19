<?php

require('user.php');
require_once('db.php');

    // Jalankan form user
    $user = new UserForm();
    if (!isset($_POST['tombol'])) {
        $user->input_data();
    } else {
        $user->terima_data();
        // menyimpan database
        try {
            $pdo = getPDO();
            $stmt = $pdo->prepare('INSERT INTO users (nim, nama, gender, alamat) VALUES (?, ?, ?, ?)');
            $alamatJson = is_array($user->alamat) ? json_encode($user->alamat) : null;
            $stmt->execute([$user->nim, $user->nama, $user->gender, $alamatJson]);
            echo "<div>Data user berhasil disimpan.</div>";
        } catch (Exception $e) {
            echo "<div>Gagal menyimpan user: " . htmlspecialchars($e->getMessage()) . "</div>";
        }
        $user->cetak_data();
    }