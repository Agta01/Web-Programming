<?php
    $tugasIdn = [
        'Agta1' => [
            'Foto' => '<img src="fotoDiri.jpeg" width=200 height=200></img>',
            'Nama' => 'Agta Fadjrin Aminullah',
            'Alamat' => 'Jl. mawar',
            'NomorTelepon' => '081222222222',
            'Jurusan' => 'Teknologi Informasi',
        ],
        'Agta2' => [
            'Foto' => '<img src="tree1.jpg" width=200 height=200></img>',
            'Nama' => 'Agta Fadjrin',
            'Alamat' => 'Jl. Melati',
            'NomorTelepon' => '0813455622222',
            'Jurusan' => 'Penerbangan',
        ],
        'Agta3' => [
            'Foto' => '<img src="bunga1.jpg" width=200 height=200></img>',
            'Nama' => 'Agta Aminullah',
            'Alamat' => 'Jl. Kemangi',
            'NomorTelepon' => '081919191199',
            'Jurusan' => 'Elektro'
        ]
    ];

    foreach($tugasIdn as $identitas){
        echo "$identitas[Foto] <br>";
        echo "Nama: $identitas[Nama] <br>" ;
        echo "Alamat: $identitas[Alamat] <br>"; 
        echo "Nomor Telepon: $identitas[NomorTelepon] <br>";
        echo "Jurusan: $identitas[Jurusan] <hr>";
    }
?>