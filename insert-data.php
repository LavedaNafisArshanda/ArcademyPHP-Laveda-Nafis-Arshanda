<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    )VALUE
    (
        '1',
        'Laveda Nafis Arshanda',
        'Frontend Developer',
        'Full Time',
        '15',
        'Malang',
        '0',
        'arshanda12@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Insert data telah berhasil";
    } else {
        echo "Insert data gagal";
    }
?>
    
    
   