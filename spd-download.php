<?php
    $nama_file = "result.docx";
    // Set header untuk mengatur tipe konten dan nama file
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $nama_file . '"');
    readfile($nama_file);
    echo "Berhasil";
    header("Location: index.php");
?>