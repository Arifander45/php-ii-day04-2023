<?php

    # echo "Proses tambah...";
    
    /* membuat variabel baru
    dari data yang dikirimkan pada form
    */ 

    $nama_lengkap = $_GET['nama_lengkap'];
    $alamat_email= $_GET['alamat_email'];

    // Menampilkan Nama Lengkap
    echo "<b>Nama Lengkap </b> : <br>";
    echo $nama_lengkap;
    echo "<br><br>";

    // Menampilkan Alamat Email
    echo "<b>Alamat Email </b>: <br>";
    echo $alamat_email;

