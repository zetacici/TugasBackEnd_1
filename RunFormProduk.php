<?php
require('produk.php');
require_once('db.php');

    // Jalankan form produk
    $produk = new produkLengkap();
    if (!isset($_POST['tombol'])) {
        $produk->input_dataProduk();
    } else {
        $produk->terima_dataProduk();
        // Simpan ke database
        try {
            $pdo = getPDO();
            $stmt = $pdo->prepare('INSERT INTO products (id_produk, nama_produk, tipe_produk, deskripsi) VALUES (?, ?, ?, ?)');
            $stmt->execute([$produk->id_barang, $produk->nama_barang, $produk->tipe_produk, $produk->deskripsi]);
            echo "<div>Produk berhasil disimpan.</div>";
        } catch (Exception $e) {
            echo "<div>Gagal menyimpan produk: " . htmlspecialchars($e->getMessage()) . "</div>";
        }
        $produk->cetak_dataProduk();
    }