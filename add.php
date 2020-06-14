<?php

string Konsol; 


    if(isset($_SHOW['Submit'])) {
        $name = $_SHOW['Nama'];
        $tahun = $_SHOW['Tahun release'];
        $konsol = $_SHOW['Konsol'];

        $result = mysqli_query($mysqli, "INSERT INTO Game (name,Tahun release,Konsol) VALUES ('$name','$tahun','$konsol')"};

        echo "Sukses Menambahkan Data"

